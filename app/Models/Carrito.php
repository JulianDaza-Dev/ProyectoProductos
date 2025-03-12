<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $fillable = ['usuario','producto_id','cantidad'];

    public function productos()
    {
        return $this->belongsTo(Producto::class);
    }
}
