<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Fiis\FiiController;
use App\Http\Controllers\Fiis\FiiController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::name('fiis.')->prefix('fiis')->group(function () {
        Route::get('', [FiiController::class, 'index'])->name('index');
        Route::post('', [FiiController::class, 'index'])->name('index');

        Route::get('/create', [FiiController::class, 'create'])->name('create');
        Route::post('/store', [FiiController::class, 'store'])->name('store');

    });

});
