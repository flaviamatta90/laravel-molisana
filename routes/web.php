<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    $data = config('dbpasta');
    
    $paste = []; 

    foreach($data as $key => $product){
        $product["id"] = $key;
        $paste[$product["tipo"]][] = $product;
    }
    return view('home',["paste" => $paste]);
})->name("home");

   
Route::get('/prodotti', function () {

/*  $data = config('dbpasta');
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
    } */

    $data = config('dbpasta');

    $paste = []; 

    foreach($data as $key => $product){
        $product["id"] = $key;
        $paste[$product["tipo"]][] = $product;
    }
    return view('prodotti',["paste" => $paste]);

})->name("prodotti");


Route::get('/prodotti/show/{id}', function ($id) {

    $products = config("dbpasta");
    
    if($products[$id] == null) {
        abort(404);
    }

    $product = ($products[$id]);
    
    $length = count($products);

    return view('prodotto-singolo', ["data" => $product, "id" => $id, "length" => $length]);
})->where('id', '[0-9]+')->name("dettaglio-prodotto");



Route::get('/news', function () {
    return view('news');
})->name("news");