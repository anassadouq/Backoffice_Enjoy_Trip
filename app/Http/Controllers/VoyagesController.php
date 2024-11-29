<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class VoyagesController extends Controller
{
    public function national()
    {
        return view('voyages.national', [
            'admins' => Admin::all()
        ]);
    }

    public function international()
    {
        return view('voyages.international', [
            'admins' => Admin::all()
        ]);
    }
}