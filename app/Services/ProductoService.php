<?php

namespace App\Services;

use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Categoria;

class ProductoService
{
    public function createProducto(array $data)
    {
        return Producto::create($data);
    }

    public function getProductoById($id)
    {
        return Producto::findOrFail($id);
    }

    public function updateProducto($id, array $data)
    {
        $producto = $this->getProductoById($id);
        $producto->update($data);
        return $producto;
    }

    public function deleteProducto($id)
    {
        $producto = $this->getProductoById($id);
        return $producto->delete();
    }

    public function getAllProductos()
    {
        return Producto::all();
    }

    public function getAllproveedors()
    {
        return Proveedor::all();
    }

    public function getAllCategorias()
    {
        return Categoria::all();
    }

    public function getProveedorById($id)
    {
        return Proveedor::findOrFail($id);
    }

    public function getCategoriaById($id)
    {
        return Categoria::findOrFail($id);
    }

    public function getAllproveedorsActivos()
    {
        return Proveedor::where('estado', 1)->get();
    }

    public function getAllCategoriasActivas()
    {
        return Categoria::where('estado', 1)->get();
    }
}
