<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ReservationController;

Route::resource('/', HomeController::class);
Route::resource('/about', AboutController::class);

Route::get('/destination', function () {
    return view('destination.destination');
})->name('destination');

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

Route::get('/service-detail', function () {
    return view('service-detail.service-detail');
})->name('service-detail');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

// Trips
Route::resource('trip', TripController::class)->middleware('auth');
// Reservation resource routes without index and destroy
Route::resource('reservation', ReservationController::class)->except(['index', 'destroy']);

// Authenticated routes for index and destroy
Route::get('reservation', [ReservationController::class, 'index'])->name('reservation.index')->middleware('auth');
Route::delete('reservation/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.destroy')->middleware('auth');

Auth::routes();