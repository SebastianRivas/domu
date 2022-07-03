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

/*
|--------------------------------------------------------------------------
| Root Route
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('welcome');

/*
|--------------------------------------------------------------------------
| Publics Routes
|--------------------------------------------------------------------------
*/
Route::controller(PropertyController::class)->group(function () {
    Route::get('/public-properties', 'publicIndex')->name('public.property');
    Route::get('/property/public/{property_id}', 'publicShow')->name('public.property.show');
});

/*
|--------------------------------------------------------------------------
| Private Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () { 
        return Inertia::render('Dashboard');
    })->name('dashboard.index');

    Route::get('masterTables', function () {
        return Inertia::render('MasterTables'); 
    })->name('masterTables.index');

    Route::controller(ProfilesController::class)->group(function () {
        Route::get('profile/index', 'index')->name('profile.index');
        Route::get('profile/create', 'create')->name('profile.create');
        Route::post('profile/store', 'store')->name('profile.store');
        Route::get('profile/show/{user_id}', 'show')->name('profile.show');
        Route::get('profile/edit/{user_id}', 'edit')->name('profile.edit');
        Route::post('profile/update/{user_id}', 'update')->name('profile.update');
        Route::get('profile/destroy/{user_id}', 'destroy')->name('profile.destroy');
    });

    Route::controller(StatusTypesController::class)->group(function () {
        Route::get('masterTables/statusTypes', 'index')->name('masterTables.status');
        Route::get('masterTables/status/create', 'create')->name('masterTables.status.create');
        Route::post('masterTables/status/store', 'store')->name('masterTables.status.store');
        Route::get('masterTables/status/show/{status_id}', 'show')->name('masterTables.status.show');
        Route::get('masterTables/status/edit/{status_id}', 'edit')->name('masterTables.status.edit');
        Route::post('masterTables/status/update/{status_id}', 'update')->name('masterTables.status.update');
        Route::get('masterTables/status/destroy/{status_id}', 'destroy')->name('masterTables.status.destroy');
    });

    Route::controller(UserTypesController::class)->group(function () {
        Route::get('masterTables/userTypes', 'index')->name('masterTables.users');
        Route::get('masterTables/userTypes/create', 'create')->name('masterTables.users.create');
        Route::post('masterTables/userTypes/store', 'store')->name('masterTables.users.store');
        Route::get('masterTables/userTypes/show/{userType_id}', 'show')->name('masterTables.users.show');
        Route::get('masterTables/userTypes/edit/{userType_id}', 'edit')->name('masterTables.users.edit');
        Route::post('masterTables/userTypes/update/{userType_id}', 'update')->name('masterTables.users.update');
        Route::get('masterTables/userTypes/destroy/{userType_id}', 'destroy')->name('masterTables.users.destroy');
    });

    Route::controller(IdentificationTypesController::class)->group(function () {
        Route::get('masterTables/identificationTypes', 'index')->name('masterTables.identifications');
        Route::get('masterTables/identificationTypes/create', 'create')->name('masterTables.identifications.create');
        Route::post('masterTables/identificationTypes/store', 'store')->name('masterTables.identifications.store');
        Route::get('masterTables/identificationTypes/show/{identificacionType_id}', 'show')->name('masterTables.identifications.show');
        Route::get('masterTables/identificationTypes/edit/{identificacionType_id}', 'edit')->name('masterTables.identifications.edit');
        Route::post('masterTables/identificationTypes/update/{identificacionType_id}', 'update')->name('masterTables.identifications.update');
        Route::get('masterTables/identificationTypes/destroy/{identificacionType_id}', 'destroy')->name('masterTables.identifications.destroy');
    });

    Route::controller(ContractTypesController::class)->group(function () {
        Route::get('masterTables/contractTypes', 'index')->name('masterTables.contracts');
        Route::get('masterTables/contractTypes/create', 'create')->name('masterTables.contracts.create');
        Route::post('masterTables/contractTypes/store', 'store')->name('masterTables.contracts.store');
        Route::get('masterTables/contractTypes/show/{contractType_id}', 'show')->name('masterTables.contracts.show');
        Route::get('masterTables/contractTypes/edit/{contractType_id}', 'edit')->name('masterTables.contracts.edit');
        Route::post('masterTables/contractTypes/update/{contractType_id}', 'update')->name('masterTables.contracts.update');
        Route::get('masterTables/contractTypes/destroy/{contractType_id}', 'destroy')->name('masterTables.contracts.destroy');
    });

    Route::controller(PropertyTypesController::class)->group(function () {
        Route::get('masterTables/propertyTypes', 'index')->name('masterTables.properties');
        Route::get('masterTables/propertyTypes/create', 'create')->name('masterTables.properties.create');
        Route::post('masterTables/propertyTypes/store', 'store')->name('masterTables.properties.store');
        Route::get('masterTables/propertyTypes/show/{propertyType_id}', 'show')->name('masterTables.properties.show');
        Route::get('masterTables/propertyTypes/edit/{propertyType_id}', 'edit')->name('masterTables.properties.edit');
        Route::post('masterTables/propertyTypes/update/{propertyType_id}', 'update')->name('masterTables.properties.update');
        Route::get('masterTables/propertyTypes/destroy/{propertyType_id}', 'destroy')->name('masterTables.properties.destroy');
    });

    Route::controller(EventTypesController::class)->group(function () {
        Route::get('masterTables/eventTypes', 'index')->name('masterTables.events');
        Route::get('masterTables/eventTypes/create', 'create')->name('masterTables.events.create');
        Route::post('masterTables/eventTypes/store', 'store')->name('masterTables.events.store');
        Route::get('masterTables/eventTypes/show/{eventType_id}', 'show')->name('masterTables.events.show');
        Route::get('masterTables/eventTypes/edit/{eventType_id}', 'edit')->name('masterTables.events.edit');
        Route::post('masterTables/eventTypes/update/{eventType_id}', 'update')->name('masterTables.events.update');
        Route::get('masterTables/eventTypes/destroy/{eventType_id}', 'destroy')->name('masterTables.events.destroy');
    });

    Route::controller(PropertyController::class)->group(function () {
        Route::get('properties/index', 'index')->name('properties.index');
        Route::get('properties/create', 'create')->name('properties.create');
        Route::post('properties/store', 'store')->name('properties.store');
        Route::get('properties/show/{property_id}', 'show')->name('properties.show');
        Route::get('properties/edit/{property_id}', 'edit')->name('properties.edit');
        Route::post('properties/update/{property_id}', 'update')->name('properties.update');
        Route::get('properties/destroy/{property_id}', 'destroy')->name('properties.destroy');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('users/index', 'index')->name('users.index');
        Route::get('users/create', 'create')->name('users.create');
        Route::post('users/store', 'store')->name('users.store');
        Route::get('users/show/{user_id}', 'show')->name('users.show');
        Route::get('users/edit/{user_id}', 'edit')->name('users.edit');
        Route::post('users/update/{user_id}', 'update')->name('users.update');
        Route::get('users/destroy/{user_id}', 'destroy')->name('users.destroy');
    });

    Route::controller(ContractController::class)->group(function () {
        Route::get('purchaser/index', 'index')->name('purchaser.index');
        Route::get('purchaser/create', 'create')->name('purchaser.create');
        Route::post('purchaser/store', 'store')->name('purchaser.store');
        Route::get('purchaser/show/{contract_id}', 'show')->name('purchaser.show');
        Route::get('purchaser/edit/{contract_id}', 'edit')->name('purchaser.edit');
        Route::post('purchaser/update/{contract_id}', 'update')->name('purchaser.update');
        Route::get('purchaser/destroy/{contract_id}', 'destroy')->name('purchaser.destroy');
    });
});

require __DIR__.'/auth.php';
