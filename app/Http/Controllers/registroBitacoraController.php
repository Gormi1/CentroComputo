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


    try {
        $validatedData = $request->validate([
            'Matricula' => 'required',
            'Usuario' => 'required',
        ]);

        // Si los datos son validados, continúa con el procesamiento de los datos
        $registro = new bitacora;
        $registro->Matricula = $validatedData['Matricula'];
        $registro->Usuario = $validatedData['Usuario'];
        $registro->save();

        // redirige al usuario a la página anterior
        return redirect('/')->with('success', 'Registro exitoso');
    } catch (\Illuminate\Validation\ValidationException $e) {
        // Mostrar una alerta al usuario indicando que se requieren los campos
        return back()->with('error', 'Los campos Matricula y Usuario son requeridos.');
    }




    }
}
