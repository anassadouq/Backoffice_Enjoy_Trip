<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Http\Requests\StoreTripRequest;
use App\Http\Requests\UpdateTripRequest;

class TripController extends Controller
{
    public function index()
    {
        return view('trip.index', [
            'trips' => Trip::all()
        ]);
    }

    public function create()
    {
        return view('trip.create');
    }

    public function store(StoreTripRequest $request)
    {
        $trip = new Trip();
        $trip->name = $request->name;
        $trip->where = $request->where;
        $trip->rating = $request->rating;
        $trip->places = $request->places;
        $trip->nombrepersonne = $request->nombrepersonne;
        $trip->price = $request->price;
        $trip->dateD = $request->dateD;
        $trip->dateF = $request->dateF;
        $trip->description = $request->description;
        
        if ($request->hasFile('image')) {
            $trip->image = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $trip->image);
        }
        
        $trip->save();
        return redirect()->route('trip.index');
    }
    
    public function show(Trip $trip)
    {
        return view('trip.show', compact('trip'));
    }

    public function edit(Trip $trip)
    {
        return view('trip.edit', compact('trip'));
    }

    public function update(UpdateTripRequest $request, Trip $trip)
    {
        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($trip->image && file_exists(public_path('images/' . $trip->image))) {
                unlink(public_path('images/' . $trip->image));
            }
    
            // Store the new image and update the trip record
            $trip->image = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $trip->image);
        }
    
        // Update the trip details
        $trip->update($request->except('image'));
    
        return to_route('trip.index');
    }

    public function destroy($id)
    {
        $trip = Trip::findOrFail($id);
        $trip->delete();

        return redirect()->route('trip.index')
            ->with('success', 'Le trip a été supprimé avec succès.');
    }
}