<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\HabitacionesComponent;
use App\Livewire\HotelesComponent;
use App\Livewire\ServiciosComponent;
use App\Livewire\AlquilersComponent;
use App\Livewire\MovimientosComponent;
use App\Livewire\PagosComponent;
use App\Livewire\ReservasComponent;
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

Route::middleware('auth')->group(function(){
    Route::get('/servicios', ServiciosComponent::class)->name('servicios');
});

Route::middleware('auth')->group(function(){
    Route::get('/alquileres', AlquilersComponent::class)->name('alquileres');
});
Route::middleware('auth')->group(function(){
    Route::get('/pagos', PagosComponent::class)->name('pagos');
});
Route::middleware('auth')->group(function(){
    Route::get('/reservas', ReservasComponent::class)->name('reservas');
});

Route::middleware('auth')->group(function(){
    Route::get('/movimientos', MovimientosComponent::class)->name('movimientos');
});














require __DIR__.'/auth.php';
