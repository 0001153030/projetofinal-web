@extends('layouts.admin')

@section('title', 'Conta')

@section('content')
    <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm p-6 rounded-xl shadow-lg border border-sky-100 dark:border-gray-800 max-w-lg mx-auto">
        <h1 class="text-lg font-semibold text-sky-600 dark:text-sky-400 mb-4">Conta #{{ $user->id }}</h1>

        <dl>
            <dt class="font-semibold">Nome</dt>
            <dd class="mb-3">{{ $user->name }}</dd>

            <dt class="font-semibold">E-mail</dt>
            <dd class="mb-3">{{ $user->email }}</dd>

            <dt class="font-semibold">Criado em</dt>
            <dd class="mb-3">{{ $user->created_at?->format('Y-m-d H:i') ?? '-' }}</dd>
        </dl>

        <div class="mt-4 text-right">
            <a href="{{ route('admin.users.edit', $user) }}" class="px-3 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Editar</a>
            <a href="{{ route('admin.users.index') }}" class="px-3 py-2 ml-2">Voltar</a>
        </div>
    </div>
@endsection
