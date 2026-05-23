<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/disclaimer', [PageController::class, 'disclaimer'])->name('disclaimer');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy.policy');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
