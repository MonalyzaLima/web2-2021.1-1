<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = "venda";
    public $timestamps = false;
    
    /**
     * Get the comments for the blog post.
     */
    public function produtoVendas()
    {
        return $this->hasMany(ProdutoVenda::class, 'idVenda');
    }
}
