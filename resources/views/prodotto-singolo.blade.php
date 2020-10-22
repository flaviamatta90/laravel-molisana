@extends('layouts.main')

@section('mainContent')

    <div class="monocromo">
        <h2>{{$data["titolo"]}}</h2>
        <img class= "singoli-prodotti" src="{{$data["src-h"]}}" alt="pasta">
        <img class = "singoli-prodotti" src="{{$data["src-p"]}}" alt="pasta">
        <p>{!!$data["descrizione"]!!}</p>    
    </div>

    @if ($id > 0)
        <a href="{{route('dettaglio-prodotto', $id - 1)}}">Prev</a>
    @endif
    @if ($id < $length - 1)
        
    @endif
    <a href="{{route('dettaglio-prodotto', $id + 1)}}">Next</a>

    
@endsection