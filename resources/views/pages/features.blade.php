@extends('layouts.app')

@section('title', 'Funcionalidades')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-xl font-semibold text-sky-600 mb-4">Funcionalidades</h1>
        <p class="mb-4 text-gray-700">Nossa balança integra múltiplos sensores: medidor de pressão arterial, sensor de batimentos e escala de peso com alta precisão.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="p-4 border rounded">
                            <img src="{{ asset('img/display.jpg') }}" alt="Imagem do display" class="w-full h-40 object-cover" />
                            <h3 class="mt-3 font-medium">Display Digital</h3>
                            <p class="text-sm text-gray-600">Tela grande para leitura imediata.</p>
                        </div>

            <div class="p-4 border rounded">
                            <img src="{{ asset('img/pressure.jpg') }}" alt="Imagem do medidor de pressão" class="w-full h-40 object-cover" />
                            <h3 class="mt-3 font-medium">Medidor de Pressão</h3>
                            <p class="text-sm text-gray-600">Integra manguito com leituras automáticas.</p>
                        </div>

            <div class="p-4 border rounded">
                            <img src="{{ asset('img/heartbeat.jpg') }}" alt="Imagem do sensor de batimento" class="w-full h-40 object-cover" />
                            <h3 class="mt-3 font-medium">Sensor de Batimentos</h3>
                            <p class="text-sm text-gray-600">Monitor cardíaco rápido e confiável.</p>
                        </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('redirect', ['section' => 'gallery']) }}" class="inline-block px-4 py-2 bg-sky-600 text-white rounded">Ver mais imagens</a>
        </div>
    </div>
@endsection
