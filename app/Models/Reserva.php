<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'user_id',
        'aula_id',
        'franja_horaria_id',
        'fecha',
        'grupo',
        'motivo',
    ];

    // Relaciones
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }

    public function franjaHoraria()
    {
        return $this->belongsTo(FranjaHoraria::class);
    }
}
