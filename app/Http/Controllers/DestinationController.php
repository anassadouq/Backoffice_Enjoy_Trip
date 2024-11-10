<?php

namespace App\Http\Controllers;

use App\Models\Trip;

class DestinationController extends Controller
{
    public function index()
    {
        return view('destination.destination', [
            'trips' => Trip::all()
        ]);
    }
}