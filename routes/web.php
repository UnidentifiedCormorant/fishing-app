<?php

use App\Http\Controllers\Fish\FishController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('fish')->name('fish.')->controller(FishController::class)->group(function () {
    Route::get('', 'index')->name('index');

    Route::get('create', 'create')->name('create');
    Route::post('', 'store')->name('store');

    Route::get('{fish}', 'show')->name('show');

    Route::get('{fish}/edit', 'edit')->name('edit');
    Route::patch('{fish}', 'update')->name('update');

    Route::delete('{fish}', 'destroy')->name('destroy');
});
