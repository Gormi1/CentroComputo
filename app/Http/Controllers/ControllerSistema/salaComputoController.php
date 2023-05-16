<?php

namespace App\Http\Controllers\ControllerSistema;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class salaComputoController extends Controller
{
    public function create(){
        return view('seleccionAula.seleccionAula');
    }
}
