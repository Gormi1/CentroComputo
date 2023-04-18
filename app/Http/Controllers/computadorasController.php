<?php

namespace App\Http\Controllers;

use App\Models\computadoras;
use Illuminate\Http\Request;

class computadorasController extends Controller
{
    public function obtenerEstado() {
        $estado = computadoras::all();
        return response()->json($estado);
    }

}
