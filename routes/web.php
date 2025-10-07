<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PageController::class, 'index'])->name('home');

// Category routes
Route::get('/book-writings', [CategoryController::class, 'bookWritings'])->name('book-writings');
Route::get('/community-services', [CategoryController::class, 'communityServices'])->name('community-services');
Route::get('/conferences', [CategoryController::class, 'conferences'])->name('conferences');
Route::get('/education', [CategoryController::class, 'education'])->name('education');
Route::get('/institution-positions', [CategoryController::class, 'institutionPositions'])->name('institution-positions');
Route::get('/intellectual-properties', [CategoryController::class, 'intellectualProperties'])->name('intellectual-properties');
Route::get('/organizations', [CategoryController::class, 'organizations'])->name('organizations');
Route::get('/policy-experiences', [CategoryController::class, 'policyExperiences'])->name('policy-experiences');
Route::get('/publications', [CategoryController::class, 'publications'])->name('publications');
Route::get('/research', [CategoryController::class, 'research'])->name('research');
Route::get('/teaching-experiences', [CategoryController::class, 'teachingExperiences'])->name('teaching-experiences');
Route::get('/teaching-materials', [CategoryController::class, 'teachingMaterials'])->name('teaching-materials');
Route::get('/trainings', [CategoryController::class, 'trainings'])->name('trainings');

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
