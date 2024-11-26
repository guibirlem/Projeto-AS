<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('categoria.create');
    }

    public function store(Request $request)
    {
        Categoria::create($request->all());
        return redirect('categorias')->with('success', 'Categoria criado com sucesso.');
    }

    public function edit($id)
    {
        $categorias = Categoria::findOrFail($id);
        return view('categoria.edit', compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $categorias = Categoria::findOrFail($id);
        $categorias->update($request->all());
        return redirect('categorias')->with('success', 'Categoria atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $produtos = Categoria::findOrFail($id);
        $produtos->delete();
        return redirect('categorias')->with('success', 'produto deleted successfully.');
    }
}
