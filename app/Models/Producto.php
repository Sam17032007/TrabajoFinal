<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Proveedor;    
use App\Models\Categoria;

class Producto extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nombre',
        'precio',
        'id_categoria',
        'id_proveedor', 
        'stock'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
}
