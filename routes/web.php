<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fiis\FiiController;
use App\Http\Controllers\Fiis\AdministradoraFiiController;
use App\Http\Controllers\Fiis\DividendYieldFiiController;
use App\Http\Controllers\Fiis\RendimentoFiiController;

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

        Route::get('/{id}/show', [FiiController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [FiiController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [FiiController::class, 'update'])->name('update');

    });

    Route::name('administradoras.')->prefix('administradoras')->group(function () {

        Route::get('', [AdministradoraFiiController::class, 'index'])->name('index');
        Route::post('', [AdministradoraFiiController::class, 'index'])->name('index');

        Route::get('/create', [AdministradoraFiiController::class, 'create'])->name('create');
        Route::post('/store', [AdministradoraFiiController::class, 'store'])->name('store');

        Route::get('/{id}/show', [AdministradoraFiiController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [AdministradoraFiiController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [AdministradoraFiiController::class, 'update'])->name('update');

    });

    Route::name('dividendos.')->prefix('dividendos')->group(function () {

        Route::get('', [DividendYieldFiiController::class, 'index'])->name('index');
        Route::post('', [DividendYieldFiiController::class, 'index'])->name('index');

        Route::get('/create', [DividendYieldFiiController::class, 'create'])->name('create');
        Route::post('/store', [DividendYieldFiiController::class, 'store'])->name('store');

        Route::get('/{id}/show', [DividendYieldFiiController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [DividendYieldFiiController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [DividendYieldFiiController::class, 'update'])->name('update');

    });

    Route::name('rendimentos.')->prefix('rendimentos')->group(function () {

        Route::get('', [RendimentoFiiController::class, 'index'])->name('index');
        Route::post('', [RendimentoFiiController::class, 'index'])->name('index');

        Route::get('/create', [RendimentoFiiController::class, 'create'])->name('create');
        Route::post('/store', [RendimentoFiiController::class, 'store'])->name('store');

        Route::get('/{id}/show', [RendimentoFiiController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [RendimentoFiiController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [RendimentoFiiController::class, 'update'])->name('update');

    });
});
