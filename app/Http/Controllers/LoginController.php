<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Logar(){
        return view('login');
    }

    public function Deslogar(){
        return view('erro');
    }
}
