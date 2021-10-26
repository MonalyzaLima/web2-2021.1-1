<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensVenda extends Model
{
    use HasFactory;

    //nome da tabela
    protected $table = "itensVenda" ;        
    
    //Campos setados no banco
    protected $fillable = ['id_produto', 'id_venda', 'quantidade', 'valorUnitario', 'valorTotal'];


    function produto(){
        return $this->belongsTo(Produto::class, 'id_produto', 'id');
    }

    function venda(){
        return $this->belongsTo(Venda::class, 'id_venda', 'id');
    }

    

}


