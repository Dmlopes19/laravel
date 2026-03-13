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
        Schema::table('site_contatos', function (Blueprint $table) {
        $table->integer('motivo_do_contato');
    });
}

public function down()
{
    Schema::table('site_contatos', function (Blueprint $table) {
        $table->dropColumn('motivo_do_contato');
    });
    }
};
