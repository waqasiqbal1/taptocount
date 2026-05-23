<header class="sticky top-0 z-30 border-b border-slate-200/80 bg-white/95 backdrop-blur dark:border-slate-800/70 dark:bg-slate-950/95">
    <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-3 rounded-2xl border border-slate-200/80 bg-slate-100/80 px-4 py-2 text-sm font-semibold text-slate-900 shadow-sm transition hover:border-slate-300 dark:border-slate-700/80 dark:bg-slate-900/85 dark:text-slate-100">
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-gradient-to-br from-sky-500 to-violet-500 text-white shadow-lg shadow-sky-500/20">T</span>
            <span>Free Online Tally Counter</span>
        </a>

        <nav class="hidden items-center gap-4 text-sm font-medium text-slate-600 dark:text-slate-300 md:flex">
            <a href="#counter" class="transition hover:text-slate-900 dark:hover:text-white">Counter</a>
            <a href="#use-cases" class="transition hover:text-slate-900 dark:hover:text-white">Use Cases</a>
            <a href="#contact" class="transition hover:text-slate-900 dark:hover:text-white">Contact</a>
            <a href="{{ route('privacy.policy') }}" class="transition hover:text-slate-900 dark:hover:text-white">Privacy</a>
        </nav>

        <div class="flex items-center gap-3">
            <button id="theme-toggle" type="button" aria-label="Toggle dark mode" class="inline-flex items-center gap-2 rounded-2xl border border-slate-300/90 bg-white px-3 py-2 text-sm font-medium text-slate-700 shadow-sm transition hover:border-slate-400 hover:text-slate-900 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-200 dark:hover:border-slate-500 dark:hover:text-white">
                <span id="theme-mode-label">Dark mode</span>
            </button>
            <button type="button" class="inline-flex items-center rounded-2xl border border-slate-200 bg-slate-100 px-3 py-2 text-sm font-medium text-slate-600 shadow-sm transition hover:border-slate-300 hover:text-slate-900 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-200 dark:hover:border-slate-500 dark:hover:text-white md:hidden" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                Menu
            </button>
        </div>
    </div>
    <div id="mobile-menu" class="hidden border-t border-slate-200/80 bg-white/95 px-4 py-3 text-sm dark:border-slate-800/80 dark:bg-slate-950/95 md:hidden">
        <div class="flex flex-col gap-3 text-slate-700 dark:text-slate-200">
            <a href="#counter" class="block">Counter</a>
            <a href="#use-cases" class="block">Use Cases</a>
            <a href="#contact" class="block">Contact</a>
            <a href="{{ route('privacy.policy') }}" class="block">Privacy</a>
        </div>
    </div>
</header>
