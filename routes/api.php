<?php

use App\Http\Controllers\AgreementController;
use App\Http\Controllers\UserController;
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

//Rutas protegidas
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('users-list', 'index');
        Route::get('user-logout','logout');
    });
});
//Usuarios no protegidas
Route::controller(UserController::class)->group(function () {
    Route::post('login', 'login');
});

Route::get('test', [AgreementController::class, 'index']);
Route::get('test-store', [AgreementController::class, 'storeLocal']);
