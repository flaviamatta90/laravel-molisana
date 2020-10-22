@extends('layouts.main')

@section('mainContent')

    <div class="monocromo">
        <h2>{{$data["titolo"]}}</h2>
        <img class= "singoli-prodotti" src="{{$data["src-h"]}}" alt="pasta">
        <div class="arrow">
            @if ($id > 0)
                <a href="{{route('dettaglio-prodotto', $id - 1)}}">
                <i class="fas fa-angle-left"></i></a>
         @endif

            @if ($id < $length - 1)
                <a href="{{route('dettaglio-prodotto', $id + 1)}}">
                <i class="fas fa-angle-right"></i> </a>
            @endif
        </div>
        
        <img class = "singoli-prodotti" src="{{$data["src-p"]}}" alt="pasta">
        <p>{!!$data["descrizione"]!!}</p>    
    </div>

    

    
@endsection