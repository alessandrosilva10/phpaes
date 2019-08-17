<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $fillable = ['descricao'];
    protected $guarded = ['idEstado'];
    protected $table = 'tb_estado';
}
