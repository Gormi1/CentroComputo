<?php
namespace App\Http\Controllers;
use App\Models\maestro;
use App\Models\bitacoraMaestro;
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
    // login del maestro
    public function validarClave(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'clave' => 'required',
            ]);

            $correo = $request->input('clave');

            // verifica la existencia de los datos en la base de datos
            $usuario = maestro::where('clave', $correo)->first();

            //si no es nullo da true
            if ($usuario != null) {
                //si existe deja acceder a los datos y redirecciona al préstamo de aula
                //además de mostrar una  alerta de acceso correcto
                if ($usuario->exists) {
                    $success = 'success';
                    $mensaje = 'Accedió Correctamente';
                    return redirect('/salaComputo')->with($success, $mensaje);
                }else {
                    //muestra una alerta de error al mostrar datos incorrectos
                    $mensaje= 'datos incorrectos';
                    return redirect('/maestro')
                        ->with('warning', $mensaje);
                }
            } else {    
                //muestra un alerta de error que dice que los datos no existen
                $mensaje= 'Usuario no encontrado';
                return redirect('/maestro')
                    ->with('warning', $mensaje);
            }
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Mostrar una alerta al usuario indicando que se requieren llenar los campos
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

            // Si los datos son correctos, continúa con el procesamiento de los datos
            $registro = new bitacoraMaestro;
            $registro->Grupo = $validatedData['Grupo'];
            $registro->Materia = $validatedData['Materia'];
            $registro->NumAlumno = $validatedData['NumAlumno'];
            $registro->HoraSalida = $validatedData['HoraSalida'];

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
