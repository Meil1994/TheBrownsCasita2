<?php

namespace App\Http\Controllers;

use Throwable;
use Omnipay\Omnipay;
use App\Models\Payment; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaypalController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {
            
            $response = $this->gateway->purchase([
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error'),
                'description' => json_encode([
                    'checkin_date' => $request->checkin_date,
                    'checkout_date' => $request->checkout_date,
                    'total_days' => $request->total_days,
                    'guests' => $request->guests,
                    'note' => $request->note,
                    'discount' => $request->discount,
                ]),
            ])->send();
            
            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase([
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ]);

            $response = $transaction->send();
           

            if ($response->isSuccessful()) {
                $arr = $response->getData();
               

                // Access the transactions data
                $transactions = $arr['transactions'];

                // Assuming there is only one transaction in the array
                $transaction = $transactions[0];

                // Access the amount data within the transaction
                $amount = $transaction['amount'];
                $total = $amount['total'];
                $currency = $amount['currency'];

                // Access other necessary data
                $paymentId = $arr['id'];
                $payerId = $arr['payer']['payer_info']['payer_id'];
                $payerEmail = $arr['payer']['payer_info']['email'];
                $paymentStatus = $arr['state'];

                $description = $transaction['description'];
                $descriptionData = json_decode($description, true);

                $checkinDate = $descriptionData['checkin_date'];
                $checkoutDate = $descriptionData['checkout_date'];
                $totalDays = $descriptionData['total_days'];
                $guests = $descriptionData['guests'];
                $note = $descriptionData['note'];
                $discount = $descriptionData['discount'] ?? 0.00;

                // Save the payment details to the database
                $payment = new Payment();
                $payment->user_id = Auth::id();
                $payment->checkin_date = $checkinDate;
                $payment->checkout_date = $checkoutDate;
                $payment->total_days = $totalDays;
                $payment->guests = $guests;
                $payment->note = $note;
                $payment->discount = $discount;
                $payment->payment_id = $paymentId;
                $payment->payer_id = $payerId;
                $payment->payer_email = $payerEmail;
                $payment->amount = $total;
                $payment->currency = $currency;
                $payment->payment_status = $paymentStatus;
                $payment->booking_status = 'Upcoming';
                $payment->save();

                $paymentId = $payment->payment_id;

                return redirect()->route('paymentSuccess', ['paymentId' => $paymentId]);
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Payment is Declined!!';
        }
    }

    public function error()
    {
        return redirect()->route('calendar')->with('error', 'Payment cancelled!');
    }

    public function paymentSuccess($paymentId)
    {
        return view('success.Success')->with('paymentId', $paymentId);
    }
}
