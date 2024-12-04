@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a New Booking</h1>

        <form method="POST" action="{{ route('bookings.store') }}">
            @csrf

            <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    <option value="">Select User</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="flight_number">Flight Number</label>
                <input type="text" name="flight_number" id="flight_number" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" name="destination" id="destination" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input type="date" name="departure_date" id="departure_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="seat_class">Seat Class</label>
                <select name="seat_class" id="seat_class" class="form-control" required>
                    <option value="">Select Seat Class</option>
                    <option value="Economy">Economy</option>
                    <option value="Business">Business</option>
                    <option value="First Class">First Class</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date_time">Date & Time</label>
                <input type="datetime-local" name="date_time" id="date_time" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Booking</button>
        </form>

        <a href="{{ route('bookings.index') }}" class="btn btn-secondary mt-3">Back to Booking List</a>
    </div>
@endsection
