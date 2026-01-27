<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Reserva;
use App\Models\FranjaHoraria;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Mostrar formulario de reservas y reservas existentes
     */
    public function index(Request $request)
    {
        // 1. Aulas para el desplegable
        $aulas = Aula::all();

        // 2. Franjas horarias (ordenadas)
        $franjas = FranjaHoraria::orderBy('orden')->get();

        // 3. Fechas (por ahora simples)
        $fechaInicio = $request->input('fecha_inicio');
        $fechaFin    = $request->input('fecha_fin');

        $reservas = collect();

        if ($fechaInicio && $fechaFin) {
            $reservas = Reserva::whereBetween('fecha', [$fechaInicio, $fechaFin])
                ->with(['aula', 'franjaHoraria', 'user'])
                ->get();
        }

        return view('reservas.index', compact(
            'aulas',
            'franjas',
            'reservas',
            'fechaInicio',
            'fechaFin'
        ));
    }

    /**
     * Crear una nueva reserva
     */
    public function store(Request $request)
    {
        $request->validate([
            'aula_id'            => 'required|exists:aulas,id',
            'franja_horaria_id'  => 'required|exists:franjas_horarias,id',
            'fecha'              => 'required|date',
            'grupo'              => 'required|string|max:255',
            'motivo'             => 'required|string',
        ]);

        Reserva::create([
            'user_id'            => auth()->id(),
            'aula_id'            => $request->aula_id,
            'franja_horaria_id'  => $request->franja_horaria_id,
            'fecha'              => $request->fecha,
            'grupo'              => $request->grupo,
            'motivo'             => $request->motivo,
        ]);

        return redirect()->back()->with('success', 'Reserva creada correctamente');
    }
}
