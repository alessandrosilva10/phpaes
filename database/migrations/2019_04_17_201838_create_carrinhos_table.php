<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_carrinho', function (Blueprint $table) {
            $table->increments('idCarrinho');
            /* Foreign Key */
            $table->integer('idEnderecoFk')->unsigned();
            /* */
            $table->decimal('valor', 10,2);
            $table->timestamp('dataRegistro')->useCurrent();
        });
        Schema::table('tb_carrinho', function($table){
            $table->foreign('idEnderecoFk')->references('idEndereco')->on('tb_endereco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_carrinho');
    }
}
