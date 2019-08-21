<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function registrarIndex()
    {
        return view('vistas.registrar');
    }

    public function listarIndex()
    {
        return view('vistas.listar');
    }

    public function estadisticaIndex()
    {
        return view('vistas.estadistica');
    }

}
