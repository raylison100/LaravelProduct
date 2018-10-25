@extends('painel.templates.templete')

@section('content')

    <h1 class="title-pg">Cadastro de Produtos</h1>

    <form class="form" method="post" action="{{route('produtos.store')}}">

        {!! csrf_field() !!}
        <div class="form-group">
            <input type="text" name="name" placeholder="Nome: " class="form-control">
        </div>

        <div class="form-group">
            <input type="checkbox" name="active" value="1">
            <label>Ativo?</label>
        </div>

        <div class="form-group">
        <input type="text" name="number" placeholder="Numero: " class="form-control">
        </div>

        <div class="form-group">
        <select name="category" class="custom-select">
            <option>Escolha a categoria</option>
            @foreach($category as $categorys)
                <option value="{{$categorys}}">{{$categorys}}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
        <textarea name="description" placeholder="Descrição: " class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Enviar</button>

    </form>
@endsection