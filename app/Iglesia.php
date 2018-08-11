<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Iglesia extends Model
{
    use SoftDeletes;
    protected $table = 'iglesias';
    protected $fillable = ['nombre','denominacion','direccion','pastor_encargado'];
    protected $dates = ['deleted_at'];
}
