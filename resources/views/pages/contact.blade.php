@extends('layouts.app')

@section('title', 'Contato')

@section('content')
    <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm p-6 rounded-xl shadow-lg border border-sky-100 dark:border-gray-800 max-w-md mx-auto">
        <h1 class="text-xl font-semibold text-sky-600 dark:text-sky-400 mb-4">Contato</h1>
        <p class="mb-4 text-gray-700 dark:text-gray-300">Preencha o formulário e entraremos em contato em breve.</p>

        <form>
            <label class="block mb-2 text-sm">Nome</label>
            <input class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 placeholder-gray-400 dark:placeholder-gray-500" placeholder="Seu nome" />

            <label class="block mb-2 text-sm">E-mail</label>
            <input class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 placeholder-gray-400 dark:placeholder-gray-500" placeholder="you@example.com" />

            <label class="block mb-2 text-sm">Mensagem</label>
            <textarea class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 placeholder-gray-400 dark:placeholder-gray-500" rows="4" placeholder="Como podemos ajudar?"></textarea>

            <div class="text-right">
                <button type="button" class="px-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Enviar</button>
            </div>
        </form>
    </div>
@endsection
