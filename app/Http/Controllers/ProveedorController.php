<?php

namespace App\Http\Controllers;

use App\Services\ProveedorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProveedorController extends Controller
{
    protected $proveedorService;

    public function __construct(ProveedorService $proveedorService)
    {
        $this->proveedorService = $proveedorService;
    }

    public function index()
    {
        $proveedors = $this->proveedorService->getAllproveedors();
        return view('proveedores.index', compact('proveedors'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|unique:proveedors,email',
            'contacto' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $this->proveedorService->createProveedor($validatedData);

        Session::flash('success', 'Proveedor creado exitosamente.');
        return Redirect::route('proveedores.index');
    }

    public function edit($id)
    {
        $proveedor = $this->proveedorService->getProveedorById($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|unique:proveedors,email,'.$id,
            'contacto' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $this->proveedorService->updateProveedor($id, $validatedData);

        Session::flash('success', 'Proveedor actualizado exitosamente.');
        return Redirect::route('proveedores.index');
    }

    public function destroy($id)
    {
        $this->proveedorService->deleteProveedor($id);
        Session::flash('success', 'Proveedor eliminado exitosamente.');
        return Redirect::route('proveedores.index');
    }
}
