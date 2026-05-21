@extends('layouts.app')

@section('title', 'Funcionalidades')

@section('content')
    <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm p-6 rounded-xl shadow-lg border border-sky-100 dark:border-gray-800">
        <h1 class="text-xl font-semibold text-sky-600 dark:text-sky-400 mb-4">Funcionalidades</h1>
        <p class="mb-4 text-gray-700 dark:text-gray-300">Nossa balança integra múltiplos sensores: medidor de pressão arterial, sensor de batimentos e escala de peso com alta precisão.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="p-4 border border-sky-100 dark:border-gray-700 rounded-xl bg-white/50 dark:bg-gray-800/50">
                <img src="{{ asset('img/display.jpg') }}" alt="Imagem do display" class="w-full h-40 object-cover rounded-lg" />
                <h3 class="mt-3 font-medium">Display Digital</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Tela grande para leitura imediata.</p>
            </div>

            <div class="p-4 border border-sky-100 dark:border-gray-700 rounded-xl bg-white/50 dark:bg-gray-800/50">
                <img src="{{ asset('img/pressure.jpg') }}" alt="Imagem do medidor de pressão" class="w-full h-40 object-cover rounded-lg" />
                <h3 class="mt-3 font-medium">Medidor de Pressão</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Integra manguito com leituras automáticas.</p>
            </div>

            <div class="p-4 border border-sky-100 dark:border-gray-700 rounded-xl bg-white/50 dark:bg-gray-800/50">
                <img src="{{ asset('img/heartbeat.jpg') }}" alt="Imagem do sensor de batimento" class="w-full h-40 object-cover rounded-lg" />
                <h3 class="mt-3 font-medium">Sensor de Batimentos</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Monitor cardíaco rápido e confiável.</p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('redirect', ['section' => 'gallery']) }}" class="inline-block px-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Ver mais imagens</a>
        </div>
    </div>
@endsection
