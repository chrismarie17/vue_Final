@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Booking Details</h1>

        <div class="card">
            <div class="card-header">
                <h3>{{ $booking->flight_number }} - {{ $booking->destination }}</h3>
            </div>
            <div class="card-body">
                <p><strong>User:</strong> {{ $booking->user->name }}</p>
                <p><strong>Departure Date:</strong> {{ $booking->departure_date }}</p>
                <p><strong>Seat Class:</strong> {{ $booking->seat_class }}</p>
                <p><strong>Booking Date & Time:</strong> {{ $booking->date_time }}</p>
            </div>

            <div class="container">
                <h1>User Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">Email: {{ $user->email }}</p>
                        <p class="card-text">Phone: {{ $user->phone }}</p>
                        <p class="card-text">Created At: {{ $user->created_at }}</p>
                        <p class="card-text">Updated At: {{ $user->updated_at }}</p>
                        <!-- Add more fields as needed -->
                    </div>
                    
            <div class="card-footer">
                <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Back to Booking List</a>
            </div>
        </div>
    </div>
@endsection
