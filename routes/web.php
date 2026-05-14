<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| The Gisee Infotech site is a single marketing page. Authentication and the
| contact form are handled through modals on that page, so the auth "GET"
| routes simply bounce back to the homepage and ask it to open the modal.
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware('guest')->group(function () {
    Route::get('/login', fn () => redirect()->route('home')->with('open_modal', 'auth')->with('auth_mode', 'signin'))
        ->name('login');

    Route::get('/register', fn () => redirect()->route('home')->with('open_modal', 'auth')->with('auth_mode', 'signup'))
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
