<?php

namespace App\Services;

use App\Models\Categoria;

class CategoriaService
{
    public function createCategoria(array $data)
    {
        return Categoria::create($data);
    }

    public function getCategoriaById($id)
    {
        return Categoria::findOrFail($id);
    }

    public function updateCategoria($id, array $data)
    {
        $categoria = $this->getCategoriaById($id);
        $categoria->update($data);
        return $categoria;
    }

    public function deleteCategoria($id)
    {
        $categoria = $this->getCategoriaById($id);
        return $categoria->delete();
    }

    public function getAllCategorias()
    {
        return Categoria::all();
    }
}
