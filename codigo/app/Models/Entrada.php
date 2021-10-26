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
    protected $fillable = ['id_fornecedor', 'notaFiscal', 'valorTotal'], 'quantidade';

    function itensEntrada(){
        return $this->hasMany(ItensEntrada::class, 'id_entrada', 'id');
    }

    function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'id_fornecedor', 'id');
    }
}



