<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoControllerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/produtos');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('produtos', [ProdutoController::class, 'index'])->name('produtos.index');
    Route::get('produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('produtos', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::get('produtos/{id}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
    Route::put('produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
    Route::delete('produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');


    Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
    Route::post('categorias', [CategoriaController::class, 'store'])->name('categorias.store');
    Route::get('categorias/{id}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::put('categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
});

require __DIR__.'/auth.php';