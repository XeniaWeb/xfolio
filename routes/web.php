<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

//Route::get('/admin', function () {
////    return 'admin1';
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

Route::middleware(['auth'])
    ->prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::resource('/works', App\Http\Controllers\Admin\WorkController::class);
        Route::resource('/technologies', App\Http\Controllers\Admin\TechnologyController::class);
        Route::resource('/categories', App\Http\Controllers\Admin\CategoryController::class);

        Route::group([
            'prefix' => 'settings',
            'as' => 'settings.'
        ], function () {
            Route::get('appearance', [App\Http\Controllers\Admin\Settings\AppearanceController::class, 'index'])->name('appearance');
            Route::put('appearance', [App\Http\Controllers\Admin\Settings\AppearanceController::class, 'update'])->name('update');
        });
});

Route::inertia('/about', 'About')->name('page.about');
Route::inertia('/contacts', 'Contacts')->name('page.contacts');
Route::resource('/web-works', \App\Http\Controllers\WorkController::class);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
