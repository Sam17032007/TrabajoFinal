<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'contacto',
        'descripcion'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_proveedor', 'id');
    }
}
