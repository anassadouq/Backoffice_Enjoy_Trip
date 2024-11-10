<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.about', [
            'admins' => Admin::all()
        ]);
    }
}