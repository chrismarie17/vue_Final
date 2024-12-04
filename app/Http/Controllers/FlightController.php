<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    public function create()
    {
        return view('flights.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'flight_number' => 'required',
            'departure' => 'required',
            'destination' => 'required',
            'departure_time' => 'required|date',
            'seats_available' => 'required|integer',
        ]);

        Flight::create($request->all());
        return redirect()->route('flights.index');
    }

    public function edit(Flight $flight)
    {
        return view('flights.edit', compact('flight'));
    }

    public function update(Request $request, Flight $flight)
    {
        $request->validate([
            'flight_number' => 'required',
            'departure' => 'required',
            'destination' => 'required',
            'departure_time' => 'required|date',
            'seats_available' => 'required|integer',
        ]);

        $flight->update($request->all());
        return redirect()->route('flights.index');
    }

    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flights.index');
    }
}
