<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {  
        //adicionando a coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        //Permite execultar uma query no banco de dados 
        //atribuindo motivo_contato para a nova coluna motivo_contatos_id
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        //criação da fk e remover a coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table){
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //criação da coluna motivo_contato e removendo a fk
        Schema::table('motivo_contatos', function (Blueprint $table){
            
            $table->integer('motivo_contatos');
            $table->dropForeign('<site_contatos>_<motivo_contatos_id_foreign');
        });

        //atribuindo motivo_contato_id para a nova coluna motivo_contato
        DB::statement('update site_contatos set motivo_contato = motivo_contatos_id');

         //removendo a coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            
            $table->dropColumn('motivo_contatos_id');
        });
    }   
};
