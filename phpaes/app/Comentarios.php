<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable = ['texto', 'dataRegistro'];
    protected $guarded = ['idComentario'];
    protected $table = 'tb_comentario';
}
