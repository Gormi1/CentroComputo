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
            $correo = $request->input('clave');

            $usuario =maestro::where('clave', $correo)->first();

            if ($usuario) {

                return redirect('/salaComputo')->with('success', 'Accedio Correctamente');

            } else {
                return redirect('/maestro')
                ->with('error','Registro exitoso');

            }
        }

}
