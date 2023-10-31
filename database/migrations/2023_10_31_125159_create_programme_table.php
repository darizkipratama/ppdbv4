<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programme', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kode');
            $table->integer('kuota_ikhwan');
            $table->integer('kuota_akhwat');
            $table->integer('pendaftar_ikhwan');
            $table->integer('pendaftar_akhwat');
            $table->date('open_registration');
            $table->date('closing_registration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programme');
    }
};
