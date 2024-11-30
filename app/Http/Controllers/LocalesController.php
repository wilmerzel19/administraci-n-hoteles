<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalesController extends Controller
{
    //funcion para guardar un local
    public function guardar(Request $request){
        // Validar los datos
        $request->validate([
            'nombre' => 'required',
            'imagen' => 'required',
            'direccion' => 'required',
            'descripcion' => 'required',
            'telefono' => 'required',
            'website' => 'required',
            'calificacion' => 'required',
            'tipo' => 'required',
        ]);
        // Guardar el local
        Local::create($request->all());
        // Redireccionar a la lista de locales

        return redirect(route('hoteles'));
    }
}
