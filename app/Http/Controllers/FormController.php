<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function Contacto(Request  $request)
    {
        DB::table('mensajes')->insert([
            'cliente' => $request->nombre,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'mensaje' => $request->mensaje,
            'fecha' => date("Y-m-d H:i:s"),
            'cp' => $request->cp
        ]); 
    }

}
