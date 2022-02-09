<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoCompra extends Model
{
    use HasFactory;
    protected $table = "produtoCompra";
    public $timestamps = false;
    /**
     * Get the post that owns the comment.
     */
    public function Compra()
    {
        return $this->belongsTo(Venda::class, 'idCompra');
    }}
