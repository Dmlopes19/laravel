<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    public function run(): void
    {
        /*SiteContato::create([
            'nome' => 'Fornecedores32',
            'telefone' => '(31)98877-2233',
            'email' => 'fornecedores32@contato.com',
            'motivo_contato' => 1,
            'mensagem' => 'Compras online',
        ]);*/

        \App\Models\SiteContato::factory()->count(100)->create();
    }
}