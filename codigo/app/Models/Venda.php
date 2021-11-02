<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

     //nome da tabela
     protected $table = "vendas" ;

     //Campos setados no banco
     protected $fillable = ['cliente_id', 'notaFiscal', 'valorTotal'];

  
     function itensVenda(){
        return $this->hasMany(itensVenda::class, 'venda_id', 'id');
    }

    function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }
}
