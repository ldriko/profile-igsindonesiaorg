<?php

use App\Http\Controllers\PageController;
use App\Models\BookWriting;
use App\Models\CommunityService;
use App\Models\Conference;
use App\Models\Education;
use App\Models\InstitutionPosition;
use App\Models\IntellectualProperty;
use App\Models\Organization;
use App\Models\PolicyExperience;
use App\Models\Publication;
use App\Models\Research;
use App\Models\TeachingExperience;
use App\Models\TeachingMaterial;
use App\Models\Training;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/category', function () {
    return Inertia::render('category');
})->name('category');

Route::get('/contact', function () {
    return Inertia::render('contact');
})->name('contact');
