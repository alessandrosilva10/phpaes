<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CupomDescontos extends Model
{
    protected $fillable = ['valor'];
    protected $guarded = ['idCupomDesconto'];
    protected $table = 'tb_cupom_desconto';
    protected $primaryKey = 'idCupomDesconto';
    
    public $timestamps = false;

}
