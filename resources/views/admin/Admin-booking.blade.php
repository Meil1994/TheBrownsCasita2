<div>
    @extends('admin.Admin-layout')
    @section('content')

    <div>
    @extends('admin.Admin-layout')
    @section('content')

    <div class="p-2 pt-20 h-screen bg-slate-300 overflow-auto">
        <h1 class="text-center text-4xl text-zinc-700">Client Bookings</h1>
        <hr class="w-50 ml-auto mr-auto mb-20 bg-slate-300 h-1"/>
        <div class=" pb-10">
            <label class="pr-2 text-xl">Search Bookings</label>
            <input class="border border-slate-500 w-50 h-8 rounded-md"></input>
            <button class="h-8 border border-black pl-1 pr-1 rounded-md hover:bg-white">Search</button>
        </div>
        <div class="overflow-auto bg-white">
            <table class="w-100">
                @unless ($bookings->isEmpty())
                <thead class="text-center bg-slate-900 text-white">
                    <tr class="h-10">
                        <th class="border border-white">User Id</th>
                        <th class="border border-white">Created At</th>
                        <th class="border border-white">Check In</th>
                        <th class="border border-white">Check Out</th>
                        <th class="border border-white">Total Days</th>
                        <th class="border border-white">Guest</th>
                        <th class="border border-white">Note</th>
                        <th class="border border-white">Amount</th>
                    </tr>
                    
                </thead>
                   <?php $totalAmount = 0; ?>
                    @foreach ($bookings as $booking)
                <tbody class="text-center">
                    <tr>
                        
                        <td class="border border-black p-2">{{ $booking->user_id }}</td>
                        <td class="border border-black">{{ $booking->created_at }}</td>
                        <td class="border border-black p-2">{{ $booking->checkin_date }}</td>
                        <td class="border border-black p-2">{{ $booking->checkout_date }}</td>
                        <td class="border border-black">{{ $booking->total_days }}</td>
                        <td class="border border-black">{{ $booking->guests }}</td>
                        <td class="border border-black">{{ $booking->note }}</td>
                        <td class="border border-black">{{ $booking->amount }}</td>
                    </tr>
                    <?php $totalAmount += $booking->amount; ?>
                </tbody>
                @endforeach

                @else
                <div class="bg-slate-300">
                    <p class="text-red-500 text-xl">No Bookings Found</p>
                </div>
                @endunless
                
            
            </table>
        </div>
        <input disabled class="border border-black bg-white float-right mt-10 P-1" value="Total Amount: PHP {{ $totalAmount }}"/>
    </div>
</div>

@endsection

    










