<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pedido', function (Blueprint $table) {
            $table->increments('idPedido');
            /* Foreign Key */
            $table->integer('idCupomDescontoFk')->unsigned();
            $table->integer('idUsuarioFk')->unsigned();
            $table->integer('idPedidoStatusFk')->unsigned();
            $table->integer('idCarrinhoFk')->unsigned();
            /* */
            $table->float('valorTotal', 10, 2);
            $table->timestamp('dataRegistro')->useCurrent();
        });
        Schema::table('tb_pedido', function($table){
            $table->foreign('idCupomDescontoFk')->references('idCupomDesconto')->on('tb_cupom_desconto');
            $table->foreign('idUsuarioFk')->references('idUsuario')->on('tb_usuario');
            $table->foreign('idPedidoStatusFk')->references('idPedidoStatus')->on('tb_pedido_status');
            $table->foreign('idCarrinhoFk')->references('idCarrinho')->on('tb_carrinho');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pedido');
    }
}
