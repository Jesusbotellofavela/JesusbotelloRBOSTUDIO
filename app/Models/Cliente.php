<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Cliente extends Model
{
    use HasFactory;

    use Searchable;

    public function Contrato()
    {
        return $this->belongsTo('App\Models\Contrato', 'contrato_id');
    }
    public function Equipo()
    {
        return $this->belongsTo('App\Models\Equipo', 'equipo_id');
    }
    public function Sesiones()
    {
        return $this->belongsTo('App\Models\Sesiones', 'sesiones_id');
    }
    public function Transacciones()
    {
        return $this->belongsTo('App\Models\Transacciones', 'transacciones_id');
    }
    public function User()
    {
        return $this->belongsTo('App\Models\User', 'users_id');
    }


}
