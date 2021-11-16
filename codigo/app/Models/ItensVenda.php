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
    protected $fillable = ['produto_id', 'venda_id', 'quantidade', 'valorUnitario', 'valorTotal'];


    function produto(){
        return $this->belongsTo(Produto::class, 'produto_id', 'id');
    }

    function venda(){
        return $this->belongsTo(Venda::class, 'venda_id', 'id');
    }

    

}


