<?php
namespace App\Http\Controllers\ControllerSistema;

use App\Http\Controllers\Controller;
use App\Models\ModelSistema\maestro;
use App\Models\ModelSistema\bitacoraMaestro;
use App\Models\ModelSistema\SalaComputo;
use App\Models\SalaComputo as ModelsSalaComputo;
use DB;
use Illuminate\Http\Request;
use DateTime;
use Carbon\Carbon;

class maestroController extends Controller
{
    // vista para el maestro
    public function create()
    {
        return view('maestro.maestro');
    }
    // vista para redireccionar al formulario bitacora
    public function create1($Aula)
    {
        return view('bitacoraAula.bitacoraAula', ['Aula' => $Aula]);
    }
    // login del maestro
    public function validarClave(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'clave' => 'required',
                'nombre' => 'required',
            ]);

            $correo = $request->input('clave');
            $nombre = $request->input('nombre');

            // verifica la existencia de los datos en la base de datos
            $usuario = maestro::where('clave', $correo)->first();
            $nombre = maestro::where('nombre', $nombre)->first();

            //si no es nullo da true
            if ($usuario != null) {
                //si existe deja acceder a los datos y redirecciona al préstamo de aula
                //además de mostrar una  alerta de acceso correcto
                if ($usuario->exists) {
                    $success = 'success';
                    $mensaje = 'Accedió Correctamente';

                    return redirect('/seleccionAula')->with($success, $mensaje);
                } else {
                    //muestra una alerta de error al mostrar datos incorrectos
                    $mensaje = 'datos incorrectos';
                    return redirect('/maestro')
                        ->with('warning', $mensaje);
                }
            } else {
                //muestra un alerta de error que dice que los datos no existen
                $mensaje = 'Usuario no encontrado';
                return redirect('/maestro')
                    ->with('warning', $mensaje);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Mostrar una alerta al usuario indicando que se requieren llenar los campos
            return back()->with('error', 'Favor de llenar los campos.');
        }
    }
    // ******************FIN LOGIN MAESTRO****************
    public function store(Request $request)
    {

        try {



            $meses = array(
                'enero',
                'febrero',
                'marzo',
                'abril',
                'mayo',
                'junio',
                'julio',
                'agosto',
                'septiembre',
                'octubre',
                'noviembre',
                'diciembre'
            );

            $validatedData = $request->validate([
                'Grupo' => 'required',
                'Materia' => 'required',
                'Carrera' => 'required',
                'NumAlumno' => 'required',
                'HoraEntrada' => 'required',
                'Aula' => 'required',
            ]);
            $aula = $validatedData['Aula'];
            // $Sala = ModelsSalaComputo::where('Aula', $aula)->where('estado', 'ocupado')->first();
            // dd($Sala);
            $fecha = $date_input = $_POST['HoraEntrada'];



            $date_input = $_POST['HoraEntrada'];
            $date_time = new DateTime($date_input);
            $dia = $date_time->format('d');
            $mes = $date_time->format('n') - 1; // Resta 1 porque el arreglo comienza en 0
            $nombre_mes = $meses[$mes];
            $hora = $date_time->format('H:i:s');
            $registro = new bitacoraMaestro;
            $registro->Grupo = $validatedData['Grupo'];
            $registro->Materia = $validatedData['Materia'];
            $registro->NumAlumno = $validatedData['NumAlumno'];
            $registro->Carrera = $validatedData['Carrera'];
            $registro->Day = $dia;
            $registro->Month = $nombre_mes;
            $registro->HoraEntrada = $hora;


            // if (condition) {
            //     # code...
            // }

            $registro->Aula = $aula;
            $consulta = bitacoraMaestro::where('Day', $registro->Day)
                ->where('HoraEntrada', $registro->HoraEntrada)->where('Aula', $registro->Aula)
                ->first();


            // dd($consulta); con esto puedes ver los errores
            if ($consulta) {
                // La fecha de entrada ya existe en la bitácora
                return back()->with('error', 'Ya existe la reservacion en ese dia y esa hora  ');
            }



            $registro->save();
            $salaComputo = ModelsSalaComputo::where('Aula', $aula)->first();
            if ($salaComputo) {
                $salaComputo->estado = 'Ocupado';
                $salaComputo->save();
            }

            // redirige al maestro a la página anterior
            return redirect('/')->with('success', 'Aula registrada Por favor vaya a sus lugares');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Mostrar una alerta al usuario indicando que se requieren los campos
            return back()->with('error', 'Los campos  son requeridos.');
        }
    }

    // public function estadoDiv()
    // {
    //     $estado = DB::table('bitacora_maestro')->value('ocupado');

    //     return $estado;
    // }

    public function salaOcupada($aula)
    {
        $occupied = bitacoraMaestro::where('Aula', $aula)->exists();
        return $occupied;
    }
}