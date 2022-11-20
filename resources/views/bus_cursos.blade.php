@extends('layouts.main')

@section('title','Cursos')

@section('content')
 <h1>Cursos</h1>
 @if($busca != '')
    <p>Buscando por: {{ $busca }}</p>
 @endif
<a href="/">voltar</a>

@endsection