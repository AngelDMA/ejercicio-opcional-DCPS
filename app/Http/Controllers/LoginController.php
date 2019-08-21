<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request) {
        if ($request->codigo == "A765") {
            return view('opciones');
        }
        else {
            return redirect()->back()->with('alert', 'Zona prohibida');
        }
    }
}
