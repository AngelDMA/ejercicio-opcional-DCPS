<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class Persona extends Model
{
    protected $table = "personas";
    protected $guarded = [];

    public function vehiculo() {
        return $this->belongsTo(Vehiculo::class);
    }
}
