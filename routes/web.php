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
use App\Http\Controllers\Employer\PackageController as EmployerPackageController;
use App\Http\Controllers\Employer\ResultController;
use App\Http\Controllers\Seeker\HomeController as SeekerHomeController;
use App\Http\Controllers\Seeker\ManageUploadController as SeekerManageUploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Employer\ManagerUploadCvController;
use App\Http\Controllers\Employer\RegisterCompanyController;

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


//// employer
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
    Route::resource('package', EmployerPackageController::class);
    Route::post('package/payment', [EmployerPackageController::class, 'Payment'])->name('package.payment');
    Route::post('package/payment/momo', [EmployerPackageController::class, 'Momo'])->name('package.payment.momo');
    Route::resource('result', ResultController::class);
    Route::resource('quan-ly-cv', ManagerUploadCvController::class);
    Route::resource('register-company', RegisterCompanyController::class);
});
// seeker
Route::resource('profile', SeekerHomeController::class);
Route::resource('quan-ly-cv', SeekerManageUploadController::class);
Route::get('user/profile/{token}', [SeekerHomeController::class, 'userProfile'])->name('user.profile');
Route::get('user/new/favourite', [SeekerHomeController::class, 'userFavourite'])->name('user.favourite');
Route::delete('delete/favourite/{id}', [SeekerHomeController::class, 'deleteFavourite'])->name('delete.favourite');
Route::get('user/logout', [SeekerHomeController::class, 'logout'])->name('user.logout');
Route::get('change-password', [SeekerHomeController::class, 'changePassword'])->name('user.changepass');
Route::post('change-password', [SeekerHomeController::class, 'changePasswordSucsses'])->name('user.changePasswordSucsses');

// Route::group(function () {
// login
Route::resource('owner', ClientLoginController::class);
// Route::get('owner/register', [ClientLoginController::class, 'showRegister'])->name('owner.show.register');
Route::post('owner/update/register', [ClientLoginController::class, 'updateRegister'])->name('owner.update.register');
// });
//client
Route::resource('home', ClientHomeController::class);
Route::get('show-new', [ClientHomeController::class, 'showNew']); // api
Route::post('favourite/{id}', [SeekerHomeController::class, 'userFavouriteId']); // api
Route::get('home/detail/{title}-{id}', [ClientHomeController::class, 'showDetail'])->name('home.detail.show');
Route::post('home/detail/upcv', [ClientHomeController::class, 'upCv'])->name('home.detail.upcv');
Route::get('home/serach/location/{title}/{id}', [ClientHomeController::class, 'searchLocation'])->name('home.search.location');
Route::get('home/serach/majors/{title}/{id}', [ClientHomeController::class, 'searchMajors'])->name('home.search.majors');
Route::get('tim-viec-lam', [SearchController::class, 'create'])->name('home.search');