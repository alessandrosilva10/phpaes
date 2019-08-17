<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    
    protected $fillable = ['endereco', 'cidade', 'estado', 'cep', 'telefone', 'celular', 'dataRegistro', 'idUsuarioFk'];
    protected $guarded = ['idPessoa'];
    protected $table = 'tb_pessoa';
    protected $primarykey = 'idPessoa';

    public function user(){
        return $this->belongsTo('App\User', 'idUsuarioFk', 'id');
    }
}
