<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = ['precio_mes', 'autonomia', 'duracion', 'requerimiento'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}

