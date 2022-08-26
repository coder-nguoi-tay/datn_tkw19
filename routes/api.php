<?php

use App\Http\Controllers\Api\AuthController;
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
Route::group([
    'middleware' => ['assign.guard:api'],
    'prefix' => 'v1',
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::group([
        'middleware' => ['jwt.verify', 'auth.jwt'],
    ], function () {
        Route::get('user_info', [AuthController::class, 'user']);
        Route::post('logout', [AuthController::class, 'logout']);
    });
});
