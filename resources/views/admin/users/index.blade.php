@extends('layouts.admin')

@section('title', 'Contas')

@section('content')
    <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm p-6 rounded-xl shadow-lg border border-sky-100 dark:border-gray-800">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-lg font-semibold text-sky-600 dark:text-sky-400">Contas</h1>
            <a href="{{ route('admin.users.create') }}" class="px-3 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700">Nova conta</a>
        </div>

        @if(session('success'))
            <div class="p-3 mb-4 bg-green-50 dark:bg-green-900/50 text-green-700 dark:text-green-300 border border-green-100 dark:border-green-800 rounded-lg">{{ session('success') }}</div>
        @endif

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="text-left text-sm text-gray-600 dark:text-gray-400 border-b border-sky-100 dark:border-gray-700">
                    <th class="py-2">ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="border-b border-sky-100 dark:border-gray-800">
                        <td class="py-2">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-right">
                            <a href="{{ route('admin.users.show', $user) }}" class="text-sky-600 dark:text-sky-400 mr-2">Ver</a>
                            <a href="{{ route('admin.users.edit', $user) }}" class="text-sky-600 dark:text-sky-400 mr-2">Editar</a>
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline-block" onsubmit="return confirm('Remover?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 dark:text-red-400">Apagar</button>
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
