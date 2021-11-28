@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status')}}
                </div>
            @endif

            <!-- FORMULÁRIO DE EDITAR -->
            @if( Request::is('*/edit') )
            <form action="{{ url('usuarios/update') }}/{{ $usuario->id }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input type="text" name="name" class="form-control" value="{{ $usuario->name }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="text" name="email" class="form-control" value="{{ $usuario->email }}">
                </div>
                
                <div class="row">
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ url('usuarios') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            </form>
            @else
            <form action="{{ url('usuarios/add') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ url('usuarios') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
