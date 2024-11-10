<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'admins' => Admin::all()
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(StoreAdminRequest $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->where = $request->where;
        $admin->rating = $request->rating;
        $admin->places = $request->places;
        $admin->nombrepersonne = $request->nombrepersonne;
        $admin->price = $request->price;
        $admin->dateD = $request->dateD;
        $admin->dateF = $request->dateF;
        $admin->description = $request->description;
        
        if ($request->hasFile('image')) {
            $admin->image = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $admin->image);
        }
        
        $admin->save();
        return redirect()->route('admin.index');
    }
    
    public function show(Admin $admin)
    {
        return view('admin.show', compact('admin'));
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($admin->image && file_exists(public_path('images/' . $admin->image))) {
                unlink(public_path('images/' . $admin->image));
            }
    
            // Store the new image and update the admin record
            $admin->image = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $admin->image);
        }
    
        // Update the admin details
        $admin->update($request->except('image'));
    
        return to_route('admin.index');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Le admin a été supprimé avec succès.');
    }
}