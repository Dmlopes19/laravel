<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){ 

        $fornecedores = [
        0 => [
            'nome'=> 'Fornecedor 1', 
            'status'=> 'N',
            'CNPJ' => '123.456/0001-78',
            'ddd' => '11',
            'telefone'=> '00000-0000'
        ],
        1=> [
           'nome'=> 'Fornecedor 2', 
            'status'=> 'S',
            'CNPJ' => null,
            'ddd' => '85',
            'telefone'=> '00000-0000'
        ],
        2=> [
           'nome'=> 'Fornecedor 3', 
            'status'=> 'S',
            'CNPJ' => '00',
            'ddd' => '31',
            'telefone'=> '00000-0000'    
        ]
    ];
            
        return view('app.fornecedores.index', compact('fornecedores')); // variavel encaminhada para view
    }
}
