<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\InstrumentoController;
use App\Http\Controllers\CompraController;

use App\Http\Controllers\BodegaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('/usuario', UsuarioController::class)->middleware(['auth', 'verified']);
Route::resource('/clasificacion', ClasificacionController::class)->middleware(['auth', 'verified']);
Route::resource('/instrumento', InstrumentoController::class)->middleware(['auth', 'verified']);
Route::resource('/compra', CompraController::class)->middleware(['auth', 'verified']);
Route::resource('/bodega', BodegaController::class)->middleware(['auth', 'verified']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
