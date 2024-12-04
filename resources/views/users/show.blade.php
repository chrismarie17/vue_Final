<!-- resources/views/users/show.blade.php -->
@extends('layouts.app') <!-- Assuming you're using a base layout -->

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
        </div>
    </div>
@endsection
