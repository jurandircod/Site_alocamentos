@extends('layouts.main')
@section('title', 'produtos')
@section('content')

<h1>tela de produtos</h1>   

    @if($id != null)
        <p> exibindo produto id:{{$id}}</p>
    @endif

    @if($busca != null)
        <p>O usuario esta buscando {{$busca}}</p>
    @endif
@endsection