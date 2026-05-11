@extends('layouts.app')

@section('title', 'Nova medição')

@section('content')
    <div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
        <h1 class="text-lg font-semibold text-sky-600 mb-4">Nova medição</h1>

        <form method="POST" action="{{ route('measurements.store') }}">
            @csrf

            <label class="block mb-2 text-sm">Peso (kg)</label>
            <input name="weight" value="{{ old('weight') }}" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">Sistólica</label>
            <input name="systolic" value="{{ old('systolic') }}" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">Diastólica</label>
            <input name="diastolic" value="{{ old('diastolic') }}" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">Batimentos (bpm)</label>
            <input name="heart_rate" value="{{ old('heart_rate') }}" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">Temperatura (°C)</label>
            <input name="temperature" value="{{ old('temperature') }}" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">SpO₂ (%)</label>
            <input name="spo2" value="{{ old('spo2') }}" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">Data da medição</label>
            <input type="datetime-local" name="measured_at" value="{{ old('measured_at') }}" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">Notas</label>
            <textarea name="notes" class="w-full mb-3 p-2 border rounded">{{ old('notes') }}</textarea>

            <div class="text-right">
                <a href="{{ route('measurements.index') }}" class="inline-block px-3 py-2 mr-2">Cancelar</a>
                <button class="px-3 py-2 bg-sky-600 text-white rounded">Salvar</button>
            </div>
        </form>
    </div>
@endsection
