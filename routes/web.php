<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\forgotPasswordSuccessController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\JobAttractiveController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Employer\ProfileController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\DetailCompanyController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\LoginController as ClientLoginController;
use App\Http\Controllers\Client\NewsController;
use App\Http\Controllers\Employer\HomeEmployerController;
use App\Http\Controllers\Employer\NewEmployerController;
use App\Http\Controllers\Employer\PackageController as EmployerPackageController;
use App\Http\Controllers\Employer\ResultController;
use App\Http\Controllers\Seeker\HomeController as SeekerHomeController;
use App\Http\Controllers\Seeker\ManageUploadController as SeekerManageUploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Employer\BoughtCvController;
use App\Http\Controllers\Employer\ManagerUploadCvController;
use App\Http\Controllers\Employer\ProfileController as EmployerProfileController;
use App\Http\Controllers\Employer\RegisterCompanyController;
use App\Http\Controllers\Employer\SearchCvController;
use App\Http\Controllers\Employer\ViewProfileController;
use App\Http\Controllers\TestController;

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

Route::middleware('admin')->prefix('dashboard')->name('admin.')->group(function () {
    Route::resource('', HomeController::class);
    Route::resource('package', PackageController::class);
    Route::resource('jobAttractive', JobAttractiveController::class);
    Route::resource('Users', UserController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('new', NewController::class);
    Route::resource('company', CompanyController::class);
    Route::get('company/data-xt/{id}', [CompanyController::class, 'dataXt'])->name('company.dataxt');
    Route::post('company/change-status', [CompanyController::class, 'changeStatus'])->name('company.changeStatus');
});
Route::resource('admin', LoginController::class);
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
    Route::post('new/change-status/{id}', [NewEmployerController::class, 'changeStus'])->name('new.changeStus');
    Route::get('new/show-all-cv/{id}', [NewEmployerController::class, 'detailNew'])->name('new.showdetai');
    //
    Route::resource('package', EmployerPackageController::class);
    Route::post('package/update-time/{id}', [EmployerPackageController::class, 'updateTimePayment'])->name('package.updateTimePayment');
    Route::post('package/payment', [EmployerPackageController::class, 'Payment'])->name('package.payment');
    Route::get('package/payment/return', [EmployerPackageController::class, 'vnpayReturn'])->name('package.payment.return');
    Route::get('package/payment/output', [EmployerPackageController::class, 'vnpayOutput'])->name('package.payment.output');
    Route::get('package/payment/show-detail/{id}', [EmployerPackageController::class, 'showDetail'])->name('package.payment.show.detail');
    Route::post('package/payment/buy-account', [EmployerPackageController::class, 'byAccount'])->name('package.payment.byAccount');

    Route::resource('result', ResultController::class);
    Route::resource('quan-ly-cv', ManagerUploadCvController::class);
    Route::resource('tim-kiem-cv', SearchCvController::class);
    Route::resource('cv-da-mua', BoughtCvController::class);

    Route::post('tim-kiem-cv/change-account/{id}', [ManagerUploadCvController::class, 'changeStatus'])->name('changecAcount');
    Route::group([
        'prefix' => 'quan-ly-cv'
    ], function () {
        Route::get('change-status', [ManagerUploadCvController::class, 'changeStatus'])->name('changestatus');
    });
    Route::resource('register-company', RegisterCompanyController::class);
    //profile
    Route::resource('profile', EmployerProfileController::class);
    Route::get('pay-money', [EmployerProfileController::class, 'payMoney'])->name('employer.profile.paymoney');
    Route::post('pay-money-payment', [EmployerProfileController::class, 'payMoneyPayment'])->name('profile.paymoney.payment');
    Route::get('pay-money-payment-return', [EmployerProfileController::class, 'vnpayReturn'])->name('profile.paymoney.payment.return');

    Route::get('change-password', [ProfileController::class, 'changePassword'])->name('employer.change-password');
    Route::post('change-password', [ProfileController::class, 'changePasswordSucsses'])->name('employer.changePasswordSucsses');
    // giấy xác thực
    Route::post('image-accuracy', [ManagerUploadCvController::class, 'ImageAccuracy'])->name('profile.ImageAccuracy');
});


Route::get('register', [HomeEmployerController::class, 'register'])->name('register.employer');
Route::post('register/create', [HomeEmployerController::class, 'store'])->name('register.employer.create');

// seeker
Route::resource('profile', SeekerHomeController::class);
Route::resource('quan-ly-cv', SeekerManageUploadController::class);
Route::get('detail-company/{id}', [DetailCompanyController::class, 'detailCompany'])->name('detail.company');
Route::resource('xem-ho-so', ViewProfileController::class);
Route::get('file/tao-moi', [SeekerManageUploadController::class, 'createFormCV'])->name('user.createFormCV');
Route::post('file/tao-moi', [SeekerManageUploadController::class, 'storeFormCV'])->name('user.storeFormCV');
Route::get('user/createFormCV/download', [SeekerManageUploadController::class, 'downloadPdf'])->name('user.createFormCV.downloadPdf');

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
Route::resource('', ClientHomeController::class);
// Route::get('{title}-{id}', [SearchController::class, 'searchMajos'])->name('searchMajos');
Route::post('favourite/{id}', [SeekerHomeController::class, 'userFavouriteId']); // api
Route::get('home/detail/{title}-{id}', [ClientHomeController::class, 'showDetail'])->name('home.detail.show');
Route::post('home/detail/upcv', [ClientHomeController::class, 'upCv'])->name('home.detail.upcv');
Route::get('home/serach/location/{title}/{id}', [ClientHomeController::class, 'searchLocation'])->name('home.search.location');
Route::get('home/serach/majors/{title}/{id}', [ClientHomeController::class, 'searchMajors'])->name('home.search.majors');
Route::get('tim-viec-lam', [SearchController::class, 'create'])->name('home.search');
Route::get('News', [NewsController::class, 'index'])->name('company');
Route::get('detailNew/{id}', [NewsController::class, 'showTinTuc'])->name('detailNew');