<?php

use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminBooking;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminEditController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminFeedbackController;

Route::get('/', [HomeController::class, 'loading']);
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::post('/feedbacks', [HomeController::class, 'feedback'])->middleware('auth');


Route::get('/facility', [FacilityController::class, 'facility']);
Route::post('/feedbacks/facility', [FacilityController::class, 'feedbackFacility'])->middleware('auth');


Route::get('/calendar', [CalendarController::class, 'calendar'])->name('calendar');
Route::post('/feedbacks/calendar', [CalendarController::class, 'feedbackCalendar'])->middleware('auth');


Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/message/contact', [ContactController::class, 'messageContact']);
Route::post('/feedbacks/contact', [ContactController::class, 'feedbackContact'])->middleware('auth');


Route::match(['get', 'post'], '/checkout', [CheckoutController::class, 'index'])->name('checkout')->middleware('auth');
Route::get('/bookings', [CheckoutController::class, 'book'])->middleware('auth');
Route::post('/bookings', [CheckoutController::class, 'book'])->middleware('auth');
Route::get('/booking/success', [CheckoutController::class, 'success'])->middleware('auth');
Route::get('/is-first-time-booker', [CheckoutController::class, 'isFirstTimeBooker'])->name('is-first-time-booker');


Route::get('/register', [UserController::class, 'register']);
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');
Route::get('/my/profile', [UserController::class, 'manage'])->middleware('auth');
Route::get('/my/profile/edit', [UserController::class, 'editfile'])->middleware('auth');
Route::put('/my/profile/edit', [UserController::class, 'update'])->name('my.profile.update');
Route::get('/my/profile/feedback', [UserController::class, 'profileFeedback'])->middleware('auth');
Route::post('/feedbacks/profile', [UserController::class, 'feedbackProfile'])->middleware('auth');


Route::post('/create', [PaypalController::class, 'pay'])->name('payment');
Route::get('success', [PaypalController::class, 'success']);
Route::get('error', [PaypalController::class, 'error']);
Route::get('/payment/success/{paymentId}', [PaypalController::class, 'paymentSuccess'])->name('paymentSuccess');

Route::get('/reset', [ResetController::class, 'resetPassword']);
Route::post('/reset', [ResetController::class, 'forgotPassword']);
Route::get('/reset/password/{token}', [ResetController::class, 'updatePassword']);
Route::post('/reset/password/{token}', [ResetController::class, 'postReset']);

Route::get('/about', [AboutController::class, 'aboutUs']);

Route::get('/terms', [TermsController::class, 'terms']);
Route::get('/privacy', [TermsController::class, 'privacy']);



Route::fallback(function () {
    return redirect('/');
});

Route::any('/{any}', function () {
    return redirect('/');
})->where('any', '.*');





