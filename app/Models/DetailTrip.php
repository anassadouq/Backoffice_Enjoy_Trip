<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailTrip extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_trip',
        'programme',
        'tarif',
        'servis_inclus'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_trip');
    }
}