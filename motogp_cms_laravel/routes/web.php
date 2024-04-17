<?php

use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    'riders/trash/{id}',
    [RiderController::class, 'trash']
    )->name('riders.trash')->middleware(['auth', 'verified']);

Route::get(
    'riders/trashed',
    [RiderController::class, 'trashed']
    )->name('riders.trashed')->middleware(['auth', 'verified']);

Route::get(
    'riders/restore/{id}',
    [RiderController::class, 'restore']
    )->name('riders.restore')->middleware(['auth', 'verified']);
Route::get(
    'manufacturers/trash/{id}',
    [ManufacturerController::class, 'trash']
    )->name('manufacturers.trash')->middleware(['auth', 'verified']);

Route::get(
    'manufacturers/trashed',
    [ManufacturerController::class, 'trashed']
    )->name('manufacturers.trashed')->middleware(['auth', 'verified']);

Route::get(
    'manufacturers/restore/{id}',
    [ManufacturerController::class, 'restore']
    )->name('manufacturers.restore')->middleware(['auth', 'verified']);

Route::get(
    '/Italian-Riders',
    [RiderController::class, 'italy']
    )->name('riders.it');

Route::get(
    '/Australian-Riders',
    [RiderController::class, 'aus']
    )->name('riders.aus');

Route::get(
    '/French-Riders',
    [RiderController::class, 'fra']
    )->name('riders.fra');

Route::get(
    '/Japanese-Riders',
    [RiderController::class, 'jap']
    )->name('riders.jap');

Route::get(
    '/Portuguese-Riders',
    [RiderController::class, 'por']
    )->name('riders.por');

Route::get(
    '/South-African-Riders',
    [RiderController::class, 'sa']
    )->name('riders.sa');

Route::get(
    '/Spanish-Riders',
    [RiderController::class, 'sp']
    )->name('riders.sp');

Route::resource('riders', RiderController::class)->middleware(['auth', 'verified']);
Route::resource('manufacturers', ManufacturerController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
