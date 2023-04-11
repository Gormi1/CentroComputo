<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salaComputoController extends Controller
{
    public function create(){
        return view('centroCMaestro.salaComputo');
    }
}
