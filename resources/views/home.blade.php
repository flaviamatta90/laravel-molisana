
@extends('layouts.main')

@section('title')
La Molisana -Sito Ufficiale    
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