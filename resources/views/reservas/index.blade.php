<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Reservar aula
        </h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('reservas.store') }}">
            @csrf

            <!-- Aula -->
            <select name="aula_id">
                @foreach ($aulas as $aula)
                    <option value="{{ $aula->id }}">{{ $aula->nombre }}</option>
                @endforeach
            </select>

            <!-- Fecha -->
            <input type="date" name="fecha">

            <!-- Franja -->
            <select name="franja_horaria_id">
                @foreach ($franjas as $franja)
                    <option value="{{ $franja->id }}">
                        {{ $franja->nombre }}
                    </option>
                @endforeach
            </select>

            <input type="text" name="grupo" placeholder="Grupo">
            <textarea name="motivo" placeholder="Motivo"></textarea>

            <button type="submit">Reservar</button>
        </form>
    </div>
</x-app-layout>
