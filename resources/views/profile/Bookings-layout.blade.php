<div>
    @extends('profile.Profile-layout')
    @section('content')

    <div class="p-2 pt-20 h-screen bg-slate-300 overflow-auto">
        <h1 class="text-center text-4xl text-zinc-700">My Bookings</h1>
        <hr class="w-50 ml-auto mr-auto mb-20 bg-slate-300 h-1"/>
        <div class="overflow-auto bg-white">
            <table class="w-100">
                @unless ($bookings->isEmpty())
                <thead class="text-center bg-slate-900 text-white">
                    <tr class="h-10">
                        <th class="border border-white">Check In</th>
                        <th class="border border-white">Check Out</th>
                        <th class="border border-white">Total Days</th>
                        <th class="border border-white">Guests</th>
                        <th class="border border-white">Booking Created</th>
                        <th class="border border-white">Total Amount</th>
                    </tr>
                    
                </thead>
                @foreach ($bookings as $booking)
                <tbody class="text-center">
                    <tr>
                        <td class="border border-black p-2">{{ $booking->checkin_date }}</td>
                        <td class="border border-black">{{ $booking->checkout_date }}</td>
                        <td class="border border-black">{{ $booking->total_days }}</td>
                        <td class="border border-black">{{ $booking->guests }}</td>
                        <td class="border border-black">{{ $booking->created_at }}</td>
                        <td class="border border-black">₱ {{ $booking->amount }}</td>
                    </tr>
                </tbody>
                @endforeach
                    @else
                        <div class="w-100 text-center pb-10">
                            <p class="text-center text-xl mb-3">No Bookings Found</p>
                            <a href="/calendar" class="hover:border hover:border-indigo-700 hover:bg-white hover:text-indigo-700 p-4 pt-1 pb-1 bg-indigo-700 text-white">Start Booking</a>
                        </div>
                    @endunless
            </table>
        </div>
    </div>
</div>
@endsection

    









