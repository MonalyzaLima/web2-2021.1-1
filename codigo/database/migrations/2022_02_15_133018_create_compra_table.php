<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('quantidade');
            $table->float('valorTotal');
            $table->string('notaFiscal', 44);
            $table->unsignedBigInteger('idFornecedor');
            $table->unsignedBigInteger('idFuncionario');
            $table->unsignedBigInteger('idFormaPagamento');

            $table->foreign('idFornecedor')->references('id')->on('fornecedores')->onDelete('cascade');
            $table->foreign('idFuncionario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idFormaPagamento')->references('id')->on('formapagamento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
}
