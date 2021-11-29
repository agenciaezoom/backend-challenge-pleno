<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\Venda;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    //Manda para meu cadastro de um novo usuário
    public function new() {
        return view('vendas.form');
    }

    //Adiciona uma nova venda
    public function add( Request $request) {
        $vendas = new Vendas; //Instanciando a classe Vendas
        $vendas = $vendas->create( $request->all() );
        return Redirect::to('/vendas');
    }

    //Manda exibir os registros de venda
    public function index() {

        return view('vendas.list');
    }

    //Manda para o form de editar uma venda
    public function edit( $id ) {
        //Instanciando o usuário
        $venda = Venda::findOrFail( $id );
        return view('vendas.form', ['vendas' => $venda]);
    }

    //Edita uma venda
    public function update( $id, Request $request) {
        $venda = Venda::findOrFail( $id );
        $venda->update( $request->all() );
        return Redirect::to('/vendas');
    }
}
