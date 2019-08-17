<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cidade', function (Blueprint $table) {
            $table->increments('idCidade');
            //$table->integer('idEstadoFk')->unsigned();
            $table->string('descricao', 20);
        });

        Schema::table('tb_cidade', function($table) {
            //$table->foreign('idEstadoFk')->references('idEstado')->on('tb_estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cidade');
    }
}
