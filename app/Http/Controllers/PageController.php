<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'metaTitle' => 'Online Tally Counter – Free Digital Counter, No Login Required',
            'metaDescription' => 'Use a free online tally counter to track tally marks, laps, visitors, prayers, inventory, fitness reps, and more. No login required.',
            'metaUrl' => url('/'),
            'metaImage' => null,
        ]);
    }

    public function disclaimer()
    {
        return view('pages.disclaimer', [
            'metaTitle' => 'Disclaimer – Tally Counter',
            'metaDescription' => 'Read the disclaimer for our free online tally counter. This web app is a privacy-first utility that stores counters locally in your browser.',
            'metaUrl' => url('/disclaimer'),
            'metaImage' => null,
        ]);
    }

    public function privacy()
    {
        return view('pages.privacy-policy', [
            'metaTitle' => 'Privacy Policy – Tally Counter',
            'metaDescription' => 'Privacy policy for the free online tally counter. No account required, no tracking, and counters are saved only in localStorage.',
            'metaUrl' => url('/privacy-policy'),
            'metaImage' => null,
        ]);
    }
}
