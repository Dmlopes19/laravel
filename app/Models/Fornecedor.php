<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Fornecedor extends Model
{
    use softDeletes;
    //metodo de correção de nome da tabela 
    protected $table = 'fornecedores';
    //criação do atributio privado fillable
    protected $fillable = ['nome', 'uf', 'email'];

}
