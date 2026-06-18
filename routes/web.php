<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KittenPageController;
use App\Http\Controllers\Admin\LitterController as AdminLitterController;
use App\Http\Controllers\Admin\KittenController as AdminKittenController;

Route::view('/', 'pages.home')->name('home');

Route::view('/la-chatterie', 'pages.chatterie')->name('chatterie');
Route::view('/le-ragdoll', 'pages.race')->name('race');
Route::view('/couleurs-et-varietes', 'pages.varietes')->name('varietes');
Route::view('/nos-reproducteurs', 'pages.reproducteurs')->name('reproducteurs');
Route::get('/chatons', [KittenPageController::class, 'index'])->name('chatons');
Route::view('/modalites-adoption', 'pages.adoption')->name('adoption');
Route::view('/contact', 'pages.contact')->name('contact');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('portees', AdminLitterController::class)
        ->parameters(['portees' => 'litter']);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('portees', AdminLitterController::class)
        ->parameters(['portees' => 'litter']);

    Route::resource('chatons', AdminKittenController::class)
        ->parameters(['chatons' => 'kitten']);
});
