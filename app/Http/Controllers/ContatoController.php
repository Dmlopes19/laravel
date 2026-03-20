<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){

        $motivo_contatos = MotivoContato::all();
         
        //var_dump($_POST); // dados enviados pelo formulário que está na view contato
       // dd($request); //exibe o conteudo da variavel 
        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');*/

        // $contato = new SiteContato();
        //$contato->fill($request->all());//preenche os objetos do contato conforme o array associativo

        //print_r($contato->getAttributes());

        //$contato->save();
        return view ('site.contato', ['titulo '=> 'contato', 'motivo_contatos' => $motivo_contatos]);
    }

        public function salvar(Request $request){
           //realiza a validação dos dados do formulário recebidos no request
           $request->validate([
            'nome'=> 'required',
            'telefone'=> 'required',
            'email'=>'required',
            'motivo_contato'=> 'required',
            'mensagem'=> 'required',
        ]);
    }
    
}
