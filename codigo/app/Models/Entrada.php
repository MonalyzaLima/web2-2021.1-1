<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    //nome da tabela
    protected $table = "entradas" ;

    //Campos setados no banco
    protected $fillable = ['fornecedor_id', 'notaFiscal', 'valorTotal'];

    function itensEntrada(){
        return $this->hasMany(ItensEntrada::class, 'entrada_id', 'id');
    }

    function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id', 'id');
    }
}



