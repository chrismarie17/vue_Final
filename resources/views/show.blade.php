<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1>User Details</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
            <li class="list-group-item"><strong>Phone:</strong> {{ $user->phone }}</li>
        </ul>
        <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Back to User List</a>
    </div>
    @extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>

    <div class="card">
        <div class="card-header">
            <h3>{{ $user->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <p><strong>Created At:</strong> {{ $user->created_at->format('d M, Y') }}</p>
            <p><strong>Updated At:</strong> {{ $user->updated_at->format('d M, Y') }}</p>
        </div>
        @extends('layouts.app')

@section('content')
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



        <div class="card-footer">
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users List</a>
        </div>
    </div>
</div>
@endsection
</body>
</html>
