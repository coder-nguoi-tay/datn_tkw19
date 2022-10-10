<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\ForgotPasswordSuccessController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NewManagerController;
use App\Http\Controllers\Admin\PasswordResetController;
use App\Http\Controllers\Admin\PasswordResetExpiredController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\EventReportController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\MyEventController;
use App\Http\Controllers\User\ChangeUserNameController;
use App\Http\Controllers\User\EventController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\LoginController as UserLoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\UserForgotPasswordController;
use App\Http\Controllers\User\UserForgotPasswordSuccessController;
use App\Http\Controllers\User\UpLoadFileController;
use App\Http\Controllers\User\PasswordResetController as UserPasswordResetController;
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

//Route::get('/', function () {
//    return redirect(route('login.index'));
//});

// Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/', [UserLoginController::class, 'index'])->name('home.index');
Route::resource('register', RegisterController::class);
Route::post('register/send-code', [RegisterController::class, 'sendCode'])->name('register.sendCode');
Route::post('register/verify-code', [RegisterController::class, 'verifyCode'])->name('register.verifyCode');
Route::post('check-phone', [RegisterController::class, 'checkPhone'])->name('register.checkPhone');
Route::resource('my-event', MyEventController::class);
Route::get('/my-page/earn', [MyPageController::class, 'earn'])->name('myPage.earn');
Route::resource('my-page', MyPageController::class);
Route::resource('event-report', EventReportController::class);

Route::resource('login', UserLoginController::class);
Route::get('logout', [UserLoginController::class, 'logout'])->name('logout');
Route::resource('change-user-name', ChangeUserNameController::class);
Route::resource('forgot_password', UserForgotPasswordController::class);
Route::resource('forgot_password_complete', UserForgotPasswordSuccessController::class);
Route::resource('password_reset', UserPasswordResetController::class);

Route::group([
    'prefix' => 'admin',
], function () {
    Route::resource('login', LoginController::class, ['as' => 'admin']);
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::resource('forgot_password', ForgotPasswordController::class, ['as' => 'admin']);
    Route::resource('forgot_password_complete', ForgotPasswordSuccessController::class, ['as' => 'admin']);
    Route::resource('password_reset', PasswordResetController::class, ['as' => 'admin']);
    Route::resource('password_reset_expired', PasswordResetExpiredController::class, ['as' => 'admin']);
    Route::group([
        'middleware' => ['admin'],
    ], function () {
        Route::resource('dashboard', DashboardController::class, ['as' => 'admin']);
        Route::resource('user', UserController::class, ['as' => 'admin']);
        Route::post('check-email', [UserController::class, 'checkEmail'])->name('admin.user.checkEmail');
        Route::post('check-phone', [UserController::class, 'checkPhone'])->name('admin.user.checkPhone');
        Route::resource('news', NewManagerController::class, ['as' => 'admin']);
    });
});
Route::group([
    'middleware' => ['user'],
], function () {
    Route::resource('/', ProfileController::class);
    Route::get('/setting-notification', [ProfileController::class, 'settingNotification']);
    Route::post('/update-setting-notification/{id}', [ProfileController::class, 'updateSettingNotification'])->name('user.profile.notification');
    Route::resource('profile', ProfileController::class);
    Route::resource('event', EventController::class);
    Route::post('search-tag', [EventController::class, 'tag'])->name('search-tag');
    Route::post('upload', [UpLoadFileController::class, 'upload'])->name('upload');
});
