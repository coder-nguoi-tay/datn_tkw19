<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ForgotPasswordSuccessController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyEventController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\PasswordResetExpiredController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\RegisterController;

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

//Route::get('/', function () {
//    return redirect(route('login.index'));
//});
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::resource('register', RegisterController::class);
Route::post('register/send-code', [RegisterController::class, 'sendCode'])->name('register.sendCode');
Route::post('register/verify-code', [RegisterController::class, 'verifyCode'])->name('register.verifyCode');
Route::resource('login', LoginController::class);
Route::resource('my-event', MyEventController::class);
Route::resource('forgot_password', ForgotPasswordController::class);
Route::resource('forgot_password_complete', ForgotPasswordSuccessController::class);
Route::resource('password_reset', PasswordResetController::class);
Route::resource('password_reset_expired', PasswordResetExpiredController::class);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group([
    'prefix' => 'admin',
    'middleware' => ['admin'],
], function () {
    Route::resource('dashboard', DashboardController::class, ['as' => 'admin']);
    Route::resource('user', UserController::class, ['as' => 'admin']);
    Route::post('check-email', [UserController::class, 'checkEmail'])->name('admin.user.checkEmail');
});
