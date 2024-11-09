<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_trip');
            $table->foreign('id_trip')->references('id')->on('trips')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('tel');
            $table->date('dateDep');
            $table->string('villeDep');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};