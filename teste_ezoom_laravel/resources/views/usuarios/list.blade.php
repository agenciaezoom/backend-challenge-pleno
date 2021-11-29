@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ url('usuarios/new') }}">Novo Usuário</a>
                                </li>
                                <li class="nav-item mx-1">
                                    <a href="{{ url('vendas/new') }}">Registrar Venda</a>
                                </li>
                                <li class="nav-item mx-1">
                                    <a href="{{ url('vendas/index') }}">Vendas Registradas</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status')}}
                        </div>
                    @endif

                    <h1>Lista dos usuarios</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach( $usuarios as $u )
                            <tr>
                                <th scope="row">{{ $u->id }}</th>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                    <a href="usuarios/{{ $u->id }}/edit" class="btn btn-info">Editar</a>
                                </td>
                                <td>
                                    <form action="usuarios/delete/{{ $u->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
