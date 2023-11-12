<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Equipo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    use Searchable;

    protected $fillable = [


    ];

}
