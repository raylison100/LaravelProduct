@extends('sites.templates.template1')

@section('content')
    <h1>Home page do site </h1>
    {{$var1}}

    @if($var1 == '123')
        <p>é igual</p>
    @else
        <p>Não é igual</p>
    @endif

    @for($i = 0; $i < 10 ; $i++)
        <p> contando: {{$i}}</p>
    @endfor

    @foreach($arrayData as $number)
        <p>imprimindo array: {{$number}}</p>
    @endforeach

    @include('sites.includes.sidebar')

@endsection

@push('scripts')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endpush