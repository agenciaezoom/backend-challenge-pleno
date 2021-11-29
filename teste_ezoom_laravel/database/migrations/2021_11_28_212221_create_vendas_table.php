<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {

            //Relação
            $table->integer('id')->unsigned();

            $table->string('produto');
            // $table->integer('quantidade');
            $table->bigIncrements('vendas');
            $table->float('valor');
            $table->timestamps();

            //Criando a relação - chave primária com a chave estrangeira
            $table->foreign('id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
