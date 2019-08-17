<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoCarrinhos extends Model
{
    protected $fillable = ['dataRemovido', 'dataRegistrado', 'idCarrinhoFK', 'idUsuarioFK', 'idProdutoFK'];
    protected $guarded = ['idProdCar'];
    protected $table = 'tb_produto_carrinho'; 

    public function user(){
        return $this->belongsTo('App\User', 'idUsuarioFK', 'id');
    }
}
