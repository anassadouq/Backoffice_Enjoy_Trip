<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class DestinationController extends Controller
{
    public function index()
    {
        return view('destination.destination', [
            'admins' => Admin::all()
        ]);
    }
}