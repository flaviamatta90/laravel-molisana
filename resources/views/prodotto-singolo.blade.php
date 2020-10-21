@extends('layouts.main')

@section('mainContent')

    <div class="monocromo">
        <h2>{{$data["titolo"]}}</h2>
        <img class= "singoli-prodotti" src="{{$data["src-h"]}}" alt="pasta">
        <img class = "singoli-prodotti" src="{{$data["src-p"]}}" alt="pasta">
        <p>{!!$data["descrizione"]!!}</p>    
    </div>
    
@endsection