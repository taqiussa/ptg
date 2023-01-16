<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('micros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftar_id');
            $table->foreignId('user_id');
            $table->integer('rpp')->nullable();
            $table->integer('materi')->nullable();
            $table->integer('metode')->nullable();
            $table->integer('kelas')->nullable();
            $table->integer('rpp_detail')->nullable();
            $table->integer('sistematika')->nullable();
            $table->integer('tujuan')->nullable();
            $table->integer('karakter')->nullable();
            $table->integer('inovatif')->nullable();
            $table->integer('kegiatan_inti')->nullable();
            $table->integer('nilai')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('micros');
    }
};
