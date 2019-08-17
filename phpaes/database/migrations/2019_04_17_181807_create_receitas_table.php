<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_receita', function (Blueprint $table) {
            $table->increments('idReceita');
            /* Foreign Key */
            $table->integer('idUsuarioFk')->unsigned()->nullable();   
            /* */
            $table->string('titulo', 50);
            $table->string('preparo', 200);
            $table->string('ingredientes', 200);
            $table->string('imagem')->nullable();
            $table->char('aprovado', 3);
        });

        Schema::table('tb_receita', function($table){
            $table->foreign('idUsuarioFk')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_receita');
    }
}
