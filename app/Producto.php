<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // La tabla
    protected $table= "productos";
    // Los campos requeridos
    protected $fillable = [
        'marca', 'modelo', 'precio','tipo', 'imagen'
    ];

    // scope para el buscador de producto
    public function scopeSearch($query, $name){
        return $query->where('modelo', 'LIKE', "%$name%" )->orWhere('marca', 'LIKE', "%$name%");
    }
}
