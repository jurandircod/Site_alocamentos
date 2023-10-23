@extends('layouts.main')

@section('title', 'HDC events')
@section('content')
        @foreach ($nome as $nomes)
               <p>{{$nomes}}
               </p> 
               <p>{{$loop->index}}</p>
        @endforeach

        {{--este é o comentario do blade--}}

@endsection
