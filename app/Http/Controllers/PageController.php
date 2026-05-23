<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'seo' => [
                'title' => 'TapToCount - Free Digital Counter, No Login Required',
                'description' => 'Use a free online tally counter to track tally marks, laps, visitors, prayers, inventory, fitness reps, and more. No login required.',
                'canonical' => route('home'),
            ],
            // SoftwareApplication schema helps search engines understand that this page is a usable web utility.
            'schema' => [
                '@context' => 'https://schema.org',
                '@type' => 'SoftwareApplication',
                'name' => 'TapToCount',
                'applicationCategory' => 'UtilityApplication',
                'operatingSystem' => 'Web',
                'offers' => [
                    '@type' => 'Offer',
                    'price' => '0',
                    'priceCurrency' => 'USD',
                ],
                'featureList' => [
                    'Online tally counter',
                    'Digital counter',
                    'Multiple counters',
                    'Tap to count',
                    'Plus and minus buttons',
                    'Dark mode',
                    'No login required',
                    'Local counter saving',
                ],
            ],
        ]);
    }

    public function disclaimer(): View
    {
        return view('pages.disclaimer', [
            'seo' => [
                'title' => 'Disclaimer - TapToCount',
                'description' => 'Read the disclaimer for our free online tally counter, including local storage, convenience use, and critical counting limitations.',
                'canonical' => route('disclaimer'),
            ],
        ]);
    }

    public function privacy(): View
    {
        return view('pages.privacy-policy', [
            'seo' => [
                'title' => 'Privacy Policy - TapToCount',
                'description' => 'Learn how this online tally counter protects privacy and uses localStorage to save counters on your own device.',
                'canonical' => route('privacy'),
            ],
        ]);
    }
}
