@extends('layouts.admin')

@section('title', 'Editar conta')

@section('content')
    <div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
        <h1 class="text-lg font-semibold text-sky-600 mb-4">Editar conta</h1>

        <form method="POST" action="{{ route('admin.users.update', $user) }}">
            @csrf
            @method('PUT')

            <label class="block mb-2 text-sm">Nome</label>
            <input name="name" value="{{ old('name', $user->name) }}" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">E-mail</label>
            <input name="email" value="{{ old('email', $user->email) }}" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">Senha (deixe em branco para manter)</label>
            <input type="password" name="password" class="w-full mb-3 p-2 border rounded" />

            <label class="block mb-2 text-sm">Confirme a senha</label>
            <input type="password" name="password_confirmation" class="w-full mb-3 p-2 border rounded" />

            <div class="text-right">
                <a href="{{ route('admin.users.index') }}" class="inline-block px-3 py-2 mr-2">Cancelar</a>
                <button class="px-3 py-2 bg-sky-600 text-white rounded">Salvar</button>
            </div>
        </form>
    </div>
@endsection
