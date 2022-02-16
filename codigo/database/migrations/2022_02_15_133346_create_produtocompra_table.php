<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutocompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtocompra', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('valorUnitario');
            $table->integer('quantidade');
            $table->float('valorTotal');
            $table->unsignedBigInteger('idProduto');
            $table->unsignedBigInteger('idCompra');

            $table->foreign('idProduto')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('idCompra')->references('id')->on('compra')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtocompra');
    }
}
