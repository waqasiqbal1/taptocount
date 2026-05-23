@extends('layouts.app')

@section('meta')
    <x-seo
        title="Disclaimer – Tally Counter"
        description="Read the disclaimer for our free online tally counter. This web app is a privacy-first utility that stores counters locally in your browser."
        url="{{ url()->current() }}"
    />
@endsection

@section('content')
    <section class="px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-5xl space-y-6">
            <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                <h1 class="text-4xl font-semibold text-slate-950 dark:text-white">Disclaimer</h1>
                <p class="mt-4 text-lg leading-8 text-slate-600 dark:text-slate-300">
                    The Tally Counter web app is provided for convenience and general counting purposes. It is designed as a lightweight digital utility and does not replace professional counting devices or specialist tracking systems.
                </p>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">No guarantee of accuracy</h2>
                    <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">While the app updates counts instantly in your browser, counters rely on localStorage and manual interaction. You should verify critical counts independently.</p>
                </div>
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">No professional advice</h2>
                    <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">This tool does not provide professional guidance for inventory management, medical tracking, or legal counting requirements.</p>
                </div>
            </div>

            <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">Local storage only</h2>
                <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">Counters are saved only in your browser localStorage. Clearing browser data, switching devices, or using a different browser may remove saved counters.</p>
            </div>

            <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">Contact</h2>
                <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">If you have questions about the tool, use the contact form on the homepage or send feedback through the contact page.</p>
            </div>
        </div>
    </section>
@endsection
