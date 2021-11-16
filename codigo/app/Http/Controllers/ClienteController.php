<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use Illuminate\Http\Request;
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
        /*foreach($clientes as $cliente){
            echo "<p> Nome do {{ $cliente }} </p>";
        } */


        return view('clientes.index', ['clientes' => $clientes ]); //Passa objeto
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(StoreClienteRequest $request){
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->debito = $request->debito;
        $cliente->endereco = $request->endereco;
        $cliente->save();
        return redirect('index');
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

    public function update(Request $request){
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect('index')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Cliente::findorFail($id)->delete();
        return redirect('index')->with('msg', 'Cliente apagado');
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
