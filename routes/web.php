<?php

use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\DetailElementController;
use App\Http\Controllers\Admin\ElementController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])
        ->name('home');
    Route::middleware(['isAdmin'])->group(function () {
        Route::resource('area', AreaController::class);
        Route::resource('element', ElementController::class);
        Route::resource('type', TypeController::class);
        Route::resource('user', UserController::class);

        Route::get('detailElement', [DetailElementController::class, 'index'])
            ->name('detail.element.index');
        Route::get('detailElement/create', [DetailElementController::class, 'create'])
            ->name('detail.element.create');
        Route::post('detailElement/create', [DetailElementController::class, 'store'])
            ->name('detail.element.store');
        Route::get('detailElement/{id}/edit', [DetailElementController::class, 'edit'])
            ->name('detail.element.edit');
        Route::put('detailElement/{id}/update', [DetailElementController::class, 'update'])
            ->name('detail.element.update');
        Route::delete('detailElement/{id}/destroy', [DetailElementController::class, 'destroy'])
            ->name('detail.element.destroy');
    });
    Route::middleware(['isOprator'])->group(function () {
        Route::resource('type', TypeController::class);

        Route::get('detailElement', [DetailElementController::class, 'index'])
            ->name('detail.element.index');
        Route::get('detailElement/create', [DetailElementController::class, 'create'])
            ->name('detail.element.create');
        Route::post('detailElement/create', [DetailElementController::class, 'store'])
            ->name('detail.element.store');
        Route::get('detailElement/{id}/edit', [DetailElementController::class, 'edit'])
            ->name('detail.element.edit');
        Route::put('detailElement/{id}/update', [DetailElementController::class, 'update'])
            ->name('detail.element.update');
        Route::delete('detailElement/{id}/destroy', [DetailElementController::class, 'destroy'])
            ->name('detail.element.destroy');
    });
});

Auth::routes();
