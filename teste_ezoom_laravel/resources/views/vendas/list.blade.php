@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <h1>Registro de vendas</h1>
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
                                <th scope="col">Produto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach( $vendas as $v )
                            <tr>
                                <th scope="row">{{ $v->id }}</th>
                                <td>{{ $v->produto }}</td>
                                <td>{{ $v->vendas }}</td>
                                <td>{{ $v->valor }}</td>
                                <td>
                                    <a href="usuarios/{{ $v->id }}/edit" class="btn btn-info">Editar</a>
                                </td>
                                <td>
                                    <form action="usuarios/delete/{{ $v->id }}" method="post">
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
