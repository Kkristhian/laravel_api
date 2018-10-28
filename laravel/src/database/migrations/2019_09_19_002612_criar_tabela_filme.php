<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFilme extends Migration
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
            $tabela->string('nome', 100);
            $tabela->integer('ano', 100);
            $tabela->integer('gen_codigo');
            $tabela->integer('dir_codigo');
            $tabela->integer('fx_etaria');
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
