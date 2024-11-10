<?php

namespace App\Models;

use App\Models\Admin;
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

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_trip');
    }
}