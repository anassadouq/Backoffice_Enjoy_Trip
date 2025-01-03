<?php

namespace App\Models;

use App\Models\DetailTrip;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'where',
        'name',
        'rating',
        'places',
        'nombrepersonne',
        'price',
        'dateD',
        'dateF',
        'description'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class,'id_trip');
    }

    public function detailTrip()
    {
        return $this->hasMany(DetailTrip::class,'id_trip');
    }
}