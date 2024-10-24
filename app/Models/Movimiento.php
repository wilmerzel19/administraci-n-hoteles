<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $table = 'movimientos';

    protected $fillable = [
        'id_alquiler',
        'id_usuario',
        'fecha',
        'estado',
        'observaciones',
        'tipo',
    ];
}
