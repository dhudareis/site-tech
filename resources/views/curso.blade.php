@extends('layouts.main')

@section('title','Curso')

@section('content')

 @if($id != null)
    <p>Curso {{ $id }}</p>
 @endif
 <a href="/">voltar</a>

@endsection