<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Admin')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
        }
        @custom-variant dark (&:where(.dark, .dark *));
        html { transition: background-color .3s ease; }
    </style>
</head>
<body class="bg-sky-50 dark:bg-gray-950 text-sky-900 dark:text-gray-100 min-h-screen transition-colors">
    <header class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md shadow-sm border-b border-sky-100 dark:border-gray-800 mb-6">
        <div class="max-w-6xl mx-auto p-4 flex items-center justify-between">
            <div class="font-semibold">Área Administrativa</div>
            <div class="flex items-center gap-3">
                <button id="theme-toggle" class="p-2 rounded-lg hover:bg-sky-100 dark:hover:bg-gray-800" aria-label="Alternar tema">
                    <svg id="sun-icon" class="w-5 h-5 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M7.05 16.95l-1.414 1.414M16.95 7.05l1.414-1.414M7.05 7.05L5.636 5.636M16.95 16.95l1.414 1.414" />
                    </svg>
                    <svg id="moon-icon" class="w-5 h-5 block dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4">
        @yield('content')
    </main>

    <script>
        const html = document.documentElement;
        const stored = localStorage.getItem('theme');
        if (stored === 'dark' || (!stored && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        }
        document.getElementById('theme-toggle').addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });
    </script>
</body>
</html>
