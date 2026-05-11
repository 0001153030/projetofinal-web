@extends('layouts.app')

@section('title', 'Contas')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-lg font-semibold text-sky-600">Contas</h1>
            <a href="{{ route('users.create') }}" class="px-3 py-2 bg-sky-600 text-white rounded">Nova conta</a>
        </div>

        @if(session('success'))
            <div class="p-3 mb-4 bg-green-50 text-green-700 border border-green-100 rounded">{{ session('success') }}</div>
        @endif

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="text-left text-sm text-gray-600 border-b">
                    <th class="py-2">ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="border-b">
                        <td class="py-2">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-right">
                            <a href="{{ route('users.show', $user) }}" class="text-sky-600 mr-2">Ver</a>
                            <a href="{{ route('users.edit', $user) }}" class="text-sky-600 mr-2">Editar</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline-block" onsubmit="return confirm('Remover?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">Apagar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
@endsection
