<?php

namespace App\Http\Controllers;

use App\Models\Trip;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.about', [
            'trips' => Trip::all()
        ]);
    }
}