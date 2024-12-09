<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Services\ProductoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProductoController extends Controller
{
    protected $productoService;

    public function __construct(ProductoService $productoService)
    {
        $this->productoService = $productoService;
    }

    public function index()
    {
        $productos = Producto::with(['proveedor', 'categoria'])->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $proveedors = $this->productoService->getAllproveedors();
        $categorias = $this->productoService->getAllCategorias();
        return view('productos.create', compact('proveedors', 'categorias'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'precio' => 'required|string',
            'id_proveedor' => 'required',
            'id_categoria' => 'required',
            'stock' => 'required|string',
        ]);

        $this->productoService->createProducto($validatedData);

        Session::flash('success', 'Producto creado exitosamente.');
        return Redirect::route('productos.index');
    }

    public function edit($id)
    {
        $producto = $this->productoService->getProductoById($id);
        $proveedors = $this->productoService->getAllproveedors();
        $categorias = $this->productoService->getAllCategorias();
        return view('productos.edit', compact('producto', 'proveedors', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|string',
            'id_proveedor' => 'required|exists:proveedors,id',
            'id_categoria' => 'required|exists:categorias,id',
            'stock' => 'required|string',
        ]);

        $this->productoService->updateProducto($id, $validatedData);

        Session::flash('success', 'Producto actualizado exitosamente.');
        return Redirect::route('productos.index');
    }

    public function destroy($id)
    {
        $this->productoService->deleteProducto($id);
        Session::flash('success', 'Producto eliminado exitosamente.');
        return Redirect::route('productos.index');
    }
}
