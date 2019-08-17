<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_produto', function (Blueprint $table) {
            $table->increments('idProduto');
            /* Foreign Key */
            $table->integer('idCategoriaFk')->unsigned();
            /* */
            $table->string('nome', 50);
            $table->string('descricao', 100);
            $table->string('imagem')->nullable();
            $table->float('preco', 10, 2);
            $table->timestamp('dataRegistro')->useCurrent();
        });
        Schema::table('tb_produto', function($table){
            $table->foreign('idCategoriaFk')->references('idCategoria')->on('tb_categoria')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_produto');
    }
}
