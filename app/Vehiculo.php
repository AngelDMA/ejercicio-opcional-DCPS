<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marca;
use App\Persona;

class Vehiculo extends Model
{
    protected $table = "vehiculos";
    protected $guarded = [];

    public function marca() {
        return $this->belongsTo(Marca::class);
    }

    public function persona() {
        return $this->belongsTo(Persona::class);
    }
}
