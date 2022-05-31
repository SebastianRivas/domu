<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\UserTypesController;
use App\Http\Controllers\IdentificationTypesController;
use App\Http\Controllers\PropertyTypesController;
use App\Http\Controllers\EventTypesController;
use App\Http\Controllers\StatusTypesController;
use App\Http\Controllers\ContractTypesController;

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

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('dashboard', function () { 
        return Inertia::render('Dashboard');
    })->name('dashboard.index');

    // Profile
    Route::get('profile/index', 
        [ProfilesController::class, 'index'] 
    )->name('profile.index');

    Route::get('profile/create', 
        [ProfilesController::class, 'create']
    )->name('profile.create');

    Route::post('profile/store', 
        [ProfilesController::class, 'store']
    )->name('profile.store');

    Route::get('profile/show/{user_id}', 
        [ProfilesController::class, 'show']
    )->name('profile.show');

    Route::get('profile/edit/{user_id}', 
        [ProfilesController::class, 'edit']
    )->name('profile.edit');

    Route::post('profile/update/{user_id}', 
        [ProfilesController::class, 'update']
    )->name('profile.update');

    Route::get('profile/destroy/{user_id}', 
        [ProfilesController::class, 'destroy']
    )->name('profile.destroy');

    // Master Tables
    Route::get('masterTables', function () {
        return Inertia::render('MasterTables'); 
    })->name('masterTables.index');

    Route::get('masterTables/statusTypes', 
        [StatusTypesController::class, 'index']  
    )->name('masterTables.status');

    Route::get('masterTables/userTypes',  
        [UserTypesController::class, 'index'] 
    )->name('masterTables.users');

    Route::get('masterTables/identificationTypes', 
        [IdentificationTypesController::class, 'index'] 
    )->name('masterTables.identifications');

    Route::get('masterTables/contractTypes', 
        [ContractTypesController::class, 'index']  
    )->name('masterTables.contracts');

    Route::get('masterTables/propertyTypes', 
        [PropertyTypesController::class, 'index'] 
    )->name('masterTables.properties');

    Route::get('masterTables/eventTypes', 
        [EventTypesController::class, 'index'] 
    )->name('masterTables.events');

    // Properties    
    Route::get('properties/index', 
        [PropertyController::class, 'index']
    )->name('properties.index');

    Route::get('properties/create', 
        [PropertyController::class, 'create']
    )->name('properties.create');

    Route::post('properties/store', 
        [PropertyController::class, 'store']
    )->name('properties.store');

    Route::get('properties/show/{property_id}', 
        [PropertyController::class, 'show']
    )->name('properties.show');

    Route::get('properties/edit/{property_id}', 
        [PropertyController::class, 'edit']
    )->name('properties.edit');

    Route::post('properties/update/{property_id}', 
        [PropertyController::class, 'update']
    )->name('properties.update');

    Route::get('properties/destroy/{property_id}', 
        [PropertyController::class, 'destroy']
    )->name('properties.destroy');

    // Users  
    Route::get('users/index', 
        [UserController::class, 'index']
    )->name('users.index');

    Route::get('users/create', 
        [UserController::class, 'create']
    )->name('users.create');

    Route::post('users/store', 
        [UserController::class, 'store']
    )->name('users.store');

    Route::get('users/show/{user_id}', 
        [UserController::class, 'show']
    )->name('users.show');

    Route::get('users/edit/{user_id}', 
        [UserController::class, 'edit']
    )->name('users.edit');

    Route::post('users/update/{user_id}', 
        [UserController::class, 'update']
    )->name('users.update');

    Route::get('users/destroy/{user_id}', 
        [UserController::class, 'destroy']
    )->name('users.destroy');

    // Contracts
    Route::get('purchaser/index', 
        [ContractController::class, 'index']
    )->name('purchaser.index');

    Route::get('purchaser/create', 
        [ContractController::class, 'create']
    )->name('purchaser.create');

    Route::post('purchaser/store', 
        [ContractController::class, 'store']
    )->name('purchaser.store');

    Route::get('purchaser/show/{contract_id}', 
        [ContractController::class, 'show']
    )->name('purchaser.show');

    Route::get('purchaser/edit/{contract_id}', 
        [ContractController::class, 'edit']
    )->name('purchaser.edit');

    Route::post('purchaser/update/{contract_id}', 
        [ContractController::class, 'update']
    )->name('purchaser.update');

    Route::get('purchaser/destroy/{contract_id}', 
        [ContractController::class, 'destroy']
    )->name('purchaser.destroy');
});

require __DIR__.'/auth.php';
