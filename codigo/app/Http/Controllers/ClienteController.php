<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /*
    public function show(){
        $clientes = Cliente::all();
        echo($clientes);
    } */

    public function index(){
        $clientes = Cliente::all();
     
        return view('clientes.index', ['clientes' => $clientes ]); 
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(StoreClienteRequest $request){
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->endereco = $request->endereco;
        $cliente->telefone = $request->telefone;
        $cliente->dataNascimento = $request->dataNascimento;
        $cliente->save();
        return redirect()->route('cliente.index');
    }

    public function show($id){
        if($id){
            $cliente = Cliente::where('id', $id)->get();
        }
        else{
            $cliente = Cliente::all();
        }
        return view('clientes.show', ['clientes'=>$cliente]);
    }

    public function edit($id){
        $cliente = Cliente::findorFail($id);
        return view('clientes.edit',['cliente'=>$cliente]);
    }

    public function update(StoreClienteRequest $request){
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect()->route('cliente.index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Cliente::findorFail($id)->delete();
        return redirect()->route('cliente.index')->with('msg', 'Cliente apagado');
    }

    public function showendereco(){
        $clientes = Cliente::all();

        foreach($clientes as $cliente){
            echo "<p> Cliente: $cliente->nome </p>";

            $enderecos = $cliente->endereco()->get();

            if(count($enderecos)>0){
                echo "<p>Endereços:</p>";
                foreach($enderecos as $endereco){
                    echo "<p>[$endereco->id , $endereco->logradouro]</p>";
                }
            }
        }
    }
}