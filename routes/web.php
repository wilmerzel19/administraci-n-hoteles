<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\HabitacionesComponent;
use App\Livewire\HotelesComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de navegacion de la aplicacion
Route::middleware('auth')->group(function(){
    Route::get('/hoteles', HotelesComponent::class)->name('hoteles');
});

Route::middleware('auth')->group(function(){
    Route::get('/habitaciones', HabitacionesComponent::class)->name('habitaciones');
});




require __DIR__.'/auth.php';
