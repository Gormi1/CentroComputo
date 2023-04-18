<?php

namespace App\Http\Controllers;

use App\Models\maestro;
use App\Models\bitacora_maestro;
use DB;
use Illuminate\Http\Request;

class maestroController extends Controller
{
    // vista para el maestro
    public function create()
    {

        return view('maestro.maestro');
    }
    // vista para redireccionar al formulario bitacora
    public function create1()
    {


        return view('bitacoraMaestro.bitacoraMaestro');
    }
    // logue del maestro
    public function validarClave(Request $request)
    {
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


                $mensaje = $mensaje1;
                return redirect('/maestro')
                    ->with('warning', $mensaje);

            }


        } catch (\Illuminate\Validation\ValidationException $e) {
            // Mostrar una alerta al usuario indicando que se requieren los campos
            return back()->with('error', 'Favor de llenar los campos.');
        }


    }

    public function store(Request $request)
    {


        try {
            $validatedData = $request->validate([
                'Grupo' => 'required',
                'Materia' => 'required',
                'NumAlumno' => 'required',
                'HoraSalida' => 'required',
                'estado' => 'required',
            ]);

            // Si los datos son validados, continúa con el procesamiento de los datos
            $registro = new bitacora_maestro;
            $registro->Grupo = $validatedData['Grupo'];
            $registro->Materia = $validatedData['Materia'];
            $registro->NumAlumno = $validatedData['NumAlumno'];
            $registro->HoraSalida = $validatedData['HoraSalida'];
            $registro->estado = $validatedData['estado'];
            $registro->save();

            // redirige al maestro a la página anterior
            return redirect('/')->with('success', 'Aula registrada Por favor vaya a sus lugares');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Mostrar una alerta al usuario indicando que se requieren los campos
            return back()->with('error', 'Los campos  son requeridos.');
        }




    }


    public function estadoDiv()
{
    $estado = DB::table('bitacora_maestro')->value('ocupado');

    return $estado;
}




}
