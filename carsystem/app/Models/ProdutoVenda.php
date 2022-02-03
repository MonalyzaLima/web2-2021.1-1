<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoVenda extends Model
{
    use HasFactory;
    protected $table = "produtovenda";
    public $timestamps = false;
    /**
     * Get the post that owns the comment.
     */
    public function venda()
    {
        return $this->belongsTo(Venda::class, 'idVenda');
    }
}
