<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class Marca extends Model
{
    protected $table = "marcas";
    protected $guarded = [];

    public function vehiculos(){
        return $this->hasMany(Vehiculo::class);
    }

}
