<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\VoyagesController;
use App\Http\Controllers\DetailTripController;
use App\Http\Controllers\ReservationController;

Route::resource('/', HomeController::class)->only(['index']);
Route::get('/home', [HomeController::class, 'showTrips'])->name('home');
Route::resource('/about', AboutController::class);
Route::get('/national', [VoyagesController::class, 'national'])->name('national');
Route::get('/international', [VoyagesController::class, 'international'])->name('international');

Route::resource('detail_trip',DetailTripController::class);
Route::get('detail_trip/show/{adminId}', [DetailTripController::class, 'show'])->name('detail_trip.show');

Route::get('/review', function () {
    return view('review.review');
})->name('review');

Route::get('/faq', function () {
    return view('faq.faq');
})->name('faq');

Route::get('/team', function () {
    return view('team.team');
})->name('team');

Route::get('/service', function () {
    return view('service.service');
})->name('service');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

// Trips
Route::resource('admin', AdminController::class)->middleware('auth');
// Reservation resource routes without index and destroy
Route::resource('reservation', ReservationController::class)->except(['index', 'destroy']);

// Authenticated routes for index and destroy
Route::get('reservation', [ReservationController::class, 'index'])->name('reservation.index')->middleware('auth');
Route::delete('reservation/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.destroy')->middleware('auth');


Auth::routes();