@extends('painel.templates.templete')

@section('content')
    <h1 class="title-pg">Lita de produtos</h1>

    <a href="{{route('produtos.create')}}" class="btn btn-primary" style="margin-bottom: 2px"><span class="glyphicon glyphicon-plus"></span>
        Cadastrar</a>
    <table class="table table-striped table-bordered">
        <tr class="thead-dark">
            <th>Nome</th>
            <th>Descrição</th>
            <th width="10px">Ações</th>
        </tr>
        @foreach($produtos as $produto)
            <tr>
                <td>
                    {{$produto->name}}
                </td>
                <td>
                    {{$produto->description}}
                </td>
                <td>
                    <a href="" class="action edit">

                        <span class="glyphicon glyphicon-ok"></span>
                    </a>
                    <a href="" class="action delete">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection