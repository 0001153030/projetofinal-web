<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin — Login</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-sky-50 text-sky-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-sm bg-white p-6 rounded shadow">
        <h1 class="text-xl font-semibold mb-4">Área Administrativa</h1>

        @if($errors->any())
            <div class="mb-4 text-red-600">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-sm">Senha administrativa</label>
                <input type="password" name="password" class="w-full border rounded px-3 py-2" required autofocus />
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="px-4 py-2 bg-sky-600 text-white rounded">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>
