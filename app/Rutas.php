<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    protected $table = 'rutas';

    public function sitio_salida()
    {
        return $this->belongsToMany('App\Sitios', 'rutas_sitios_salida', 'sitio_salida', 'id', 'sitios');
    }

    public function sitio_llegada()
    {
        return $this->belongsToMany('App\Sitios', 'rutas_sitios_llegada', 'sitio_llegada', 'id', 'sitios');
    }
}
