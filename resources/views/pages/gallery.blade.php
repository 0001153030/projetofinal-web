@extends('layouts.app')

@section('title', 'Galeria')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-xl font-semibold text-sky-600 mb-4">Galeria</h1>
        <p class="mb-4 text-gray-700">Espaços vazios para inserir imagens do produto. Substitua os placeholders com imagens reais quando disponíveis.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="border rounded overflow-hidden">
                            <img src="{{ asset('img/placeholder.jpg') }}" alt="Espaço para imagem #{{ $i + 1 }}" class="w-full h-40 object-cover" />
                        </div>
                    @endfor
                </div>

        <div class="mt-6">
            <a href="{{ route('redirect', ['section' => 'contact']) }}" class="inline-block px-4 py-2 bg-sky-600 text-white rounded">Fale conosco</a>
        </div>
    </div>
@endsection
