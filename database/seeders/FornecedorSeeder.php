<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'fornecedor xuz';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'contato@fornecedorxyz.com';
        $fornecedor->save();

        //o método create (atenção para o atributo fillable da classe)
        Fornecedor::create([
            'nome'=> 'Fornecedor 200',
            'uf'=> 'CE',
            'email'=> 'contato@fornecedor200.com',
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome'=> 'Fornecedor 300',
            'uf' => 'PA',
            'email' => 'contato@fornecedor300.com',
        ]);
    }
}
