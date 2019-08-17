<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_produto_carrinho', function (Blueprint $table) {
            $table->increments('idProdCar');
            /* Foreign Key */
            $table->integer('idCarrinhoFK')->unsigned()->nullable();
            $table->integer('idProdutoFK')->unsigned()->nullable();
            $table->integer('idUsuarioFK')->unsigned()->nullable();
            /* */
            $table->datetime('dataRemovido')->nullable();
            $table->integer('quantidade')->default(1)->nullable();
            $table->timestamp('dataRegistrado')->useCurrent()->nullable();
        });
        Schema::table('tb_produto_carrinho', function($table) {
            $table->foreign('idCarrinhoFk')->references('idCarrinho')->on('tb_carrinho');
            $table->foreign('idProdutoFK')->references('idProduto')->on('tb_produto');
            $table->foreign('idUsuarioFK')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_produto_carrinho');
    }
}
