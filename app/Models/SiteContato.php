<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteContato extends Model
{
     use HasFactory;

     protected $table = 'site_contatos';

    //criação do atributio privado fillable
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato','mensagem'];
}
