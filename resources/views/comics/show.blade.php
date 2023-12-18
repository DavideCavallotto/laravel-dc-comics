@extends('layouts.app')

@section('content')

<section class="container text-center">
    <img src="{{$comic->image}}" alt="">
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>
</section>
<div class="text-center">
    <button><a href="{{route('comics.index')}}">Catalogo</a></button>

</div>

@endsection