<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Vehiculo;
use App\Persona;

class PersonaController extends Controller
{
    public function registrarIndex()
    {
        $marcas = Marca::all();

        return view('vistas.registrar', ["marcas" => $marcas]);
    }

    public function listarIndex()
    {
        $autos = Vehiculo::all();

        return view('vistas.listar', ["autos" => $autos]);
    }

    public function estadisticaIndex()
    {
        return view('vistas.estadistica');
    }

    public function registrar()
    {
    //dd(request());
        $datos = request()->validate([
            "marca" => "exists:marcas,id"
        ], ["marca.exists" => "Se debe de ingresar una marca válida"]);
        $vehiculo = Vehiculo::create(["placa" => $datos["placa"], "marca_id" => $datos["marca"]]);
        if ($vehiculo->wasRecentlyCreated) {
            Persona::create(["nombre" => $datos["nombre"], "cedula" => $datos["cedula"], "vehiculo_id" => $vehiculo->id]);
            return redirect()->back()->with('alert', 'Se ha registrado exitosamente');
        }

    }
}
