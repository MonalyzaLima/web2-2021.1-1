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
    protected $fillable = ['id_produto', 'id_entrada', 'quantidade', 'valorUnitario', 'valorTotal'];

    function entrada(){
        return $this->belongsTo(Entrada::class, 'id_entrada', 'id');
    }

    function produto(){
        return $this->belongsTo(Produto::class, 'id_produto', 'id');
    }

}



