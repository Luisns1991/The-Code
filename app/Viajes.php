<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    protected $table = 'viajes';

    public function ruta()
    {
        $this->belongsToMany('App\Rutas', 'viajes_rutas', 'ruta', 'id', 'rutas');
    }
}
