<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <!-- Título -->
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Reserva de espacios
            </h2>

            <!-- Selector de aula -->
            <div class="flex items-center gap-2">
                <label for="aula" class="font-semibold text-gray-200">Selecciona aula:</label>
                <select id="aula" class="border rounded px-3 py-1">
                    <option>Salón de actos</option>
                    <option>Laboratorio de biología</option>
                    <option>Laboratorio de química</option>
                    <option>Laboratorio de tecnología</option>
                </select>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Navegación semana -->
            <div class="bg-white rounded-lg shadow p-4 mb-6 flex items-center justify-between">
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">←</button>
                <div class="text-center">
                    <p class="font-semibold">26 enero – 30 enero</p>
                    <p class="text-sm text-gray-500">Semana 4, 2026</p>
                </div>
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">→</button>
            </div>

            <!-- Tablas mañana y tarde -->
            <div class="flex gap-6 overflow-x-auto">
                <!-- Mañana -->
                <div class="flex-1 bg-white rounded-lg shadow p-4">
                    <h3 class="font-semibold mb-2 text-center">Mañana</h3>
                    <table class="w-full table-fixed border-collapse text-center">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border p-2"></th>
                                <th class="border p-2">Lunes</th>
                                <th class="border p-2">Martes</th>
                                <th class="border p-2">Miércoles</th>
                                <th class="border p-2">Jueves</th>
                                <th class="border p-2">Viernes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 7; $i++)
                                <tr>
                                    <td class="border p-2 font-semibold">
                                        {{ $i == 4 ? 'Recreo' : "Clase $i" }}
                                    </td>
                                    @for ($j = 1; $j <= 5; $j++)
                                        <td class="border p-2 hover:bg-gray-100 cursor-pointer"></td>
                                    @endfor
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

                <!-- Tarde -->
                <div class="flex-1 bg-white rounded-lg shadow p-4">
                    <h3 class="font-semibold mb-2 text-center">Tarde</h3>
                    <table class="w-full table-fixed border-collapse text-center">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border p-2"></th>
                                <th class="border p-2">Lunes</th>
                                <th class="border p-2">Martes</th>
                                <th class="border p-2">Miércoles</th>
                                <th class="border p-2">Jueves</th>
                                <th class="border p-2">Viernes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 7; $i++)
                                <tr>
                                    <td class="border p-2 font-semibold">
                                        {{ $i == 4 ? 'Recreo' : "Clase $i" }}
                                    </td>
                                    @for ($j = 1; $j <= 5; $j++)
                                        <td class="border p-2 hover:bg-gray-100 cursor-pointer"></td>
                                    @endfor
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Mensajes -->
            <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded text-blue-800">
                Selecciona una celda libre para crear una reserva.
            </div>

        </div>
    </div>
</x-app-layout>
