<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function getPrecoAttribute($preco)
    {
        return 'R$ ' . number_format($preco, 2, ',', '.');
    }
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
