<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Contrato extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    use Searchable;

    public function Cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'cliente_id');
    }



}
