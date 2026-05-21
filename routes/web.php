<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here are the web routes for the multi-use scale marketing site. Each
| section (home, features, gallery, about, contact) has its own blade
| view. There's also a generic redirect route `/redirect/{section}` that
| maps to each page so the site navigation uses redirects to connect
| sections as requested.
|
*/

$pages = [
    'home' => '/',
    'features' => '/features',
    'gallery' => '/gallery',
    'about' => '/about',
    'contact' => '/contact',
];

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/features', function () {
    return view('pages.features');
})->name('features');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Measurements CRUD
Route::resource(
    'measurements',
    MeasurementController::class,
);

// User accounts CRUD moved to admin section (password protected)

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminBasicAuth;

// Admin routes: protected by HTTP Basic (ADMIN_PASSWORD)
Route::middleware([AdminBasicAuth::class])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Users management (admin only)
        Route::resource(
            'users',
            UserController::class,
        );

        // Admin landing (admin.home) at /admin
        Route::get('/', function () {
            return redirect()->route('admin.users.index');
        })->name('home');
    });

// Keep old AdminAuthController routes removed — admin uses HTTP Basic now.

// A single redirect endpoint that routes to the named pages above;
Route::get('/redirect/{section}', function (string $section) use ($pages) {
    if (! array_key_exists($section, $pages)) {
        abort(404);
    }

    // Use a named route redirect so URLs are consistent.
    return redirect()->route($section);
})
    ->where('section', 'home|features|gallery|about|contact')
    ->name('redirect');
