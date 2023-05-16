<?php

namespace App\Http\Controllers\ControllerSistema;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CComputoController extends Controller
{
    public function create(){

        return view('centroC.computo');
    }

    
}
