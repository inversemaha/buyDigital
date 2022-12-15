<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JobApplyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WebApiController;
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

/*Public Section start*/

Route::get('/', [Controller::class, 'home']);

Route::get('/career/board', [Controller::class, 'careerBoard']);
Route::get('/career/board/details/{id}', [Controller::class, 'careerDetails']);
Route::post('/career/application/apply', [ApplicantController::class, 'applyJob']);
Route::get('/sister-concern', [Controller::class, 'sisterConcern']);
Route::get('/privacy-policy', [Controller::class, 'privacyPolicy']);
Route::get('/terms-of-use', [Controller::class, 'termsOfUse']);
Route::get('/find-out-more', [Controller::class, 'findOutMore']);


/*Applicant Area Start*/
Route::group(['middleware' => 'applicant'], function () {

    Route::any('/profile', [Controller::class, 'profile']);
});
/*Student Area End*/


/*Admin Section start*/


Route::get('/login', [AdminController::class, 'login']);
Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/forgot-password', [AdminController::class, 'forgotPassword']);
Route::post('/admin/login-check', [AdminController::class, 'loginCheck']);
Route::post('/admin/password-change', [AdminController::class, 'passwordChange']);

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/profile', [AdminController::class, 'profile']);
    Route::post('/profile-update', [AdminController::class, 'profileUpdate']);
    Route::post('/password-update', [AdminController::class, 'passwordUpdate']);
    Route::get('/logout', [AdminController::class, 'logout']);

//careers Management
    Route::resource('/careers', CareersController::class);
    Route::resource('/job/appliers', JobApplyController::class);
    Route::get('/applicant-status-update/{id}/{status}', [JobApplyController::class, 'applicantStatusUpdate']);

});

Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin/admins', [AdminRoleController::class, 'show']);
    Route::get('/admin/edit/{id}', [AdminRoleController::class, 'edit']);
    Route::post('/admin/update', [AdminRoleController::class, 'update']);
    Route::get('/admin/create', [AdminRoleController::class, 'create']);
    Route::post('/admin/store', [AdminRoleController::class, 'store']);
    Route::get('/admin/delete/{id}', [AdminRoleController::class, 'destroy']);


});


///map

Route::group(['prefix' => 'operator', 'middleware' => 'operator'], function () {

});

Route::group(['prefix' => 'web-api', 'middleware' => 'admin'], function () {

    Route::any('/states/{country_id}', [WebApiController::class, 'getStates']);
});
/*Admin Section End*/


