@extends('layouts.admin')

@section('title', 'Editar conta')

@section('content')
    <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm p-6 rounded-xl shadow-lg border border-sky-100 dark:border-gray-800 max-w-lg mx-auto">
        <h1 class="text-lg font-semibold text-sky-600 dark:text-sky-400 mb-4">Editar conta</h1>

        @if($errors->any())
            <div class="p-3 mb-4 bg-red-50 dark:bg-red-900/50 text-red-700 dark:text-red-300 border border-red-100 dark:border-red-800 rounded-lg">
                <ul class="list-disc pl-5 text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.users.update', $user) }}">
            @csrf
            @method('PUT')

            <label class="block mb-2 text-sm">Nome</label>
            <input name="name" value="{{ old('name', $user->name) }}" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />
            @error('name') <p class="text-red-600 dark:text-red-400 text-sm -mt-2 mb-2">{{ $message }}</p> @enderror

            <label class="block mb-2 text-sm">E-mail</label>
            <input name="email" value="{{ old('email', $user->email) }}" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />
            @error('email') <p class="text-red-600 dark:text-red-400 text-sm -mt-2 mb-2">{{ $message }}</p> @enderror

            <label class="block mb-2 text-sm">Senha (deixe em branco para manter)</label>
            <input type="password" name="password" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />
            @error('password') <p class="text-red-600 dark:text-red-400 text-sm -mt-2 mb-2">{{ $message }}</p> @enderror

            <label class="block mb-2 text-sm">Confirme a senha</label>
            <input type="password" name="password_confirmation" class="w-full mb-3 p-2 border border-sky-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800" />

            <div class="text-right">
                <a href="{{ route('admin.users.index') }}" class="inline-block px-3 py-2 mr-2">Cancelar</a>
                <button class="px-3 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Salvar</button>
            </div>
        </form>
    </div>
@endsection
