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
        Schema::create('unidade', function (Blueprint $table){
            $table->id();
            $table->string('unidade',5); //cm, m, kg
            $table->string('descricao', 30);
            $table->timestamps();

        });     
        //adicionar o relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidade');
        });

        //adicionar o relacionamento com a tabela produto_detalhes
        Schema::table('produtos', function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //remover o relacionamento coma tabela produto_detalhes
        Schema::table('produto_detahes', function(Blueprint $table){
            //remover a fk
            $table->dropforeign('produtos_detalhes_unidade_id_foreign');
            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });
        //remover o relacionamento com a tabela produtos
         Schema::table('produtos', function(Blueprint $table){
            //remover a fk
            $table->dropforeign('produtos_unidade_id_foreign');
            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidade');
    }
};
