<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContractController;

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
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('welcome');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('profile', 
    [ProfileController::class, 'index']
)->middleware(['auth', 'verified'])->name('profile');

Route::get('masterTables', function () {
    return Inertia::render('MasterTables');
})->middleware(['auth', 'verified'])->name('masterTables');

Route::get('properties', 
    [PropertyController::class, 'index']
)->middleware(['auth', 'verified'])->name('properties');

Route::get('users', 
    [UserController::class, 'index']
)->middleware(['auth', 'verified'])->name('users');

Route::get('purchaser', 
    [ContractController::class, 'index']
)->middleware(['auth', 'verified'])->name('purchaser');

require __DIR__.'/auth.php';
