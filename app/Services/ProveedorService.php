<?php

namespace App\Services;

use App\Models\Proveedor;

class ProveedorService
{
    public function createProveedor(array $data)
    {
        return Proveedor::create($data);
    }

    public function getProveedorById($id)
    {
        return Proveedor::findOrFail($id);
    }

    public function updateProveedor($id, array $data)
    {
        $proveedor = $this->getProveedorById($id);
        $proveedor->update($data);
        return $proveedor;
    }

    public function deleteProveedor($id)
    {
        $proveedor = $this->getProveedorById($id);
        return $proveedor->delete();
    }

    public function getAllproveedors()
    {
        return Proveedor::all();
    }
}
