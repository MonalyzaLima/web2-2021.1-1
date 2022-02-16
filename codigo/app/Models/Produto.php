<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = "produtos" ;

    protected $fillable = ['nomeProduto', 'ano', 'cor', 'marca', 'quantidade', 'valorCompra', 'valorVenda'];

    function itensVenda(){
        return $this->hasMany(ItensVenda::class, 'produto_id', 'id');
    }

    function itensEntrada(){
        return $this->hasMany(ItensEntrada::class, 'produto_id', 'id');
    }
    
    
}
