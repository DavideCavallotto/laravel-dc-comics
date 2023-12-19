@extends('layouts.app')


@section('content')
    
<section class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-sm-3 mb-4">
            <div class="card h-100" style="width: 18rem;">
                <img src="{{$comic->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></h5>                  
                  <p class="card-text">{{$comic->series}}</p>
                  <p class="card-text">{{$comic->type}}</p>
                  <p class="card-text">{{$comic->sale_date}}</p>
                  <p class="card-text">${{$comic->price}}</p>
                  
                  <button><a href="{{route('comics.edit', $comic->id)}}">Modifica</a></button>
                </div>
            </div>
                
        </div>
        @endforeach
    </div> 
    <div class="text-center my-5">
        <button><a href="{{route('index')}}">Home</a></button>
        <button><a href="{{route('comics.create')}}">Aggiungi Fumetto</a></button>    

    </div>


</section>
    
@endsection