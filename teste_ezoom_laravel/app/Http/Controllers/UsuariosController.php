<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Redirect;

class UsuariosController extends Controller
{
    //Manda exibir a view de usuários
    public function index() {
        $usuarios = Usuario::get();

        return view('usuarios.list', ['usuarios' => $usuarios]);
    }

    //Manda para meu cadastro de um novo usuário
    public function new() {
        return view('usuarios.form');
    }

    //
    public function add( Request $request) {
        $usuario = new Usuario;
        $usuario = $usuario->crate( $request->all() );
        return Redirect::to('/usuarios');
    }

    //Manda para o form de editar um usuário
    public function edit( $id ) {
        //Instanciando o usuário
        $usuario = Usuario::findOrFail( $id );
        return view('usuarios.form', ['usuario' => $usuario]);
    }

    //Edita um usuário
    public function update( $id, Request $request) {
        $usuario = Usuario::findOrFail( $id );
        $usuario->update( $request->all() );
        return Redirect::to('/usuarios');
    }
}
