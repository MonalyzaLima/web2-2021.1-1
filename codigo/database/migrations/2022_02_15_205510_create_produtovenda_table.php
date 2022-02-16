<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutovendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtovenda', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('valorUnitario');
            $table->integer('quantidade');
            $table->float('valorTotal');
            $table->unsignedBigInteger('idProduto');
            $table->unsignedBigInteger('idVenda');

            $table->foreign('idProduto')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('idVenda')->references('id')->on('venda')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtovenda');
    }
}
