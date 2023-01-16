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
        Schema::create('wawancaras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('pendaftar_id');
            $table->integer('motivasi')->nullable();
            $table->integer('kiat')->nullable();
            $table->integer('mengatasi')->nullable();
            $table->integer('memperlakukan')->nullable();
            $table->integer('bekerja')->nullable();
            $table->integer('gaji')->nullable();
            $table->integer('bakat')->nullable();
            $table->integer('taat')->nullable();
            $table->integer('fisik')->nullable();
            $table->integer('kecakapan')->nullable();
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
        Schema::dropIfExists('wawancaras');
    }
};
