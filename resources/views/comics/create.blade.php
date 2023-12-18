@extends('layouts.app')
@section('content')

<section class="container text-center">
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Aggiungi un titolo">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Aggiungi una descrizione"></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Aggiungi un'immagine">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Aggiungi un prezzo">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Aggiungi una serie">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data Pubblicazione</label>
        <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Aggiungi la data di pubblicazione">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Aggiungi la tipologia">
    </div>

    <div>
        <input type="submit" class="btn btn-primary" value="Aggiungi">
    </div>
    

</form>

@endsection

