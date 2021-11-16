<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensEntrada extends Model
{
    use HasFactory;

    //nome da tabela
    protected $table = "itensEntrada" ;

    //Campos setados no banco
    protected $fillable = ['produto_id', 'entrada_id', 'quantidade', 'valorUnitario', 'valorTotal'];

    function entrada(){
        return $this->belongsTo(Entrada::class, 'entrada_id', 'id');
    }

    function produto(){
        return $this->belongsTo(Produto::class, 'produto_id', 'id');
    }

}



