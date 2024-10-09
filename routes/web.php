<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Categoria;

Route::get('/home', function () {
    return view('home', ['nombre' => 'Wilson Josué','apellido' => 'Solano Durán']);
})->middleware('auth');/*
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
});*/

// Ruta para mostrar la vista show.blade.php
Route::get('/products/show', [ProductController::class, 'index']); 
// Ruta para mostrar la vista create.blade.php
Route::get('/products/create', [ProductController::class, 'create']);
// Ruta para mostrar la vista update.blade.php
Route::get('/products/edit/{product}', [ProductController::class, 'edit']); 
// Ruta para insertar producto
Route::post('/products/store', [ProductController::class, 'store']); 
// Ruta para modificar producto
Route::put('/products/update/{product}', [ProductController::class, 'update']); 
// Ruta para eliminar producto
Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy']);

// Ruta para mostrar la vista show.blade.php
Route::get('/clientes/show', [ClienteController::class, 'index']); 
// Ruta para mostrar la vista create.blade.php
Route::get('/clientes/create', [ClienteController::class, 'create']);
// Ruta para mostrar la vista update.blade.php
Route::get('/clientes/edit/{cliente}', [ClienteController::class, 'edit']); 
// Ruta para insertar producto
Route::post('/clientes/store', [ClienteController::class, 'store']); 
// Ruta para modificar producto
Route::put('/clientes/update/{cliente}', [ClienteController::class, 'update']); 
// Ruta para eliminar producto
Route::delete('/clientes/destroy/{id}', [ClienteController::class, 'destroy']);

// Ruta para mostrar la vista show.blade.php
Route::get('/categorias/show', [CategoriaController::class, 'index']); 
// Ruta para mostrar la vista create.blade.php
Route::get('/categorias/create', [CategoriaController::class, 'create']);
// Ruta para mostrar la vista update.blade.php
Route::get('/categorias/edit/{categoria}', [CategoriaController::class, 'edit']); 
// Ruta para insertar producto
Route::post('/categorias/store', [CategoriaController::class, 'store']); 
// Ruta para modificar producto
Route::put('/categorias/update/{categoria}', [CategoriaController::class, 'update']); 
// Ruta para eliminar producto
Route::delete('/categorias/destroy/{id}', [CategoriaController::class, 'destroy']);
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
