<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        var_dump($_POST); // dados enviados pelo formulário que está na view contato
        return view ('site.contato');
    }
}
