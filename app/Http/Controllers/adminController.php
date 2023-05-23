<?php

namespace App\Http\Controllers;
use App\Models\ModelSistema\bitacora;
use App\Models\ModelSistema\bitacoraMaestro;
use Dompdf\Dompdf;
use PDF;
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
    public function generarPDF()
    {
        $datos = bitacora::all();
        return view('admin.generarpdf', compact('datos'));
       
}

public function descargarPDF()
{
    $datos = bitacora::all();

    // Crea una nueva instancia de Dompdf
    $pdf = new Dompdf();

    // Renderiza la vista con los datos en el PDF
    $html = view('admin.pdf', compact('datos'))->render();

    // Carga el contenido HTML al objeto Dompdf
    $pdf->loadHtml($html);

    // Opcional: Puedes ajustar las opciones de configuración de Dompdf aquí
    // $pdf->setOption('key', 'value');

    // Renderiza el PDF
    $pdf->render();

    // Guarda el PDF en una ubicación específica (opcional)
    // $pdf->save('/ruta/para/guardar/el/pdf.pdf');

    // Devuelve el PDF al navegador para su descarga
    return $pdf->stream('nombre-del-archivo.pdf');
}


}