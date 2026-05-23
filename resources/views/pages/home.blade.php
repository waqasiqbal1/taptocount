@extends('layouts.app')

@section('meta')
    <x-seo
        title="Online Tally Counter – Free Digital Counter, No Login Required"
        description="Use a free online tally counter to track tally marks, laps, visitors, prayers, inventory, fitness reps, and more. No login required."
        url="{{ url()->current() }}"
    />
@endsection

@section('content')
    <section class="relative overflow-hidden px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
                <div class="space-y-6">
                    <span class="inline-flex rounded-full bg-sky-100 px-4 py-1 text-sm font-semibold text-sky-700 dark:bg-slate-800 dark:text-sky-200">Free online counter · no login required</span>
                    <h1 class="text-4xl font-semibold tracking-tight text-slate-950 dark:text-white sm:text-5xl">
                        Free Online Tally Counter
                    </h1>
                    <p class="max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">
                        Track tally marks, laps, visitors, prayers, inventory, and fitness reps instantly in a premium digital counter that runs entirely in your browser.
                    </p>
                    <div class="grid gap-4 sm:grid-cols-2 sm:items-start">
                        <div class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-[0_24px_64px_-40px_rgba(15,23,42,0.6)] dark:border-slate-800 dark:bg-slate-900/90">
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Quick actions</p>
                            <ul class="mt-5 space-y-3 text-sm text-slate-600 dark:text-slate-300">
                                <li>Tap the main screen to increase count.</li>
                                <li>Use + and - for fast changes.</li>
                                <li>Reset, rename, add, delete, and switch counters.</li>
                            </ul>
                        </div>
                        <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-sky-50 to-violet-50 p-6 shadow-[0_24px_64px_-40px_rgba(59,130,246,0.35)] dark:border-slate-800 dark:from-slate-900 dark:to-slate-950 dark:text-slate-200">
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Performance</p>
                            <p class="mt-5 text-sm leading-7 text-slate-700 dark:text-slate-300">
                                Designed for instant load, smooth interactions, and fast Core Web Vitals with minimal client-side JavaScript and localStorage persistence.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-[0_32px_64px_-32px_rgba(15,23,42,0.4)] dark:border-slate-800 dark:bg-slate-950/90">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(59,130,246,0.14),_transparent_35%),radial-gradient(circle_at_bottom_left,_rgba(167,139,250,0.15),_transparent_30%)]"></div>
                    <div class="relative space-y-5 p-8 sm:p-10">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <p class="text-sm uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Instant Access</p>
                                <h2 class="text-xl font-semibold text-slate-950 dark:text-white">Your counter loads immediately.</h2>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-semibold text-slate-700 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-200">
                                No login • No account
                            </div>
                        </div>
                        <div class="rounded-[2rem] border border-slate-200 bg-slate-950/95 p-6 text-center text-white shadow-xl dark:border-slate-700 dark:bg-slate-800/95">
                            <p class="text-sm uppercase tracking-[0.28em] text-slate-300">Real-time counter example</p>
                            <p class="mt-4 text-5xl font-semibold">0</p>
                            <p class="mt-4 text-sm leading-6 text-slate-300">Supports multiple counters, rename, reset, and dark mode.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="counter" class="bg-slate-950/95 py-16 text-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-[1.4fr_0.9fr] lg:items-start">
                <div class="space-y-6 rounded-[2rem] border border-slate-800 bg-slate-950/95 p-6 shadow-[0_24px_70px_-35px_rgba(0,0,0,0.5)] sm:p-8">
                    <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
                        <div>
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Interactive Counter</p>
                            <h2 class="mt-2 text-3xl font-semibold text-white">Tap to count with keyboard shortcuts.</h2>
                        </div>
                        <div class="rounded-3xl bg-slate-800/75 px-4 py-3 text-sm text-slate-300">
                            Space / Enter = +, - / Backspace = −, R = reset
                        </div>
                    </div>

                    <div class="rounded-[2rem] border border-slate-800 bg-gradient-to-br from-slate-900 to-slate-950 p-6 shadow-xl shadow-slate-900/40">
                        <div class="grid gap-6">
                            <div class="rounded-[1.75rem] border border-slate-800 bg-slate-950 px-6 py-8 text-center shadow-[0_24px_50px_-28px_rgba(15,23,42,0.8)]">
                                <p class="text-sm uppercase tracking-[0.25em] text-slate-500">Active counter</p>
                                <p id="counterName" class="mt-3 text-2xl font-semibold text-white">Main Counter</p>
                                <p id="counterValue" class="mt-8 text-[5rem] font-black leading-none text-white">0</p>
                                <button id="tapArea" type="button" class="mt-8 inline-flex w-full items-center justify-center rounded-3xl bg-white/10 px-6 py-4 text-lg font-semibold text-white shadow-[0_18px_60px_-30px_rgba(255,255,255,0.65)] transition hover:bg-white/15 focus:outline-none focus:ring-2 focus:ring-sky-400/60" aria-label="Tap to count">
                                    Tap the screen to increase
                                </button>
                            </div>

                            <div class="grid gap-3 sm:grid-cols-3">
                                <button id="decreaseButton" type="button" class="rounded-3xl border border-slate-700 bg-slate-900 px-5 py-4 text-lg font-semibold text-slate-200 transition hover:border-slate-500 hover:text-white">- Decrease</button>
                                <button id="resetButton" type="button" class="rounded-3xl border border-slate-700 bg-slate-900 px-5 py-4 text-lg font-semibold text-slate-200 transition hover:border-rose-400 hover:text-white">Reset</button>
                                <button id="increaseButton" type="button" class="rounded-3xl border border-slate-700 bg-slate-900 px-5 py-4 text-lg font-semibold text-slate-200 transition hover:border-sky-400 hover:text-white">+ Increase</button>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="space-y-3 rounded-3xl border border-slate-800 bg-slate-950/90 p-4">
                                    <label for="renameCounterInput" class="block text-sm font-medium text-slate-400">Rename counter</label>
                                    <div class="flex gap-3">
                                        <input id="renameCounterInput" type="text" class="min-w-0 flex-1 rounded-2xl border border-slate-700 bg-slate-900/95 px-4 py-3 text-white placeholder:text-slate-500 focus:border-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-400/20" placeholder="Enter a name" />
                                        <button id="renameButton" type="button" class="rounded-2xl bg-sky-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-sky-400">Save</button>
                                    </div>
                                </div>
                                <div class="space-y-3 rounded-3xl border border-slate-800 bg-slate-950/90 p-4">
                                    <label for="counterSelect" class="block text-sm font-medium text-slate-400">Switch counter</label>
                                    <select id="counterSelect" class="w-full rounded-2xl border border-slate-700 bg-slate-900/95 px-4 py-3 text-white focus:border-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-400/20"></select>
                                </div>
                            </div>

                            <div class="grid gap-3 sm:grid-cols-2">
                                <button id="addCounterButton" type="button" class="rounded-3xl bg-slate-700 px-5 py-4 text-base font-semibold text-white transition hover:bg-slate-600">Add counter</button>
                                <button id="deleteCounterButton" type="button" class="rounded-3xl bg-rose-600 px-5 py-4 text-base font-semibold text-white transition hover:bg-rose-500">Delete counter</button>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="space-y-6 rounded-[2rem] border border-slate-800 bg-slate-900/95 p-6 shadow-[0_24px_50px_-30px_rgba(0,0,0,0.45)] sm:p-8">
                    <div class="rounded-3xl border border-slate-800 bg-slate-950/95 p-6">
                        <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Save locally</p>
                        <p class="mt-4 text-sm leading-7 text-slate-300">Your counters are stored in localStorage so your active counter and history are kept in the same browser without any account.</p>
                    </div>
                    <div class="grid gap-4">
                        <div class="rounded-3xl border border-slate-800 bg-slate-950/95 p-6">
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Why use it</p>
                            <ul class="mt-4 space-y-2 text-sm text-slate-300">
                                <li>Fast count changes without page reload.</li>
                                <li>Desktop and mobile friendly.</li>
                                <li>Premium minimalist design.</li>
                            </ul>
                        </div>
                        <div class="rounded-3xl border border-slate-800 bg-slate-950/95 p-6">
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Tip</p>
                            <p class="mt-4 text-sm leading-7 text-slate-300">Press Space or Enter to increase, - or Backspace to decrease, and R to reset the active tally.</p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="grid gap-10 lg:grid-cols-3 lg:items-start">
                <div class="space-y-4">
                    <p class="text-sm uppercase tracking-[0.3em] text-sky-600">SEO content</p>
                    <h2 class="text-3xl font-semibold text-slate-950 dark:text-white">A clean digital tally counter with premium UX.</h2>
                    <p class="text-lg leading-8 text-slate-600 dark:text-slate-300">Everything is built for speed and clarity: no heavy frameworks, no login, and no server calls during counting.</p>
                </div>
                <div class="space-y-6 rounded-3xl border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white">What is an online tally counter?</h3>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">An online tally counter is a browser-based counter for tracking increments and decrements digitally. It replaces physical tally marks with a fast, touch-friendly interface.</p>
                </div>
                <div class="space-y-6 rounded-3xl border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white">How does a digital tally counter work?</h3>
                    <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">This counter stores data in localStorage and updates the screen instantly with vanilla JavaScript. It works offline once the page has loaded and remains fast for mobile and desktop.</p>
                </div>
            </div>

            <div class="mt-10 grid gap-6 lg:grid-cols-3">
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Why use online instead of physical?</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">Online counters are easier to reset, rename, and view than physical clickers. They are cleaner for repeated use and store numbers safely in your browser.</p>
                </div>
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Benefits of no-login counting</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">No login means no accounts to manage, no passwords to remember, and less personal data collected. Your counters stay private and browser-local.</p>
                </div>
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Built for SEO and speed</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">Semantic HTML, a fast Laravel backend, and lightweight Tailwind CSS ensure the page loads quickly and performs well for Core Web Vitals.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="use-cases" class="bg-slate-950 py-16 text-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-8 text-center">
                <p class="text-sm uppercase tracking-[0.3em] text-sky-400">Use cases</p>
                <h2 class="mt-3 text-3xl font-semibold">Perfect for every tally need</h2>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach([
                    'Inventory count', 'Prayer count', 'Visitor counter', 'People counter',
                    'Game counter', 'Fitness rep counter', 'Lap counter', 'Event attendance counter',
                    'Classroom participation counter', 'Meditation or dhikr counter', 'Stock room counting', 'Habit tracking',
                    'Traffic counting', 'Queue counting', 'Production line counting', 'Sports drill counter',
                    'Knitting row counter', 'Reading page counter', 'Sales lead counter', 'Parking lot counter'
                ] as $useCase)
                    <div class="rounded-3xl border border-slate-800 bg-slate-900/95 p-5 shadow-lg shadow-slate-950/40 hover:-translate-y-1 transition">
                        <p class="text-sm uppercase tracking-[0.25em] text-slate-500">Use case</p>
                        <h3 class="mt-3 text-lg font-semibold text-white">{{ $useCase }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
                <div class="space-y-6">
                    <p class="text-sm uppercase tracking-[0.3em] text-sky-600">About us</p>
                    <h2 class="text-3xl font-semibold text-slate-950 dark:text-white">Purpose-built for fast counting.</h2>
                    <p class="text-lg leading-8 text-slate-600 dark:text-slate-300">We made this tool to help anyone count laps, visitors, prayers, inventory, or reps without installing anything or signing up. It is privacy-first, responsive, and accessible.</p>
                    <ul class="grid gap-3 text-sm text-slate-600 dark:text-slate-300">
                        <li>Free access for everyone.</li>
                        <li>No tracking or account required.</li>
                        <li>Works on desktop and mobile instantly.</li>
                    </ul>
                </div>
                <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h3 class="text-xl font-semibold text-slate-950 dark:text-white">Privacy-first design</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">Your counters remain in your browser. The app does not store any personal data on the server and does not require login credentials.</p>
                    <div class="mt-8 space-y-4 rounded-3xl bg-slate-50 p-6 dark:bg-slate-900">
                        <div>
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Free access</p>
                            <p class="mt-2 text-sm leading-7 text-slate-600 dark:text-slate-300">Use the app anytime at no cost.</p>
                        </div>
                        <div>
                            <p class="text-sm uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">No account</p>
                            <p class="mt-2 text-sm leading-7 text-slate-600 dark:text-slate-300">Open directly and start counting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-slate-950 py-16 text-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl space-y-6 text-center">
                <p class="text-sm uppercase tracking-[0.3em] text-sky-400">Contact us</p>
                <h2 class="text-3xl font-semibold">Send a message for support or feedback.</h2>
                <p class="text-sm leading-7 text-slate-400">Use the form below to tell us what you want to see next or ask questions about the tally counter.</p>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST" class="mx-auto mt-10 max-w-3xl space-y-6 rounded-[2rem] border border-slate-800 bg-slate-900/95 p-8 shadow-[0_32px_84px_-44px_rgba(0,0,0,0.6)]">
                @csrf
                @if (session('contactSuccess'))
                    <div class="rounded-3xl border border-emerald-500/30 bg-emerald-500/10 p-4 text-sm text-emerald-200">
                        {{ session('contactSuccess') }}
                    </div>
                @endif
                <div class="grid gap-6 sm:grid-cols-2">
                    <label class="space-y-2 text-sm text-slate-300">
                        <span class="font-semibold">Name</span>
                        <input name="name" type="text" value="{{ old('name') }}" required class="w-full rounded-2xl border border-slate-700 bg-slate-900/95 px-4 py-3 text-white focus:border-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-400/20" placeholder="Your name" />
                        @error('name')<span class="text-sm text-rose-300">{{ $message }}</span>@enderror
                    </label>
                    <label class="space-y-2 text-sm text-slate-300">
                        <span class="font-semibold">Email</span>
                        <input name="email" type="email" value="{{ old('email') }}" required class="w-full rounded-2xl border border-slate-700 bg-slate-900/95 px-4 py-3 text-white focus:border-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-400/20" placeholder="you@example.com" />
                        @error('email')<span class="text-sm text-rose-300">{{ $message }}</span>@enderror
                    </label>
                </div>
                <label class="space-y-2 text-sm text-slate-300">
                    <span class="font-semibold">Message</span>
                    <textarea name="message" rows="5" required class="w-full rounded-3xl border border-slate-700 bg-slate-900/95 px-4 py-4 text-white focus:border-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-400/20" placeholder="Describe your question or feedback">{{ old('message') }}</textarea>
                    @error('message')<span class="text-sm text-rose-300">{{ $message }}</span>@enderror
                </label>
                <button type="submit" class="inline-flex w-full items-center justify-center rounded-3xl bg-sky-500 px-6 py-4 text-base font-semibold text-white transition hover:bg-sky-400">Send message</button>
            </form>
        </div>
    </section>

    <section class="px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="text-center">
                <p class="text-sm uppercase tracking-[0.3em] text-sky-600">FAQ</p>
                <h2 class="mt-3 text-3xl font-semibold text-slate-950 dark:text-white">Frequently asked questions</h2>
            </div>
            <div class="mt-10 grid gap-6 lg:grid-cols-2">
                @foreach([
                    ['question' => 'What is an online tally counter?', 'answer' => 'It is a browser-based tool for counting items, reps, laps, visitors, or prayer recitations without physical tally marks.'],
                    ['question' => 'Is this tally counter free?', 'answer' => 'Yes — the tool is free to use and does not require payment or registration.'],
                    ['question' => 'Do I need to log in?', 'answer' => 'No login is required. Your counters are saved locally in your browser.'],
                    ['question' => 'Can I use multiple counters?', 'answer' => 'Yes — add and switch between multiple counters, then delete the ones you no longer need.'],
                    ['question' => 'Can I rename counters?', 'answer' => 'Yes — rename the active counter anytime and the change is saved in localStorage.'],
                    ['question' => 'Does it work on mobile?', 'answer' => 'Absolutely — the interface is tap-friendly and optimized for mobile screens.'],
                    ['question' => 'Is my counter saved?', 'answer' => 'Counters are saved locally in your browser using localStorage. They persist when you return on the same device and browser.'],
                    ['question' => 'Can I use it as a lap counter?', 'answer' => 'Yes — create a counter for laps and use + or tap to increment lap counts.'],
                    ['question' => 'Can I use it as a prayer counter?', 'answer' => 'Yes — it is ideal for prayer counts, dhikr, habit tracking, and inventory checks.'],
                    ['question' => 'Does dark mode work?', 'answer' => 'Yes — dark mode is stored in your browser and works across future visits on the same device.'],
                ] as $faq)
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-lg font-semibold text-slate-950 dark:text-white">{{ $faq['question'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300">{{ $faq['answer'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
