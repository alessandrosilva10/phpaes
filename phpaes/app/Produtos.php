<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorias;

class Produtos extends Model
{
    protected $fillable = ['nome', 'descricao', 'imagem', 'preco', 'dataRegistro', 'idCategoriaFk'];
    protected $guarded = ['idProduto'];
    protected $table = 'tb_produto';
    protected $primaryKey = 'idProduto'; 
    
    public $timestamps = false;

    public function ca(){
        return $this->belongsTo(Categorias::class, 'idCategoriaFk', 'idCategoria');
    }
}
