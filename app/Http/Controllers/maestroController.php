<?php

namespace App\Http\Controllers;
use App\Models\maestro;
use Illuminate\Http\Request;

class maestroController extends Controller
{
    public function create()
    {

        return view('maestro.maestro');
    }
    public function store(Request $request)
    {


        $registro = new maestro();
        $registro->Matricula = $request->input('Matricula');
        $registro->Usuario = $request->input('Usuario');
        $registro->save();

        return redirect('/eleccionaSala');


    }
}
