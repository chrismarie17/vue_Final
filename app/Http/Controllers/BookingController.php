<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();  
        return view('bookings.index', compact('bookings'));  
    }

    public function create()
    {
        $users = User::all();  
        return view('bookings.create', compact('users'));  
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', 
            'destination' => 'required|string|max:255',  
            'date_time' => 'required|date', 
        ]);

        Booking::create($request->all());  

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
    }

    public function edit(Booking $booking)
    {
        $users = User::all();  
        return view('bookings.edit', compact('booking', 'users'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'destination' => 'required|string|max:255',
            'flight_number' => 'required|string|max:10',
            'departure_date' => 'required|date',
            'seat_class' => 'required|string',
        ]);

        $booking->update($request->all());  

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully!');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();  
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully!');
    }

    public function show(Booking $booking)
    {
        $booking = Booking::findOrFail($id);

    $user = User::findOrFail($booking->user_id);

    return view('bookings.show', compact('booking'));
    }

    

    
}