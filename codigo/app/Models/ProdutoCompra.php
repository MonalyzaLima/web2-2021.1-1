<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoCompra extends Model
{
    use HasFactory;
    protected $table = "produtocompra";
    public $timestamps = false;
    /**
     * Get the post that owns the comment.
     */
    public function Compra()
    {
        return $this->belongsTo(Compra::class, 'idCompra');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'idProduto');
    }
    
}
