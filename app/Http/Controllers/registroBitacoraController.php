<?php

namespace App\Http\Controllers;
use App\Models\bitacora;
use Illuminate\Http\Request;
use App\Http\Controllers\Exception;

class registroBitacoraController extends Controller
{

    public function create(){

        return view('alumno.alumno');
       }


    public function store(Request $request){
        // try {
        $registro = new bitacora();
        $registro->Matricula = $request->input('Matricula');
        $registro->Usuario = $request->input('Usuario');
        $registro->save();
        return redirect('/alumno/create');
        // } catch ( Exception $th) {


        // }
    }
}
