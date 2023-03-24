<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {

        return view('auth.register');
    }

    //    valida los campos y hace la inserccion a la base de datos con elmodelo
    public function registra()
    {

        $user = User::create(request([ 'usuario','matricula']));
        $user=User::create()
        auth()->login($user);
        return redirect()->to('/');
    }
}
