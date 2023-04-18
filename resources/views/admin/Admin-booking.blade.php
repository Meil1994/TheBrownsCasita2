@extends('admin.Admin-layout')

@section('content')
<h1>Booking</h1> 


<table>
    <thead>
        <tr>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Guests</th>
            <th>Created</th>
            <th>Note</th>
            <th>Discount</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ $booking->checkin_date }}</td>
            <td>{{ $booking->checkout_date }}</td>
            <td>{{ $booking->guests }}</td>
            <td>{{ $booking->created_at }}</td>
            <td>{{ $booking->note }}</td>
            <td>{{ $booking->discount }}</td>
            <td>{{ $booking->amount }}</td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection
