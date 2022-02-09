<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $table = "compra";
    public $timestamps = false;
    
    /**
     * Get the comments for the blog post.
     */
    public function produtoVendas()
    {
        return $this->hasMany(ProdutoCompra::class, 'idCompra');
    }
}

