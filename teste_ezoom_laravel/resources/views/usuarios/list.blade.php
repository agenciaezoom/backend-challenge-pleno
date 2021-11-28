@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-header"><a href="{{ url('usuarios/new') }}">Novo Usuário</a></div>
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
                                    <button class="btn btn-danger">Deletar</button>
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
