@extends('layouts.app')
@section('title')
    <h1>Laravel DC Comics</h1>
@endsection
@section('content')
    <h1>Index Template</h1>
    <button><a href="{{route('comics.index')}}">Catalogo</a></button>
    
@endsection