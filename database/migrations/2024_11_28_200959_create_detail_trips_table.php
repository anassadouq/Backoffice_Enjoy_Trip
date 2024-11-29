<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
            $table->longText('programme');
            $table->string('tarif');
            $table->longText('servis_inclus');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_trips');
    }
};