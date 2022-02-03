<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    
    protected $table = "funcionarios" ;

    protected $fillable = ['nome', 'cpf', 'endereco', 'telefone', 'dataNascimento', 'usuario', 'senha'];


    function venda(){
        return $this->hasMany(Venda::class, 'funcionario_id', 'id');
    }

}
