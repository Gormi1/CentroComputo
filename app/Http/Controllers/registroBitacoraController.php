<?php
namespace App\Http\Controllers;

use App\Models\bitacora;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


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
        // Lógica para guardar el registro

        return redirect('/')->with('success','Registro exitoso');

        // ->with('success', 'EL equipo [Número] ha sido registrada Por favor vaya a su equipo') esto va despues del redirect

        ;


    }
}
