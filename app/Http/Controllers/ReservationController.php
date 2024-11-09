<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation.index', [
            'reservations' => Reservation::with('trip')->get()
        ]);
    }    

    public function create(Request $request)
    {
        $tripId = $request->input('tripId');
        $trip = Trip::find($tripId);
        return view('reservation.create', compact('trip'));
    }    

    public function store(StoreReservationRequest $request)
    {
        $reservation = new Reservation();
        $reservation->id_trip = $request->id_trip;
        $reservation->nom = $request->nom;
        $reservation->prenom = $request->prenom;
        $reservation->cin = $request->cin;
        $reservation->tel = $request->tel;
        $reservation->dateDep = $request->dateDep;
        $reservation->villeDep = $request->villeDep;
        $reservation->email = $request->email;
        
        $reservation->save();
    
        // Redirect to the same page with the reservation ID
        return redirect('/');
    }        

    public function show($tripId)
    {
        $trip = Trip::find($tripId);
        $reservations = Reservation::where('id_trip', $tripId)->get();
        return view('reservation.index', compact('reservations', 'trip'));
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $tripId = $reservation->id_trip;
        $reservation->delete();
    
        return redirect()->route('reservation.index')
            ->with('success', 'Le reservation a été supprimé avec succès.');
    }
}