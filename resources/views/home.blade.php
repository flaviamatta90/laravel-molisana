@php

$data = config('dbpasta');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $key => $product) {
        if($product["tipo"] == "lunga"){
            $lunga[$key] = $product;
        }elseif ($product["tipo"] == "corta"){
            $corta[$key] = $product;
        }elseif ($product["tipo" ]== "cortissima"){
            $cortissima[$key] = $product;
        }
    }
@endphp

@extends('layouts.main')

@section('title')
La Molisana -Sito Ufficiale    
@endsection

@extends('layouts.main')
@section('title')
    Prodotti
@endsection
@section('mainContent')

    @if (!empty($paste))
        @foreach ($paste as $key => $tipopasta)
            <h3>{{$key}}</h3>
            @foreach ($tipopasta as $product)
                <ul>
                    <li>
                        <img class ="img-pasta" src="{{$product["src"]}}" alt="pasta">
                        <div class="overlay">
                            <a href="{{route('dettaglio-prodotto', $product['id'])}}" {{$product["id"]}}><h5>{{$product["titolo"]}}</h5></a>
                        </div>
                    </li>
                </ul>
            @endforeach
            
        @endforeach         
    @endif

@endsection