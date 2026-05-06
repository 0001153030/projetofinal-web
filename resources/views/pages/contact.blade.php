@extends('layouts.app')

@section('title', 'Contato')

@section('content')
    <div class="bg-white p-6 rounded shadow max-w-md mx-auto">
        <h1 class="text-xl font-semibold text-sky-600 mb-4">Contato</h1>
        <p class="mb-4 text-gray-700">Preencha o formulário e entraremos em contato em breve.</p>

        <form>
            <label class="block mb-2 text-sm">Nome</label>
            <input class="w-full mb-3 p-2 border rounded" placeholder="Seu nome" />

            <label class="block mb-2 text-sm">E-mail</label>
            <input class="w-full mb-3 p-2 border rounded" placeholder="you@example.com" />

            <label class="block mb-2 text-sm">Mensagem</label>
            <textarea class="w-full mb-3 p-2 border rounded" rows="4" placeholder="Como podemos ajudar?"></textarea>

            <div class="text-right">
                <button type="button" class="px-4 py-2 bg-sky-600 text-white rounded">Enviar</button>
            </div>
        </form>
    </div>
@endsection
