@extends('admin.layout')

@section('title', 'Cadastro de Diretores')

@section('page-title', 'Cadastro de Diretores')

@section('content')
    <form method="post" action="{{route('directors.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Salvar" class="btn btn-success">
            <a href="{{route('directors.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection
