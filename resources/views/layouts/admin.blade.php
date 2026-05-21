<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Admin')</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-sky-50 text-sky-900 min-h-screen">
    <header class="bg-white shadow mb-6">
        <div class="max-w-6xl mx-auto p-4 flex items-center justify-between">
            <div class="font-semibold">Área Administrativa</div>
            <div>
                {{-- Admin area has no logout route when using HTTP Basic auth. Close the browser to clear credentials. --}}
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4">
        @yield('content')
    </main>
</body>
</html>
