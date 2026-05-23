<x-layouts.app :seo="$seo" :schema="$schema">
    <section class="hero-reveal relative overflow-hidden bg-[radial-gradient(circle_at_top_left,#ccfbf1_0,#f8fafc_32%,#fff7ed_100%)] dark:bg-[radial-gradient(circle_at_top_left,#0f766e_0,#020617_34%,#111827_100%)]">
        <div class="hero-intro pointer-events-none absolute inset-0 z-10 grid place-items-center px-4 text-center" aria-hidden="true">
            <div class="hero-intro-copy max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.18em] text-teal-700 dark:text-teal-300">Fast private counting</p>
                <p class="mt-4 text-4xl font-black tracking-tight text-slate-950 sm:text-6xl dark:text-white">TapToCount</p>
                <p class="mt-6 text-lg leading-8 text-slate-700 dark:text-slate-200">
                    Use our free online tally counter to count anything instantly. Track tally marks, laps, inventory, prayers, visitors, people, fitness reps, game scores, and more with no login required.
                </p>
            </div>
        </div>

        <div class="hero-counter mx-auto max-w-6xl gap-0 px-2 py-4 sm:px-2 lg:items-center lg:py-6">
            <div class="rounded-lg border border-white/70 bg-white/72 p-4 shadow-xl shadow-teal-900/10 backdrop-blur dark:border-white/10 dark:bg-slate-900/72">
                @livewire('tally-counter')
            </div>
        </div>
    </section>

    <section id="counter-tool" class="bg-white py-14 dark:bg-slate-950">
        <div class="mx-auto max-w-6xl px-4 sm:px-6">
            <div class="max-w-3xl">
                <h1 class="text-3xl font-black tracking-tight">Free online counter built for instant taps</h1>
                <p class="mt-4 text-slate-600 dark:text-slate-300">
                    The digital tally counter above stores multiple tally counters in your browser with localStorage, so the active count remains after refresh without creating an account.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-stone-50 py-14 dark:bg-slate-900">
        <div class="mx-auto max-w-6xl px-4 sm:px-6">
            <div class="grid gap-6 lg:grid-cols-2">
                <article class="rounded-lg border border-slate-900/10 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-slate-950">
                    <h2 class="text-2xl font-bold">What is an online tally counter?</h2>
                    <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">
                        An online tally counter is a simple web counter that lets you add or subtract tally marks with taps, clicks, or keyboard shortcuts. It works like a physical clicker, but it is available instantly on desktop and mobile.
                    </p>
                </article>
                <article class="rounded-lg border border-slate-900/10 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-slate-950">
                    <h2 class="text-2xl font-bold">How does a digital tally counter work?</h2>
                    <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">
                        This digital tally counter uses Vanilla JavaScript to update the visible count immediately. Multiple counters, names, values, created dates, and updated dates are saved locally on your device.
                    </p>
                </article>
                <article class="rounded-lg border border-slate-900/10 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-slate-950">
                    <h2 class="text-2xl font-bold">Why use an online counter instead of a physical clicker?</h2>
                    <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">
                        A click counter online is always close by, easy to rename, and flexible enough for a lap counter, people counter, visitor counter, prayer counter, tap counter, or inventory tracker.
                    </p>
                </article>
                <article class="rounded-lg border border-slate-900/10 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-slate-950">
                    <h2 class="text-2xl font-bold">Benefits of a no-login tally counter</h2>
                    <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">
                        A free counter with no login is faster, more private, and easier to use. There is no account setup, no dashboard to learn, and no server sync required for everyday counting.
                    </p>
                </article>
            </div>
        </div>
    </section>

    @php
        $useCases = [
            ['Inventory count', 'Count boxes, shelves, supplies, or checked items while moving through a stock room. Rename counters for each aisle or category.'],
            ['Prayer count', 'Keep a private prayer counter on your phone or desktop with no login. Reset when a session is complete or keep long-running counts.'],
            ['Visitor counter', 'Track visitors at a door, booth, venue, or reception desk with quick tap-to-count input and large readable numbers.'],
            ['People counter', 'Count people entering rooms, buses, queues, classes, or events without carrying a separate clicker.'],
            ['Lap counter', 'Use it as a lap counter for running, swimming, cycling, model racing, or circuit training. The minus button fixes accidental taps.'],
            ['Game score counter', 'Track lightweight game scores, rounds, wins, or turns with separate counters for different players or teams.'],
            ['Fitness rep counter', 'Count reps, sets, holds, and workout rounds from any screen. Keyboard input is useful during desk exercises.'],
            ['Event attendance counter', 'Record check-ins, walk-ins, registrations, or head counts as people arrive at a venue.'],
            ['Classroom participation counter', 'Track responses, turns, points, or participation moments across lessons and small groups.'],
            ['Meditation or dhikr counter', 'Use a calm tap counter for meditation cycles, dhikr, mantras, breathing rounds, or reflection sessions.'],
            ['Stock room counting', 'Create multiple tally counters for sections, bins, product lines, or restock tasks.'],
            ['Habit tracking', 'Count daily actions such as water glasses, focus blocks, reading sessions, or practice repetitions.'],
            ['Traffic counting', 'Track vehicles, pedestrians, bikes, or crossings with a counter that works on mobile at the roadside.'],
            ['Queue counting', 'Count people waiting, served, or moved through a line during busy operations.'],
            ['Production line counting', 'Track units, batches, checks, rejects, or completed steps during a shift.'],
            ['Sports drill counter', 'Count shots, passes, sprints, rounds, or completed drills for coaching and training.'],
            ['Knitting row counter', 'Use a digital row counter for knitting, crochet, sewing, or craft repeats.'],
            ['Reading page counter', 'Track pages, chapters, study cards, or completed reading goals without opening a complex app.'],
            ['Sales lead counter', 'Count calls, demos, leads, follow-ups, or outreach attempts during sales sessions.'],
            ['Parking lot counter', 'Count occupied spaces, arriving cars, exiting cars, or available spots for lot monitoring.'],
        ];
    @endphp

    <section id="use-cases" class="bg-white py-14 dark:bg-slate-950">
        <div class="mx-auto max-w-6xl px-4 sm:px-6">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-black tracking-tight">Use cases for a free online counter</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-300">
                    This online counter no login tool fits quick personal counts and repeated operational tasks.
                </p>
            </div>
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($useCases as [$title, $body])
                    <article class="rounded-lg border border-slate-900/10 bg-stone-50 p-5 transition hover:-translate-y-1 hover:border-teal-500 hover:shadow-md dark:border-white/10 dark:bg-slate-900">
                        <h3 class="font-bold">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $body }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="about" class="bg-stone-50 py-14 dark:bg-slate-900">
        <div class="mx-auto grid max-w-6xl gap-8 px-4 sm:px-6 lg:grid-cols-[0.8fr_1fr] lg:items-center">
            <div>
                <h2 class="text-3xl font-black tracking-tight">About Us</h2>
                <p class="mt-4 leading-7 text-slate-600 dark:text-slate-300">
                    TapToCount exists to make counting feel immediate again. The tool is free because simple counting should not require an account, paid app, or overloaded dashboard.
                </p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-lg bg-white p-5 shadow-sm dark:bg-slate-950">
                    <h3 class="font-bold">Speed first</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">Counter interactions happen locally for excellent INP and a fast mobile experience.</p>
                </div>
                <div class="rounded-lg bg-white p-5 shadow-sm dark:bg-slate-950">
                    <h3 class="font-bold">Private by design</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">Your saved counter values stay in your browser localStorage unless you clear them.</p>
                </div>
                <div class="rounded-lg bg-white p-5 shadow-sm dark:bg-slate-950">
                    <h3 class="font-bold">No account</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">Open the page and start counting. No login, signup, or profile is required.</p>
                </div>
                <div class="rounded-lg bg-white p-5 shadow-sm dark:bg-slate-950">
                    <h3 class="font-bold">Any device</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">The layout is tap-friendly on phones and keyboard-friendly on desktops.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-white py-14 dark:bg-slate-950">
        <div class="mx-auto grid max-w-6xl gap-8 px-4 sm:px-6 lg:grid-cols-[0.8fr_1fr]">
            <div>
                <h2 class="text-3xl font-black tracking-tight">Contact Us</h2>
                <p class="mt-4 leading-7 text-slate-600 dark:text-slate-300">
                    Share feedback, report a problem, or suggest a counting workflow that would make the tool better.
                </p>
            </div>
            @livewire('contact-form')
        </div>
    </section>

    @php
        $faqs = [
            ['What is an online tally counter?', 'It is a web-based counter that lets you count tally marks with taps, clicks, buttons, or keyboard shortcuts.'],
            ['Is this tally counter free?', 'Yes. The online tally counter is free to use.'],
            ['Do I need to create an account?', 'No. This is a no-login counter, so you can start counting immediately.'],
            ['Can I use multiple counters?', 'Yes. You can add multiple tally counters and switch between them.'],
            ['Can I rename counters?', 'Yes. Rename the active counter for tasks like Prayer Count, Inventory Count, Lap Counter, or Visitor Count.'],
            ['Does the counter work on mobile?', 'Yes. The main count area is designed for tap-to-count on phones and tablets.'],
            ['Can I use it as a lap counter?', 'Yes. It works well as a lap counter for training, racing, or repeated rounds.'],
            ['Can I use it as a prayer counter?', 'Yes. It can be used as a private prayer counter, dhikr counter, or meditation counter.'],
            ['Is my counter data saved?', 'Counter values are saved in your browser localStorage, so they can remain after refresh on the same device.'],
            ['Can I use the counter in dark mode?', 'Yes. Use the manual theme button to switch light and dark mode.'],
        ];
    @endphp

    <section id="faq" class="bg-stone-50 py-14 dark:bg-slate-900">
        <div class="mx-auto max-w-4xl px-4 sm:px-6">
            <h2 class="text-3xl font-black tracking-tight">FAQ</h2>
            <div class="mt-8 divide-y divide-slate-900/10 overflow-hidden rounded-lg border border-slate-900/10 bg-white dark:divide-white/10 dark:border-white/10 dark:bg-slate-950">
                @foreach ($faqs as [$question, $answer])
                    <details class="group p-5">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold">
                            {{ $question }}
                            <span class="text-teal-700 transition group-open:rotate-45 dark:text-teal-300">+</span>
                        </summary>
                        <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">{{ $answer }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
