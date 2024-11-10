<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home', [
            'admins' => Admin::all()
        ]);
    }
}