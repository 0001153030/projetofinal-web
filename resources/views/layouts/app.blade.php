<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', config('app.name', 'Balança Multiuso'))</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-sky-50 text-sky-900 min-h-screen">
    <header class="bg-white shadow mb-6">
        <div class="max-w-6xl mx-auto p-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-sky-200 rounded flex items-center justify-center">BM</div>
                <div>
                    <div class="font-semibold">Balança Multiuso</div>
                    <div class="text-xs text-sky-600">Peso • Pressão • Batimentos</div>
                </div>
            </div>
            <nav class="flex items-center gap-3">
                            <a href="{{ route('redirect', ['section' => 'home']) }}" class="px-3 py-2 rounded hover:bg-sky-100">Início</a>
                            <a href="{{ route('redirect', ['section' => 'features']) }}" class="px-3 py-2 rounded hover:bg-sky-100">Funcionalidades</a>
                            <a href="{{ route('redirect', ['section' => 'gallery']) }}" class="px-3 py-2 rounded hover:bg-sky-100">Galeria</a>
                            <a href="{{ route('redirect', ['section' => 'about']) }}" class="px-3 py-2 rounded hover:bg-sky-100">Sobre</a>
                            <a href="{{ route('redirect', ['section' => 'contact']) }}" class="px-3 py-2 rounded hover:bg-sky-100">Contato</a>
                        </nav>
                        <div class="ml-4">
                        </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4">
        @yield('content')
    </main>

    <footer class="max-w-6xl mx-auto p-6 text-center text-sm text-sky-600">
        <p>© {{ date('Y') }} Balança Multiuso — Todos os direitos reservados</p>
    </footer>
</body>
</html>
