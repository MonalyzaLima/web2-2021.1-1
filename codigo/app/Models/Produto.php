<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    //nome da tabela
    protected $table = "produtos" ;

    //Campos setados no banco
    protected $fillable = ['nomeProduto', 'valorCompra', 'valorVenda', 'quantidade'];

    function itensVenda(){
        return $this->hasMany(ItensVenda::class, 'id_produto', 'id');
    }

    function itensEntrada(){
        return $this->hasMany(ItensEntrada::class, 'id_produto', 'id');
    }
}

