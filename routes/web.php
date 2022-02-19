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
    // Route::middleware(['isOprator'])->group(function () {
    //     Route::resource('area', AreaController::class);
    //     Route::resource('element', ElementController::class);
    // });
    Route::middleware(['Roles:super_admin,admin'])->group(function () {
        Route::resource('type', TypeController::class);
        Route::resource('user', UserController::class);

        Route::get('detailElement', [DetailElementController::class, 'index'])
            ->name('detail.element.index');
        Route::get('detailElement/{id}/show', [DetailElementController::class, 'show'])
            ->name('detail.element.show');
        Route::get('detailElement/create', [DetailElementController::class, 'create'])
            ->name('detail.element.create');

        Route::get('detailElement/{id}/createImage', [DetailElementController::class, 'createImage'])
            ->name('detail.element.createImage');
        Route::get('detailElement/{id}/createVideo', [DetailElementController::class, 'createVideo'])
            ->name('detail.element.createVideo');
        Route::get('detailElement/{id}/createAudio', [DetailElementController::class, 'createAudio'])
            ->name('detail.element.createAudio');

        Route::post('detailElement/create', [DetailElementController::class, 'store'])
            ->name('detail.element.store');

        Route::post('detailElement/{id}/storeImage', [DetailElementController::class, 'storeImage'])
            ->name('detail.element.storeImage');
        Route::post('detailElement/{id}/storeVideo', [DetailElementController::class, 'storeVideo'])
            ->name('detail.element.storeVideo');
        Route::post('detailElement/{id}/storeAudio', [DetailElementController::class, 'storeAudio'])
            ->name('detail.element.storeAudio');

        Route::get('detailElement/{id}/edit', [DetailElementController::class, 'edit'])
            ->name('detail.element.edit');
        Route::put('detailElement/{id}/update', [DetailElementController::class, 'update'])
            ->name('detail.element.update');
        Route::delete('detailElement/{id}/destroy', [DetailElementController::class, 'destroy'])
            ->name('detail.element.destroy');

        Route::delete('detailElement/{id}/destroyImage', [DetailElementController::class, 'destroyImage'])
            ->name('detail.element.destroyImage');
        Route::delete('detailElement/{id}/destroyVideo', [DetailElementController::class, 'destroyVideo'])
            ->name('detail.element.destroyVideo');
        Route::delete('detailElement/{id}/destroyAudio', [DetailElementController::class, 'destroyAudio'])
            ->name('detail.element.destroyAudio');
    });
    Route::middleware(['Roles:super_admin,admin,operator'])->group(function () {
        Route::resource('area', AreaController::class);
        Route::resource('element', ElementController::class);
    });
});

Auth::routes();
