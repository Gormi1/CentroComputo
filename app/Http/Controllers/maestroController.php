<?php

namespace App\Http\Controllers;

use App\Models\maestro;
use DB;
use Illuminate\Http\Request;

class maestroController extends Controller
{
    public function create()
    {

        return view('maestro.maestro');
    }

    public function validarClave(Request $request)
    {
        // $correo = $request->input('clave');

        // $usuario =maestro::where('clave', $correo)->first();

        // if ($usuario) {

        //     return redirect('/salaComputo')->with('success', 'Accedio Correctamente');

        // } else {
        //     return redirect('/maestro')
        //     ->with('error','Registro NO exitoso');

        // }
        try {
            $validatedData = $request->validate([
                'clave' => 'required',

            ]);
            $correo = $request->input('clave');

            // Si los datos son validados, continúa con el procesamiento de los datos

            $usuario = maestro::where('clave', $correo)->first();

            if ($usuario) {
                $succes = 'success';
                $mensaje = 'Accedio Correctamente';
                return redirect('/salaComputo')->with($succes, $mensaje);

            } else {

                $mensaje1 = 'Usuario no encontrado';


                $mensaje = $mensaje1 ;
                return redirect('/maestro')
                    ->with('warning', $mensaje);

            }


        } catch (\Illuminate\Validation\ValidationException $e) {
            // Mostrar una alerta al usuario indicando que se requieren los campos
            return back()->with('error', 'Favor de llenar los campos.');
        }


    }

}
