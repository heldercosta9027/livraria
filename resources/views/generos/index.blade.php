@extends('layout')
@section('titulo')
Generos
@section('conteudo')
<ul>
    {{$generos->render()}}
@foreach($generos as $genero)
<li>{{$genero->designacao}}</li>
@endforeach
</ul>
@endsection