@extends('layouts.app')

@section('title', 'Nova medição')

@section('content')
    <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm p-6 rounded-xl shadow-lg border border-sky-100 dark:border-gray-800 max-w-lg mx-auto">
        <h1 class="text-lg font-semibold text-sky-600 dark:text-sky-400 mb-4">Nova medição</h1>

        @if($errors->any())
            <div class="p-3 mb-4 bg-red-50 dark:bg-red-900/50 text-red-700 dark:text-red-300 border border-red-100 dark:border-red-800 rounded-lg">
                <ul class="list-disc pl-5 text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('measurements.store') }}">
            @csrf

            <label class="block mb-2 text-sm">Peso (kg)</label>
            <input name="weight" value="{{ old('weight') }}" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />

            <label class="block mb-2 text-sm">Sistólica</label>
            <input name="systolic" value="{{ old('systolic') }}" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />

            <label class="block mb-2 text-sm">Diastólica</label>
            <input name="diastolic" value="{{ old('diastolic') }}" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />

            <label class="block mb-2 text-sm">Batimentos (bpm)</label>
            <input name="heart_rate" value="{{ old('heart_rate') }}" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />

            <label class="block mb-2 text-sm">Temperatura (°C)</label>
            <input name="temperature" value="{{ old('temperature') }}" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />

            <label class="block mb-2 text-sm">SpO₂ (%)</label>
            <input name="spo2" value="{{ old('spo2') }}" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />

            <label class="block mb-2 text-sm">Data da medição</label>
            <input type="datetime-local" name="measured_at" value="{{ old('measured_at') }}" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />

            <label class="block mb-2 text-sm">Notas</label>
            <textarea name="notes" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800">{{ old('notes') }}</textarea>

            <div class="text-right">
                <a href="{{ route('measurements.index') }}" class="inline-block px-3 py-2 mr-2">Cancelar</a>
                <button class="px-3 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Salvar</button>
            </div>
        </form>
    </div>
@endsection
