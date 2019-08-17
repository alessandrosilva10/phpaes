<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinhos extends Model
{ 
    protected $fillable = ['valor', 'dataRegistro'];
    protected $guarded = ['idCarrinho'];
    protected $table = 'tb_carrinho';
}
