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

    public function ContratoH()
    {
        return $this->hasMany('App\Models\Contrato', 'contrato_id');
    }
    public function EquipoH()
    {
        return $this->hasMany('App\Models\Equipo', 'equipo_id');
    }
    public function SesionesH()
    {
        return $this->hasMany('App\Models\Sesiones', 'sesiones_id');
    }
    public function TransaccionesH()
    {
        return $this->hasMany('App\Models\Transacciones', 'transacciones_id');
    }
    public function UserH()
    {
        return $this->hasMany('App\Models\User', 'users_id');
    }


}
