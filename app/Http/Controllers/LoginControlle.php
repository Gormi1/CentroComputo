<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Model;

class LoginControlle extends Controller
{
    public function create(){

        return view('alumno.alumno');
       }
       public function login(Request $request)
    {


    }
}
