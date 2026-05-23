<section class="tally-counter" aria-label="Interactive tally counter">
    <div class="flex flex-wrap items-center justify-between gap-3">
        <div class="">
            <button type="button" class="tally-counter-info rounded-md bg-slate-950 px-3 py-2 text-sm font-semibold text-white transition hover:-translate-y-0.5 dark:bg-white dark:text-slate-950" aria-label="About TapToCount" aria-haspopup="dialog">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
            </button>

            <button type="button" class="tally-counter-settings rounded-md bg-slate-950 px-3 py-2 text-sm font-semibold text-white transition hover:-translate-y-0.5 dark:bg-white dark:text-slate-950" aria-label="Counter settings" aria-haspopup="dialog">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
            </button>

            <button type="button" class="tally-delete-counter rounded-md bg-slate-950 px-3 py-2 text-sm font-semibold text-white transition hover:-translate-y-0.5 dark:bg-white dark:text-slate-950">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>
        </div>

        <div class="flex items-center gap-2">
            <button type="button" class="tally-sound-toggle icon-button" aria-label="Toggle sound feedback" title="Toggle sound feedback">♪</button>
            <button type="button" class="tally-add-counter rounded-md bg-slate-950 px-3 py-2 text-sm font-semibold text-white transition hover:-translate-y-0.5 dark:bg-white dark:text-slate-950">New</button>
        </div>
    </div>

    {{-- 
    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-teal-700 dark:text-teal-300">Live counter</p>

    <h1 class="mt-1 text-xl font-black tracking-tight">Tap to count</h1>
    --}}
    <div class="tally-pills mt-4 flex gap-2 overflow-x-auto pb-1" aria-label="Counter selector"></div>

    <div class="mt-4">
        <div class="relative">            
            <input id="counter-name" type="text" class="tally-name mt-2 w-full rounded-md border-b focus:outline-hidden focus:border-slate-900/10 bg-white px-4 py-3 text-base font-semibold text-slate-950 focus:shadow-sm outline-hidden transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/15 dark:border-white/10 dark:bg-slate-900 dark:text-white" maxlength="64" autocomplete="off">
        </div>

    </div>

    <button type="button" class="tally-tap-area mt-4 grid min-h-[220px] w-full place-items-center rounded-lg border border-teal-600/20 bg-gradient-to-br from-teal-50 via-white to-amber-50 p-6 text-center shadow-inner transition active:scale-[0.99] dark:from-slate-900 dark:via-slate-950 dark:to-teal-950/60" aria-label="Tap anywhere in this area to increase the active counter">
        <span class="block">
            <span class="tally-active-name block text-sm font-semibold uppercase tracking-[0.16em] text-teal-700 dark:text-teal-300">Counter</span>
            <span class="tally-value block min-h-[7rem] text-[clamp(4.75rem,18vw,8rem)] font-black leading-none tracking-normal text-slate-950 tabular-nums dark:text-white">0</span>
        </span>
    </button>

    <div class="mt-4 grid grid-cols-3 justify-items-center gap-3">
        <button type="button" class="tally-decrement control-button 
            inline-flex
            text-black/80 dark:text-white/80 
            w-18 h-14
            outline-1 focus:outline-2 
            outline-black/20 dark:outline-white/20 
            focus:outline-offset-2 focus:outline-black/30 dark:focus:outline-white/30
            bg-neutral-secondary-medium hover:bg-neutral-secondary-dark
            items-center justify-center
            font-medium leading-5 rounded-full px-4 py-2.5" 
            aria-label="Decrease counter">
            
            
            
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
            </svg>
        </button>
        
        <button type="button" class="tally-reset control-button 
            inline-flex
            text-black/80 dark:text-white/80 
            w-18 h-14
            outline-none focus:outline-2 
            outline-teal-600/20 dark:outline-teal-600/20 
            focus:outline-offset-2 focus:outline-teal-600/30 dark:focus:outline-teal-600/30
            items-center justify-center
            font-medium  rounded-full px-4 py-2.5
            shadow-none focus:shadow-[0_10px_24px_rgb(15_23_42_/_%0.08)] hover:shadow-[0_10px_24px_rgb(15_23_42_/_%0.08)]
            bg-neutral-secondary-medium hover:bg-neutral-secondary-dark">
            
            
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>  
        </button>

        <button type="button" class="tally-increment control-button 
            inline-flex
            text-black/80 dark:text-white/80 
            w-18 h-14
            outline-1 focus:outline-2 
            outline-teal-600/20 dark:outline-teal-600/20 
            focus:outline-offset-2 focus:outline-teal-600/30 dark:focus:outline-teal-600/30
            items-center justify-center
            font-medium leading-5 rounded-full px-4 py-2.5
            bg-teal-700 text-white hover:bg-teal-800" 
            aria-label="Increase counter">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
    </div>

    <p class="mt-4 text-xs leading-5 text-slate-500 dark:text-slate-400">
        Saved locally in this browser. No login required.
    </p>

    <div class="tally-info-modal fixed inset-0 z-50 grid place-items-center bg-slate-950/60 px-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="tally-info-title" hidden>
        <div class="tally-info-panel w-full max-w-md rounded-lg border border-slate-900/10 bg-white p-6 text-slate-950 shadow-2xl dark:border-white/10 dark:bg-slate-950 dark:text-white">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-teal-700 dark:text-teal-300">About</p>
                    <h2 id="tally-info-title" class="mt-2 text-2xl font-black tracking-tight">TapToCount</h2>
                </div>
                <button type="button" class="tally-info-close icon-button" aria-label="Close about dialog">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <p class="mt-4 leading-7 text-slate-600 dark:text-slate-300">
                TapToCount is a fast, private tally counter for everyday counting. Create multiple counters, rename them, and keep your values saved locally in this browser without creating an account.
            </p>

            <div class="mt-6 flex flex-wrap gap-3">
                <a href="#contact" class="tally-info-support rounded-md bg-teal-700 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-teal-800">Support me</a>
                <button type="button" class="tally-info-close rounded-md border border-slate-900/10 bg-white px-5 py-3 text-sm font-semibold text-slate-900 shadow-sm transition hover:-translate-y-0.5 dark:border-white/10 dark:bg-slate-900 dark:text-white">Close</button>
            </div>
        </div>
    </div>

    <div class="tally-settings-modal fixed inset-0 z-50 grid place-items-center bg-slate-950/60 px-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="tally-settings-title" hidden>
        <form class="tally-settings-panel w-full max-w-md rounded-lg border border-slate-900/10 bg-white p-6 text-slate-950 shadow-2xl dark:border-white/10 dark:bg-slate-950 dark:text-white">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-teal-700 dark:text-teal-300">Settings</p>
                    <h2 id="tally-settings-title" class="mt-2 text-2xl font-black tracking-tight">Counter settings</h2>
                </div>
                <button type="button" class="tally-settings-close icon-button" aria-label="Close settings dialog">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="mt-6 grid gap-5">
                <label class="grid gap-2">
                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Start value</span>
                    <input type="number" class="tally-start-value rounded-md border border-slate-900/10 bg-white px-4 py-3 text-base font-semibold text-slate-950 shadow-sm outline-none transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/15 dark:border-white/10 dark:bg-slate-900 dark:text-white" step="1">
                </label>

                <label class="flex items-center justify-between gap-4 rounded-md border border-slate-900/10 bg-stone-50 px-4 py-3 dark:border-white/10 dark:bg-slate-900">
                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Counter limit</span>
                    <input type="checkbox" class="tally-limit-enabled size-5 rounded border-slate-300 text-teal-700 focus:ring-teal-500">
                </label>

                <label class="tally-limit-fields grid gap-2">
                    <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Limit value</span>
                    <input type="number" class="tally-limit-value rounded-md border border-slate-900/10 bg-white px-4 py-3 text-base font-semibold text-slate-950 shadow-sm outline-none transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/15 dark:border-white/10 dark:bg-slate-900 dark:text-white" step="1">
                </label>
            </div>

            <p class="mt-4 text-xs leading-5 text-slate-500 dark:text-slate-400">
                Settings are saved locally for the selected counter.
            </p>

            <div class="mt-6 flex flex-wrap gap-3">
                <button type="submit" class="rounded-md bg-teal-700 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-teal-800">Save settings</button>
                <button type="button" class="tally-settings-close rounded-md border border-slate-900/10 bg-white px-5 py-3 text-sm font-semibold text-slate-900 shadow-sm transition hover:-translate-y-0.5 dark:border-white/10 dark:bg-slate-900 dark:text-white">Cancel</button>
            </div>
        </form>
    </div>
</section>
