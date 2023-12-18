@extends('layouts.app')


@section('content')
    
<section class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>                  
                  <p class="card-text">{{$comic->series}}</p>
                  <p class="card-text">{{$comic->type}}</p>
                  <p class="card-text">{{$comic->sale_date}}</p>
                  <p class="card-text">{{$comic->price}}</p>
                  
                </div>
            </div>
                
        </div>
        @endforeach
    </div>   


</section>
    
@endsection