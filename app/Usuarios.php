<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['login', 'senha', 'dataRegistro', /*'admin',*/ 'cpf', 'email'];
    protected $guarded = ['idUsuario'];
    protected $table = 'tb_usuario';
}
