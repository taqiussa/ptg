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
        Schema::create('agamas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('pendaftar_id');
            $table->integer('tajwid')->nullable();
            $table->integer('kelancaran')->nullable();
            $table->integer('iftitah')->nullable();
            $table->integer('qunut')->nullable();
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
        Schema::dropIfExists('agamas');
    }
};
