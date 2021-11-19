<?php

use App\Http\Controllers\API\GetDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getDaerah', [GetDataController::class, 'getArea'])
    ->name('getDaerah');
Route::get('getUnsur', [GetDataController::class, 'getElement'])
    ->name('getUnsur');
Route::get('getJenis', [GetDataController::class, 'getType'])
    ->name('getJenis');
Route::get('getDetail/{idElement}/{idArea}/{idType}', [GetDataController::class, 'getDetailElementById'])
    ->name('getDetail');
