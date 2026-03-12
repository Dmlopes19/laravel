<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('fornecedores', function (Blueprint $table) {
           $table->string('uf', 2);
           $table->string('email', 150);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("fornecedores", function (Blueprint $table) {
        // para remover colnas 
        //$table_>dropColumns('uf);   
        $table->dropColumn(['uf', 'email']);// metodo ultilizando array

        });
    }
};
