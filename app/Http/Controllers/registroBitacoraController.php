<?php
namespace App\Http\Controllers;
use App\Models\bitacora;
use Illuminate\Http\Request;

class registroBitacoraController extends Controller
{

    public function create()
    {

        return view('alumno.alumno');
    }


    public function store(Request $request)
    {


            $registro = new bitacora();
            $registro->Matricula = $request->input('Matricula');
            $registro->Usuario = $request->input('Usuario');
            $registro->save();

            return redirect()->back();


    }
}
