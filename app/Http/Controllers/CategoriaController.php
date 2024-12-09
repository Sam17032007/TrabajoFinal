<?php

namespace App\Http\Controllers;

use App\Services\CategoriaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoriaController extends Controller
{
    protected $categoriaService;

    public function __construct(CategoriaService $categoriaService)
    {
        $this->categoriaService = $categoriaService;
    }

    public function index()
    {
        $categorias = $this->categoriaService->getAllCategorias();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $this->categoriaService->createCategoria($validatedData);

        Session::flash('success', 'Categoría creada exitosamente.');
        return Redirect::route('categorias.index');
    }

    public function edit($id)
    {
        $categoria = $this->categoriaService->getCategoriaById($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $this->categoriaService->updateCategoria($id, $validatedData);

        Session::flash('success', 'Categoría actualizada exitosamente.');
        return Redirect::route('categorias.index');
    }

    public function destroy($id)
    {
        $this->categoriaService->deleteCategoria($id);
        Session::flash('success', 'Categoría eliminada exitosamente.');
        return Redirect::route('categorias.index');
    }
}
