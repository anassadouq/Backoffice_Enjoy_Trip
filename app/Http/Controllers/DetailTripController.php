<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\DetailTrip;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDetailTripRequest;
use App\Http\Requests\UpdateDetailTripRequest;

class DetailTripController extends Controller
{
    public function index()
    {
        return view('detail.index', [
            'detail_trip' => DetailTrip::all()
        ]);
    }

    public function create(Request $request)
    {
        $adminId = $request->input('adminId');
        $admin = Admin::find($adminId);
        return view('detail_trip.create', compact('admin'));
    }    

    public function store(StoreDetailTripRequest $request)
    {
        $detail_trip = new DetailTrip();
        $detail_trip->programme = $request->programme;
        $detail_trip->id_admin = $request->id_admin;
        $detail_trip->servis_inclus = $request->servis_inclus;
    
        if ($request->hasFile('tarif')) {
            $detail_trip->tarif = $request->tarif->getClientOriginalName();
            $request->tarif->move(public_path('images'), $detail_trip->tarif);
        }
        
        $detail_trip->save();
    
        return redirect()->route('detail_trip.show', ['adminId' => $request->id_admin]);
    }    

    public function edit(DetailTrip $detail_trip)
    {
        return view('detail_trip.edit', compact('detail_trip'));
    }

    public function update(UpdateDetailTripRequest $request, DetailTrip $detail_trip)
    {
        $detail_trip->update($request->except('tarif')); 
    
        if ($request->hasFile('tarif')) {
            $imagePath = public_path('images/'.$detail_trip->tarif);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
    
            $detail_trip->tarif = $request->tarif->getClientOriginalName();
            $request->tarif->move(public_path('images'), $detail_trip->tarif);
        }
    
        $detail_trip->save();
    
        return redirect()->route('detail_trip.show', ['adminId' => $detail_trip->id_admin])
            ->with('success', 'Le détail du trip a été mis à jour avec succès.');
    }    

    public function show($adminId)
    {
        $admin = Admin::find($adminId);
        $detail_trips = DetailTrip::where('id_admin', $adminId)->get();
        return view('detail_trip.show', compact('detail_trips', 'admin'));
    }

    public function destroy($id)
    {
        $detail_trip = DetailTrip::findOrFail($id);
        $adminId = $detail_trip->id_admin;
        $detail_trip->delete();
    
        return redirect()->route('detail_trip.show', ['adminId' => $adminId])
            ->with('success', 'Le detail_trip a été supprimé avec succès.');
    }    

    public function debitage($adminId)
    {
        $admin = Admin::find($adminId);        
        $detail_trips = DetailTrip::where('id_admin', $adminId)->get();
        return view('detail_trip.debitage', compact('admin', 'detail_trips'));
    }
    
    public function allDebitage($adminId)
    {
        $admin = Admin::find($adminId);        
        $detail_trips = DetailTrip::where('id_admin', $adminId)->get();
        return view('detail_trip.All_Debitage', compact('admin', 'detail_trips'));
    }   
}