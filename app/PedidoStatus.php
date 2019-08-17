<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoStatus extends Model
{
    protected $fillable = ['descricao'];
    protected $guarded = ['idPedidoStatus'];
    protected $table = 'tb_pedido_status';
}
