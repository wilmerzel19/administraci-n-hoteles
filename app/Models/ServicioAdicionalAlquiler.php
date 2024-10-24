<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioAdicionalAlquiler extends Model
{
    use HasFactory;

    protected $table = 'servicio_adicional_alquilers';

    protected $fillable = [
        'servicio_adicional_alquiler_id',
        'alquiler',
        'monto',
        'descripcion',

    ];

}
