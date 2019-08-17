<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Receitas extends Model
{
    //
    protected $fillable = ['titulo', 'preparo', 'ingredientes', 'imagem', 'aprovado', 'idUsuarioFk'];
    protected $guarded = ['idReceita'];
    protected $table = 'tb_receita';
    protected $primaryKey = 'idReceita';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User', 'idUsuarioFk', 'id');
    }
}

