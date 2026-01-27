<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FranjasHorariasSeeder extends Seeder
{
    public function run(): void
    {
        $franjas = [
            [
                'nombre' => 'Primera hora',
                'orden' => 1,
                'hora_inicio' => '08:30:00',
                'hora_fin' => '09:30:00',
                'turno' => 'mañana',
            ],
            [
                'nombre' => 'Segunda hora',
                'orden' => 2,
                'hora_inicio' => '09:30:00',
                'hora_fin' => '10:30:00',
                'turno' => 'mañana',
            ],
            [
                'nombre' => 'Tercera hora',
                'orden' => 3,
                'hora_inicio' => '10:30:00',
                'hora_fin' => '11:30:00',
                'turno' => 'mañana',
            ],
            [
                'nombre' => 'Recreo',
                'orden' => 4,
                'hora_inicio' => '11:30:00',
                'hora_fin' => '12:00:00',
                'turno' => 'mañana',
            ],
            [
                'nombre' => 'Cuarta hora',
                'orden' => 5,
                'hora_inicio' => '12:00:00',
                'hora_fin' => '13:00:00',
                'turno' => 'mañana',
            ],
            [
                'nombre' => 'Quinta hora',
                'orden' => 6,
                'hora_inicio' => '13:00:00',
                'hora_fin' => '14:00:00',
                'turno' => 'mañana',
            ],
            [
                'nombre' => 'Sexta hora',
                'orden' => 7,
                'hora_inicio' => '14:00:00',
                'hora_fin' => '15:00:00',
                'turno' => 'mañana',
            ],
            [
                'nombre' => 'Primera hora',
                'orden' => 8,
                'hora_inicio' => '15:15:00',
                'hora_fin' => '16:15:00',
                'turno' => 'tarde',
            ],
            [
                'nombre' => 'Segunda hora',
                'orden' => 9,
                'hora_inicio' => '16:15:00',
                'hora_fin' => '17:15:00',
                'turno' => 'tarde',
            ],
            [
                'nombre' => 'Tercera hora',
                'orden' => 10,
                'hora_inicio' => '17:15:00',
                'hora_fin' => '18:15:00',
                'turno' => 'tarde',
            ],
            [
                'nombre' => 'Recreo',
                'orden' => 11,
                'hora_inicio' => '18:15:00',
                'hora_fin' => '18:30:00',
                'turno' => 'tarde',
            ],
            [
                'nombre' => 'Cuarta hora',
                'orden' => 12,
                'hora_inicio' => '18:30:00',
                'hora_fin' => '19:30:00',
                'turno' => 'tarde',
            ],
            [
                'nombre' => 'Quinta hora',
                'orden' => 13,
                'hora_inicio' => '19:30:00',
                'hora_fin' => '20:30:00',
                'turno' => 'tarde',
            ], 
            [
                'nombre' => 'Sexta hora',
                'orden' => 14,
                'hora_inicio' => '20:30:00',
                'hora_fin' => '21:30:00',
                'turno' => 'tarde',
            ],       
        ];

        DB::table('franjas_horarias')->insert($franjas);
    }
}
