<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cotizacion;

class Pago extends Model
{
    protected $fillable =['monto','user_id','cotizacion_id'];

    protected $table ='pagos';

    public function cotizacion()
    {
    	return $this->belongsTo(Cotizacion::class);
    }
}
