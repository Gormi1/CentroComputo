<?php

namespace App\Http\Controllers\ControllerSistema;

use App\Http\Controllers\Controller;
use App\Models\ModelSistema\computadoras;
use Illuminate\Http\Request;

class computadorasController extends Controller
{
    public function obtenerEstado() {
        $estado = computadoras::all();
        return response()->json($estado);
    }

}
