<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_comentario', function (Blueprint $table) {
            $table->increments('idComentario');
            /* Foreign Key */
            $table->integer('idUsuarioFk')->unsigned();
            /* */
            $table->string('texto', 300);
            $table->timestamp('dataRegistro')->useCurrent();
        });
        Schema::table('tb_comentario', function($table){
            $table->foreign('idUsuarioFk')->references('idUsuario')->on('tb_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_comentario');
    }
}
