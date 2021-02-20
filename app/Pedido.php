<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'tipo', 'modelo', 'talla', 'color', 'imagen', 'categoria_id'
    ];

    public function categoriaPedido(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    public function autorPedido(){
        return $this->belongsTo(User::class,'user_id');
    }
}
