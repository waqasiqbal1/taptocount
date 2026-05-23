@extends('layouts.app')

@section('meta')
    <x-seo
        title="Privacy Policy – Tally Counter"
        description="Privacy policy for the free online tally counter. No account required, no tracking, and counters are saved only in localStorage."
        url="{{ url()->current() }}"
    />
@endsection

@section('content')
    <section class="px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-5xl space-y-6">
            <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                <h1 class="text-4xl font-semibold text-slate-950 dark:text-white">Privacy Policy</h1>
                <p class="mt-4 text-lg leading-8 text-slate-600 dark:text-slate-300">
                    Your privacy is important. This tally counter app is built with a privacy-first approach, and it does not require login credentials or collect personal data for counting functionality.
                </p>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">LocalStorage Usage</h2>
                    <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">Counter data is stored locally in your browser using localStorage. This means your counters stay on your device and are not sent to a remote server.</p>
                </div>
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                    <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">No tracking</h2>
                    <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">The app does not use tracking cookies or analytics scripts. Your browser usage is not linked to your identity.</p>
                </div>
            </div>

            <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">Contact details</h2>
                <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">If you want to request data removal or ask about privacy, use the contact form on the homepage. The form validates input but does not store submitted data permanently.</p>
            </div>

            <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-950">
                <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">Third-party tools</h2>
                <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">This project uses Laravel and Tailwind CSS as build-time dependencies only. The public interface loads minimal JavaScript and no external tracking libraries.</p>
            </div>
        </div>
    </section>
@endsection
