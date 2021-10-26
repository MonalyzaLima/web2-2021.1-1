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
     protected $fillable = ['id_cliente', 'notaFiscal', 'valorTotal'];

  
     function itensVenda(){
        return $this->hasMany(itensVenda::class, 'id_venda', 'id');
    }

    function cliente(){
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }
}
