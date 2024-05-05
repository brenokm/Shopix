<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastro extends Controller
{
    public function Cadastrar(){
        return view('cadastro');
}
}