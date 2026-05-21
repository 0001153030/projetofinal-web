@extends('layouts.admin')

@section('title', 'Nova conta')

@section('content')
    <div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
        <h1 class="text-lg font-semibold text-sky-600 mb-4">Nova conta</h1>

        @if($errors->any())
            <div class="p-3 mb-4 bg-red-50 text-red-700 border border-red-100 rounded">
                <ul class="list-disc pl-5 text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf

            <label class="block mb-2 text-sm">Nome</label>
            <input name="name" value="{{ old('name') }}" class="w-full mb-3 p-2 border rounded" />
            @error('name') <p class="text-red-600 text-sm -mt-2 mb-2">{{ $message }}</p> @enderror

            <label class="block mb-2 text-sm">E-mail</label>
            <input name="email" value="{{ old('email') }}" class="w-full mb-3 p-2 border rounded" />
            @error('email') <p class="text-red-600 text-sm -mt-2 mb-2">{{ $message }}</p> @enderror

            <label class="block mb-2 text-sm">Senha</label>
            <input type="password" name="password" class="w-full mb-3 p-2 border rounded" />
            @error('password') <p class="text-red-600 text-sm -mt-2 mb-2">{{ $message }}</p> @enderror

            <label class="block mb-2 text-sm">Confirme a senha</label>
            <input type="password" name="password_confirmation" class="w-full mb-3 p-2 border rounded" />

            <div class="text-right">
                <a href="{{ route('admin.users.index') }}" class="inline-block px-3 py-2 mr-2">Cancelar</a>
                <button class="px-3 py-2 bg-sky-600 text-white rounded">Criar conta</button>
            </div>
        </form>
    </div>
@endsection
