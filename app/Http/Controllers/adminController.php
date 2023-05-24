<?php

namespace App\Http\Controllers;

use App\Models\ModelSistema\bitacora;
use App\Models\ModelSistema\bitacoraMaestro;
use Dompdf\Dompdf;
use Carbon\Carbon;
use PDF;
use Dompdf\Options;
use Illuminate\Support\Facades\View;



use Illuminate\Http\Request;

class adminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }


    public function index()
    {
        $datos = bitacoraMaestro::all();

        return view('admin.Reservacion', compact('datos'));
    }
    // vista de buscar fecha 
    public function vistaFecha()
    {
        return view('admin.buscafecha');
    }


    public function buscarPorFecha(Request $request)
    {
        $fechaIngresada = $request->input('fecha');

        $datos = Bitacora::whereDate('created_at', Carbon::parse($fechaIngresada)->toDateString())->get();

        // Puedes realizar cualquier otra lógica o procesamiento necesario con los datos obtenidos
        // dd($datos);

        return view('admin.generapdf', ['datos' => $datos]);
    }

    public function generarPDF()
    {
        $datos = Bitacora::all(); // Obtén los datos de la base de datos según tu lógica

        // Cargar la vista HTML en una variable
        $html = view('admin.pdf', compact('datos'))->render();

        // Opciones de configuración de Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true);

        // Crear una instancia de Dompdf con las opciones
        $dompdf = new Dompdf($options);

        // Cargar el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Renderizar el PDF
        $dompdf->render();

        // Descargar el PDF
        return $dompdf->stream('archivo.pdf');
    }

}