<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PageController::class, 'index'])->name('home');

// Language switching route
Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['id', 'en'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }

    return redirect(request('redirect', '/'));
})->name('language.switch');

Route::get('/category', function () {
    return Inertia::render('category');
})->name('category');

Route::get('/contact', function () {
    return Inertia::render('contact');
})->name('contact');
