<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#f8fafc">
        <x-seo :seo="$seo" :schema="$schema ?? null" />

        <script src="https://analytics.ahrefs.com/analytics.js" data-key="dJYaD5rmjz7fPRsUmxNBfA" async></script>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="min-h-screen bg-stone-50 text-slate-950 antialiased dark:bg-slate-950 dark:text-white">
        <a href="#counter-tool" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-md focus:bg-white focus:px-4 focus:py-2 focus:text-slate-950 focus:shadow-lg">
            Skip to counter
        </a>

        <x-header />

        <main>
            {{ $slot }}
        </main>

        <x-footer />

        @livewireScripts
    </body>
</html>
