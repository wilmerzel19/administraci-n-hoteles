<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;

    protected $table = 'alquilers';

    protected $fillable = [
        'usuario',
        'habitacion_id',
        'fecha_inicio',
        'fecha_fin',
        'precio',
        'estado',
    ];
}
