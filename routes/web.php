<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\forgotPasswordSuccessController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Employer\HomeEmployerController;
use App\Http\Controllers\Employer\NewEmployerController;
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

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('', HomeController::class);
    Route::resource('package', PackageController::class);
    Route::resource('Users', UserController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('new', NewController::class);
});
Route::resource('/', LoginController::class);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('resset_pass', ResetPasswordController::class);
Route::resource('forgotPasswordSuccess', forgotPasswordSuccessController::class);
Route::group([
    'prefix' => 'employer'
], function () {
    Route::resource('', HomeEmployerController::class);
    Route::resource('new', NewEmployerController::class);
});