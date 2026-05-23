<header class="sticky top-0 z-40 border-b border-slate-900/10 bg-stone-50/90 backdrop-blur dark:border-white/10 dark:bg-slate-950/90">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6">
        <a href="{{ route('home') }}" class="flex items-center gap-3 font-semibold tracking-tight">
            <span class="grid size-9 place-items-center rounded-md bg-teal-600 text-sm font-black text-white shadow-sm">TT</span>
            <span>TapToCount</span>
        </a>

        <nav class="hidden items-center gap-6 text-sm text-slate-700 md:flex dark:text-slate-300" aria-label="Main navigation">
            <a class="hover:text-teal-700 dark:hover:text-teal-300" href="{{ route('home') }}#counter-tool">Counter</a>
            <a class="hover:text-teal-700 dark:hover:text-teal-300" href="{{ route('home') }}#use-cases">Use cases</a>
            <a class="hover:text-teal-700 dark:hover:text-teal-300" href="{{ route('home') }}#faq">FAQ</a>
            <a class="hover:text-teal-700 dark:hover:text-teal-300" href="{{ route('home') }}#contact">Contact</a>
        </nav>

        <button type="button" class="theme-toggle inline-flex size-10 items-center justify-center rounded-md border border-slate-900/10 bg-white text-slate-800 shadow-sm transition hover:-translate-y-0.5 hover:border-teal-500 dark:border-white/10 dark:bg-slate-900 dark:text-white" aria-label="Toggle dark mode" title="Toggle dark mode">
            <span class="theme-toggle-icon text-lg" aria-hidden="true">◐</span>
        </button>
    </div>
</header>
