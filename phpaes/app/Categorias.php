<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produtos;

class Categorias extends Model
{
    protected $fillable = ['descricao', 'dataRegistro'];
    protected $guarded = ['idCategoria'];
    protected $table = 'tb_categoria';
    protected $primaryKey = 'idCategoria';

    public $timestamps = false;

    public function produtos(){
        return $this->hasMany(Produtos::class, 'idProdutoFk', 'idProduto');
    }
}