@extends('layouts.app')

@section('title', 'Galeria')

@section('content')
    <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm p-6 rounded-xl shadow-lg border border-sky-100 dark:border-gray-800">
        <h1 class="text-xl font-semibold text-sky-600 dark:text-sky-400 mb-4">Galeria</h1>
        <p class="mb-4 text-gray-700 dark:text-gray-300">Espaços vazios para inserir imagens do produto. Substitua os placeholders com imagens reais quando disponíveis.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @for ($i = 0; $i < 6; $i++)
                <div class="border border-sky-100 dark:border-gray-700 rounded-xl overflow-hidden bg-white/50 dark:bg-gray-800/50">
                    <img src="{{ asset('img/placeholder.jpg') }}" alt="Espaço para imagem #{{ $i + 1 }}" class="w-full h-40 object-cover" />
                </div>
            @endfor
        </div>

        <div class="mt-6">
            <a href="{{ route('redirect', ['section' => 'contact']) }}" class="inline-block px-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Fale conosco</a>
        </div>
    </div>
@endsection
