<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
    public $timestamps=false;
    protected $table='movimientosTable';
    protected $primaryKey='mov_id';

    protected $fillable=[
    'mov_detalle','mov_valor','mov_fecha','cat_id','usu_id',
    ];
}
