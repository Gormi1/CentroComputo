<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CComputoBController extends Controller
{
    public function create(){
        return view('centroC.computoB');
    }
    // public function obtenerEstadosElementos() {
    //     $elementos = computadoras::all();
    //     return view('vista', ['elementos' => $elementos]);
    // }
}
