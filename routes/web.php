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
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\LoginController as ClientLoginController;
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


////
Route::middleware('user')->name('employer.')->prefix('employer')->group(function () {
    // Route::resource('', HomeEmployerController::class);
    Route::get('logout', [HomeEmployerController::class, 'logout'])->name('logout');
    Route::get('', [HomeEmployerController::class, 'index'])->name('index');
    // Route::resource('new', NewEmployerController::class);
    Route::post('new/store', [NewEmployerController::class, 'store'])->name('new.store');
    Route::get('new/index', [NewEmployerController::class, 'index'])->name('new.index');
    Route::get('new/create', [NewEmployerController::class, 'create'])->name('new.create');
    Route::get('new/destroy/{id}', [NewEmployerController::class, 'destroy'])->name('new.destroy');
    Route::get('new/edit/{job}', [NewEmployerController::class, 'edit'])->name('new.edit');
    Route::post('new/update/{id}', [NewEmployerController::class, 'update'])->name('new.update');
});
// Route::group(function () {
Route::resource('owner', ClientLoginController::class);
// Route::get('owner/register', [ClientLoginController::class, 'showRegister'])->name('owner.show.register');
Route::post('owner/update/register', [ClientLoginController::class, 'updateRegister'])->name('owner.update.register');
// });
Route::resource('home', ClientHomeController::class);