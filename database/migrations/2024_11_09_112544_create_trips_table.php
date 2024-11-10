<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('where');
            $table->string('rating');
            $table->string('places');
            $table->string('nombrepersonne');
            $table->string('price');
            $table->date('dateD');
            $table->date('dateF');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};