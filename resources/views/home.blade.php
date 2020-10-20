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

@section('mainContent')
@if (!empty($lunga))
            
@endif
<h3>LE LUNGHE</h3>
<ul class="list-pasta">
    @foreach ($lunga as $key => $product)
    <li>
        <img class ="img-pasta" src="{{$product["src"]}}" alt="">
        <a href="prodotti/show/{{$key}}"><h5>{{$product["titolo"]}}</h5></a>
    </li>
    @endforeach
</ul>

<h3>LE CORTE</h3>
<ul class="list-pasta">
    @foreach ($corta as $key => $product)
    <li>
        <img class ="img-pasta" src="{{$product["src"]}}" alt="">
        <a href="prodotti/show/{{$key}}"><h5>{{$product["titolo"]}}</h5></a>
    </li>
    @endforeach
</ul>

<h3>LE CORTISSIME</h3>
<ul class="list-pasta">
    @foreach ($cortissima as $key => $product)
    <li>
        <img class ="img-pasta" src="{{$product["src"]}}" alt="">
        <a href="prodotti/show/{{$key}}"><h5>{{$product["titolo"]}}</h5></a>
    </li>
    @endforeach
</ul>
@endsection
