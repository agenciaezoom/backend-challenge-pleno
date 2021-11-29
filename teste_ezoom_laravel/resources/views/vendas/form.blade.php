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
            <form action="{{ url('#') }}/{{ $vendas->id }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="produto">Produto</label>
                    <input type="text" name="produto" class="form-control" value="{{ $vendas->produto }}">
                </div>

                <div class="form-group">
                    <label for="vendas">Vendas</label>
                    <input type="number" name="vendas" class="form-control" value="{{ $vendas->vendas }}">
                </div>

                <div class="form-group">
                    <label for="vendas">Valor</label>
                    <input type="number" name="valor" class="form-control" value="{{ $vendas->valor }}">
                </div>
                
                <div class="row">
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ url('vendas') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            </form>
            @else
            <form action="{{ url('vendas/add') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="produto">Produto</label>
                    <input type="text" name="produto" class="form-control">
                </div>

                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" name="quantidade" class="form-control">
                </div>

                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" class="form-control">
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
