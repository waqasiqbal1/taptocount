<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
        <meta name="theme-color" content="#0f172a" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>{{ $metaTitle ?? config('app.name', 'Tally Counter') }}</title>

        <script>
            (function () {
                try {
                    const stored = localStorage.getItem('tallyTheme');
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    const useDark = stored === 'dark' || (!stored && prefersDark);
                    document.documentElement.classList.toggle('dark', useDark);
                } catch (error) {
                    console.warn('Theme initialization failed', error);
                }
            })();
        </script>

        @yield('meta')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100 antialiased">
        @include('components.header')
        <main class="relative overflow-hidden">
            @yield('content')
        </main>
        @include('components.footer')
    </body>
</html>
