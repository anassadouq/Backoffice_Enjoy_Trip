<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
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
        
        // Retrieve trip name from the database
        $trip = Trip::find($reservation['id_trip']);
        $reservation['trip_name'] = $trip ? $trip->name : 'Unknown Trip';
    
        // Send email with unique subject and Message-ID
        Mail::to('anassadouq123@gmail.com')->send(new ContactFormMail($reservation, uniqid()));
     
        // Redirect to a specific page or route after sending email with congratulatory message
        return redirect('/')->with('success', 'Votre réservation est en cours de traitement, vous allez recevoir dans les 24h un e-mail vous invitant à suivre la procédure de paiement');
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