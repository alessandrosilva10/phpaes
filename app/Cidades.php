<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    protected $fillable = ['descricao'];
    protected $guarded = ['idCidade'];
    protected $table = 'tb_cidade';
}
