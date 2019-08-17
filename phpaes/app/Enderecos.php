<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $fillable = ['endereco', 'cep', 'complemento', 'dataRegistro', 'idUsuarioFK'];
    protected $guarded = ['idEndereco'];
    protected $table = 'tb_endereco';
    protected $primaryKey = 'idEndereco';
}
