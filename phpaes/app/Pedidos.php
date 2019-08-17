<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['valorTotal', 'dataRegistro'];
    protected $guarded = ['idPedido'];
    protected $table = 'tb_pedido';
}
