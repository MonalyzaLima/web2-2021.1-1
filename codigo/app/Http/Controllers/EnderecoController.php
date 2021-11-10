<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;


class EnderecoController extends Controller
{
       
    public function show($id){

        $endereco = Endereco::find($id);

        if ($endereco){
            echo "<p> O endereço é $endereco </p>";
        }

        echo "<h1> Pertence ao cliente: </h1>";
        $cliente = $endereco->cliente()->first();

        if($cliente){
            echo $cliente->nome;
        }
    } 
   
    public function create($id){
        return view('endereco.create',['cliente_id'=>$id]);
    }

    public function store(Request $request){
        $endereco = new Endereco();
        $endereco->logradouro = $request->logradouro;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->uf = $request->uf;
        $endereco->cliente_id = $request->cliente_id;
        $endereco->save();
        return redirect()->route('cliente.show',['id'=>5]);
    }

}
