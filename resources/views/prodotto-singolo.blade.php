@extends('layouts.main')

@section('mainContent')
    <h1>{{$data["titolo"]}}</h1>
    <img src="{{$data["src-h"]}}" alt="pasta">
    <img src="{{$data["src-p"]}}" alt="pasta">
    <p>{!!$data["descrizione"]!!}</p>    
@endsection