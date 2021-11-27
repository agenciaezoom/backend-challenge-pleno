<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    //Manda exibir a view de usuários
    public function index() {
        $usuarios = Usuario::get();

        return view('usuarios.list', ['usuarios' => $usuarios]);
    }

    
}
