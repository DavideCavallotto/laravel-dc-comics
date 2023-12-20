@extends('layouts.app')


@section('content')
<h1 class="text-center">Catalogo Fumetti</h1>    
<section class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-sm-3 mb-4">
            <div class="card h-100" style="width: 18rem;">
                <img src="{{$comic->image}}" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-end">
                    <h5 class="card-title">{{$comic->title}}</a></h5>                  
                    <p class="card-text">{{$comic->series}}</p>
                    <p class="card-text">{{$comic->type}}</p>
                    <p class="card-text">{{$comic->sale_date}}</p>
                    <p class="card-text">${{$comic->price}}</p>
                    <div class="d-flex gap-1">
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-info">Dettaglio</a>
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">Modifica</a>
                        
                        <!-- Button trigger modal -->
                        <button type="submit" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$comic->id}}">
                        Elimina
                        </button>
                      
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop-{{$comic->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Sei sicuro di voler eliminare il Fumetto?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{$comic->title}}
                                    </div>
                                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-footer">
                                            <input class="btn btn-danger" type="submit" value="Elimina">                
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>                    
                    </div>
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


{{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <input class="btn btn-danger" type="submit" value="Elimina">
</form> --}}


