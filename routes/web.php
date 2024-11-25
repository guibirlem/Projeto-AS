<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', [ProdutoController::class, 'index']);
Route::get('produtos/create', [ProdutoController::class, 'create']);
Route::post('produtos', [ProdutoController::class, 'store']);
Route::get('produtos/{id}/edit', [ProdutoController::class, 'edit']);
Route::put('produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('produtos/{id}', [ProdutoController::class, 'destroy']);


Route::get('categorias', [CategoriaController::class, 'index']);
Route::get('categorias/create', [CategoriaController::class, 'create']);
Route::post('categorias', [CategoriaController::class, 'store']);
Route::get('categorias/{id}/edit', [CategoriaController::class, 'edit']);
Route::put('categorias/{id}', [CategoriaController::class, 'update']);
Route::delete('categorias/{id}', [CategoriaController::class, 'destroy']);
