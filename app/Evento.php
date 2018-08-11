<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use SoftDeletes;
    protected $table = 'eventos';
    protected $fillable = ['nombre','descripcion','fecha','costo','imagen','url_mapa','direccion','tipo_evento'];
    protected $dates = ['deleted_at'];
}
