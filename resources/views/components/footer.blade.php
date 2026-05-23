<footer class="border-t border-slate-200/80 bg-white/90 py-10 dark:border-slate-800/80 dark:bg-slate-950/90">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-3">
            <div class="space-y-3">
                <div class="inline-flex items-center gap-3 rounded-2xl bg-slate-100/90 px-4 py-3 text-sm font-semibold text-slate-900 dark:bg-slate-900/95 dark:text-slate-100">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-gradient-to-br from-sky-500 to-violet-500 text-white">T</span>
                    <span>Online Tally Counter</span>
                </div>
                <p class="max-w-sm text-sm text-slate-600 dark:text-slate-400">
                    A premium lightweight utility for quick digital counting, multiple counters, dark mode, and local browser saving.
                </p>
            </div>

            <div class="grid gap-3 sm:grid-cols-2">
                <div class="space-y-2">
                    <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-900 dark:text-slate-100">Quick Links</h3>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li><a href="#counter" class="transition hover:text-slate-900 dark:hover:text-white">Counter</a></li>
                        <li><a href="#use-cases" class="transition hover:text-slate-900 dark:hover:text-white">Use Cases</a></li>
                        <li><a href="#contact" class="transition hover:text-slate-900 dark:hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="space-y-2">
                    <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-900 dark:text-slate-100">Legal</h3>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li><a href="{{ route('disclaimer') }}" class="transition hover:text-slate-900 dark:hover:text-white">Disclaimer</a></li>
                        <li><a href="{{ route('privacy.policy') }}" class="transition hover:text-slate-900 dark:hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-10 border-t border-slate-200/80 pt-6 text-sm text-slate-500 dark:border-slate-800/80 dark:text-slate-400">
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                <p>© {{ date('Y') }} Tally Counter. Fast, free, and privacy-first.</p>
                <p>Built with Laravel, Blade, Vanilla JS, and Tailwind CSS.</p>
            </div>
        </div>
    </div>
</footer>
