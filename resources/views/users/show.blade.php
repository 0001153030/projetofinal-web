@extends('layouts.app')

@section('title', 'Conta')

@section('content')
    <div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
        <h1 class="text-lg font-semibold text-sky-600 mb-4">Conta #{{ $user->id }}</h1>

        <dl>
            <dt class="font-semibold">Nome</dt>
            <dd class="mb-3">{{ $user->name }}</dd>

            <dt class="font-semibold">E-mail</dt>
            <dd class="mb-3">{{ $user->email }}</dd>

            <dt class="font-semibold">Criado em</dt>
            <dd class="mb-3">{{ $user->created_at?->format('Y-m-d H:i') ?? '-' }}</dd>
        </dl>

        <div class="mt-4 text-right">
            <a href="{{ route('users.edit', $user) }}" class="px-3 py-2 bg-sky-600 text-white rounded">Editar</a>
            <a href="{{ route('users.index') }}" class="px-3 py-2 ml-2">Voltar</a>
        </div>
    </div>
@endsection
