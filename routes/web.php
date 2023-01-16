<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Hasil;
use App\Http\Livewire\InputAgama;
use App\Http\Livewire\InputMicro;
use App\Http\Livewire\InputPendaftar;
use App\Http\Livewire\InputWawancara;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('input-pendaftar', InputPendaftar::class)->name('input-pendaftar');
    Route::get('input-agama', InputAgama::class)->name('input-agama');
    Route::get('input-micro', InputMicro::class)->name('input-micro');
    Route::get('input-wawancara', InputWawancara::class)->name('input-wawancara');
    Route::get('hasil', Hasil::class)->name('hasil');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
