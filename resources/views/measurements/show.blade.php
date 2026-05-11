@extends('layouts.app')

@section('title', 'Medição')

@section('content')
    <div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
        <h1 class="text-lg font-semibold text-sky-600 mb-4">Medição #{{ $measurement->id }}</h1>

        <dl>
            <dt class="font-semibold">Peso (kg)</dt>
            <dd class="mb-3">{{ $measurement->weight ?? '-' }}</dd>

            <dt class="font-semibold">Pressão arterial</dt>
            <dd class="mb-3">{{ $measurement->systolic && $measurement->diastolic ? $measurement->systolic . '/' . $measurement->diastolic : '-' }}</dd>

            <dt class="font-semibold">Batimentos (bpm)</dt>
            <dd class="mb-3">{{ $measurement->heart_rate ?? '-' }}</dd>

            <dt class="font-semibold">Temperatura (°C)</dt>
            <dd class="mb-3">{{ $measurement->temperature ?? '-' }}</dd>

            <dt class="font-semibold">SpO₂ (%)</dt>
            <dd class="mb-3">{{ $measurement->spo2 ?? '-' }}</dd>

            <dt class="font-semibold">Data da medição</dt>
            <dd class="mb-3">{{ $measurement->measured_at?->format('Y-m-d H:i') ?? '-' }}</dd>

            <dt class="font-semibold">Notas</dt>
            <dd class="mb-3">{{ $measurement->notes ?? '-' }}</dd>
        </dl>

        <div class="mt-4 text-right">
            <a href="{{ route('measurements.edit', $measurement) }}" class="px-3 py-2 bg-sky-600 text-white rounded">Editar</a>
            <a href="{{ route('measurements.index') }}" class="px-3 py-2 ml-2">Voltar</a>
        </div>
    </div>
@endsection
