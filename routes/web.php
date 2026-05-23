<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/disclaimer', [PageController::class, 'disclaimer'])->name('disclaimer');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');

Route::get('/sitemap.xml', function () {
    return response()
        ->view('sitemap', [
            'urls' => [
                [
                    'loc' => route('home'),
                    'changefreq' => 'weekly',
                    'priority' => '1.0',
                ],
                [
                    'loc' => route('privacy'),
                    'changefreq' => 'yearly',
                    'priority' => '0.3',
                ],
                [
                    'loc' => route('disclaimer'),
                    'changefreq' => 'yearly',
                    'priority' => '0.3',
                ],
            ],
        ])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
