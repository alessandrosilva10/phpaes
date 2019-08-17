<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'cpf', 'idPessoaFK', 'endereco', 'complemento', 'cep', 'telefone', 'celular'];
    protected $guarded = ['id'];
    protected $table = 'users';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function receita(){
        return $this->hasMany('App\User', 'idReceitaFk', 'idReceita');
    }

    public function pessoa(){
        return $this->belongsTo(Pessoas::class, 'idPessoaFK', 'idPessoa');
    }
}
