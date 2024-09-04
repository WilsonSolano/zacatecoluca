<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['nombre' => 'Wilson Josué','apellido' => 'Solano Durán']);
});
Route::get('/products/show', function (){
    return view('products/show',['producto' => 'Camisa Sport']);
});
Route::get('products/create', function(){
    return view('products/create');
});
Route::get('products/edit', function(){
    return view('products/update');
});

Route::get('/clientes/show', function (){
    return view('clientes/show');
});
Route::get('clientes/create', function(){
    return view('clientes/create');
});
Route::get('clientes/edit', function(){
    return view('clientes/update');
});

Route::get('/categorias/show', function (){
    return view('categorias/show');
});
Route::get('categorias/create', function(){
    return view('categorias/create');
});
Route::get('categorias/edit', function(){
    return view('categorias/update');
});