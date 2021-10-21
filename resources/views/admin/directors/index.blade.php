@extends('admin.layout')

@section('title', 'Gerenciamento de Diretores')

@section('page-title', 'Gerenciamento de Diretores')

@section('content')
    <a href="{{route('directors.create')}}" class="btn btn-success">Novo diretor</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="main-col">Genero</th>
                <th>-</th>
            </tr>
        </thead>
        <tbody>
            @foreach($directors AS $director)
                <tr>
                    <td class="main-col">{{$director->name}}</td>
                    <td>
                        <a href="{{route('directors.edit', $director)}}" class="btn btn-primary">Editar</a>
                        <form method="post" action="{{route('directors.destroy', $director)}}" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
