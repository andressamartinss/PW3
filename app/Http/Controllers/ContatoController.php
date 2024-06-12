<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contat() 
    {
        var_dump($_POST);
        return view('contat', ['titulo' => 'Contat(teste)']);
    }
}
