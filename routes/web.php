<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});
// routes/web.php
Route::get('/jasovi/ejecucion', function () {
    return view('empresas.jasovi.ejecucion');
})->name('jasovi.ejecucion');


Route::get('/rsoto', function () {
    return view('empresas.rsoto.rsoto');
})->name('rsoto');

Route::get('/jasovi', function () {
    return view('empresas.jasovi.jasovi');
})->name('jasovi');



require __DIR__.'/auth.php';
