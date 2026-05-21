@extends('layouts.app')

@section('title', 'Medições')

@section('content')
    <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm p-6 rounded-xl shadow-lg border border-sky-100 dark:border-gray-800">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-lg font-semibold text-sky-600 dark:text-sky-400">Medições</h1>
            <a href="{{ route('measurements.create') }}" class="px-3 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Nova medição</a>
        </div>

        @if(session('success'))
            <div class="p-3 mb-4 bg-green-50 dark:bg-green-900/50 text-green-700 dark:text-green-300 border border-green-100 dark:border-green-800 rounded-lg">{{ session('success') }}</div>
        @endif

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="text-left text-sm text-gray-600 dark:text-gray-400 border-b border-sky-100 dark:border-gray-700">
                    <th class="py-2">ID</th>
                    <th>Peso (kg)</th>
                    <th>PA</th>
                    <th>FC</th>
                    <th>Temp (°C)</th>
                    <th>SpO₂</th>
                    <th>Medido em</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($measurements as $m)
                    <tr class="border-b border-sky-100 dark:border-gray-800">
                        <td class="py-2">{{ $m->id }}</td>
                        <td>{{ $m->weight ?? '-' }}</td>
                        <td>{{ $m->systolic && $m->diastolic ? $m->systolic . '/' . $m->diastolic : '-' }}</td>
                        <td>{{ $m->heart_rate ?? '-' }}</td>
                        <td>{{ $m->temperature ?? '-' }}</td>
                        <td>{{ $m->spo2 ?? '-' }}</td>
                        <td>{{ $m->measured_at?->format('Y-m-d H:i') ?? '-' }}</td>
                        <td class="text-right">
                            <a href="{{ route('measurements.show', $m) }}" class="text-sky-600 dark:text-sky-400 mr-2">Ver</a>
                            <a href="{{ route('measurements.edit', $m) }}" class="text-sky-600 dark:text-sky-400 mr-2">Editar</a>
                            <form action="{{ route('measurements.destroy', $m) }}" method="POST" class="inline-block" onsubmit="return confirm('Remover?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 dark:text-red-400">Apagar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $measurements->links() }}
        </div>
    </div>
@endsection
