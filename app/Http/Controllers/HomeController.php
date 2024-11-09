<?php

namespace App\Http\Controllers;

use App\Models\Trip;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home', [
            'trips' => Trip::all()
        ]);
    }
}