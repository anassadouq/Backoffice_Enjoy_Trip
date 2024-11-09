<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_trip',
        'nom',
        'prenom',
        'cin',
        'tel',
        'dateDep',
        'villeDep',
        'email',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'id_trip');
    }
}