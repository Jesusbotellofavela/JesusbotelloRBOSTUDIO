<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Galeria extends Model
{
    use Searchable;
    protected $table = 'galeria';
    use HasFactory;
    protected $fillable = ['cliente_id', 'nombre_imagen', 'tamano', 'precio_imagen','imagen'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
