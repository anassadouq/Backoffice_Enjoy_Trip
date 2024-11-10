<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home', [
            'admins' => Admin::all()
        ]);
    }

    public function showTrips(Request $request)
    {
        $date = $request->input('date'); // Récupérer la date du formulaire
    
        // Assurez-vous que la date soit valide
        if ($date) {
            // Convertir la date sélectionnée en format Carbon
            $selectedDate = Carbon::parse($date);
    
            // Filtrer les trips dont la date sélectionnée est entre dateD et dateF
            $admins = Admin::whereDate('dateD', '<=', $selectedDate)->whereDate('dateF', '>=', $selectedDate)->get();
        } else {
            // Récupérer tous les trips si aucune date n'est sélectionnée
            $admins = Admin::all();
        }
    
        return view('home.home', compact('admins'));
    }
}