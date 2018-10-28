<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme', function(Blueprint $tabela) {
            $tabela->increments('id');
            $tabela->string('nome_filme', 100);
            $tabela->integer('ano_filme', 100);
            $tabela->string('nome_diretor', 100);
            $tabela->string('nome_estudio', 50);
            $tabela->integer('faixa_etaria', 10);
            $tabela->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
