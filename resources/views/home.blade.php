
@extends('layouts.main')

@section('title')
La Molisana -Sito Ufficiale    
@endsection

@section('mainContent')
<main>
    <div class="main-container">
        @if (!empty($paste))
            @foreach ($paste as $key => $tipopasta)
                <h3>{{$key}}</h3>
                @foreach ($tipopasta as $product)
                    <ul class="list-pasta">
                        <li>
                            <img class ="img-pasta" src="{{$product["src"]}}" alt="pasta">
                            <div class="overlay">
                                <a href="{{route('dettaglio-prodotto', $product['id'])}}" {{$product["id"]}}>
                                    <h4>{{$product["titolo"]}}</h4>
                                    <img class ="icon-svg" src="/images/icon.svg" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                @endforeach
                
            @endforeach         
         @endif
    </div>
   
</main>

    

@endsection