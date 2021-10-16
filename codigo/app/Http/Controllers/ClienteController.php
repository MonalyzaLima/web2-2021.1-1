<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function show(){
        $clientes = Cliente::all();
        echo($clientes);
    }

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

    public function store(Request $request){
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->debito = $request->debito;
        $cliente->endereco = $request->endereco;
        $cliente->save();
        return redirect('index');
    }
}
