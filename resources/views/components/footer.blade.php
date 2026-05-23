<footer class="border-t border-slate-900/10 bg-white dark:border-white/10 dark:bg-slate-950">
    <div class="mx-auto grid max-w-6xl gap-8 px-4 py-10 sm:px-6 md:grid-cols-[1.4fr_1fr_1fr_1fr]">
        <div>
            <div class="flex items-center gap-3 font-semibold">
                <span class="grid size-9 place-items-center rounded-md bg-teal-600 text-sm font-black text-white">TT</span>
                <span>TapToCount</span>
            </div>
            <p class="mt-4 max-w-sm text-sm leading-6 text-slate-600 dark:text-slate-300">
                A fast, private, no-login online tally counter for tally marks, laps, visitors, prayers, inventory, and everyday counting.
            </p>
        </div>

        <div>
            <h2 class="text-sm font-semibold">Quick Links</h2>
            <div class="mt-4 grid gap-2 text-sm text-slate-600 dark:text-slate-300">
                <a href="{{ route('home') }}#counter-tool">Counter tool</a>
                <a href="{{ route('home') }}#about">About us</a>
                <a href="{{ route('home') }}#contact">Contact</a>
            </div>
        </div>

        <div>
            <h2 class="text-sm font-semibold">Tool Links</h2>
            <div class="mt-4 grid gap-2 text-sm text-slate-600 dark:text-slate-300">
                <a href="{{ route('home') }}#use-cases">Lap counter</a>
                <a href="{{ route('home') }}#use-cases">Prayer counter</a>
                <a href="{{ route('home') }}#use-cases">People counter</a>
            </div>
        </div>

        <div>
            <h2 class="text-sm font-semibold">Legal</h2>
            <div class="mt-4 grid gap-2 text-sm text-slate-600 dark:text-slate-300">
                <a href="{{ route('privacy') }}">Privacy policy</a>
                <a href="{{ route('disclaimer') }}">Disclaimer</a>
            </div>
        </div>
    </div>
    <div class="border-t border-slate-900/10 px-4 py-5 text-center text-xs text-slate-500 dark:border-white/10 dark:text-slate-400">
        Copyright {{ date('Y') }} TapToCount. All rights reserved.
    </div>
</footer>
