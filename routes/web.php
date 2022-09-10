<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Auth;

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

// start user url
// root url (127.0.0.1:8000)
Route::get('/', function () {
    return view('auth.login');
})->name('welcome');

Route::get('/home',[App\Http\Controllers\User\IndexController::class, 'index'])->name('home');
Route::get('/booking/{id}',[App\Http\Controllers\User\IndexController::class, 'booking'])->name('booking');
Auth::routes();
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');
// end user url

// SSLCOMMERZ Start ( payment gateway )
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


// Admin Start 127.0.0.1/admin
Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		// view = resources/views/admin/auth/register
		Route::view('/register','admin.auth.register')->name('admin.register');
		Route::post('/save',[AdminController::class, 'postRegister'])->name('admin.save');
		Route::get('/register-confirm',[AdminController::class, 'getConfirmRegister'])->name('admin.register.confirm');
		Route::view('/login','admin.auth.login')->name('admin.login');
		//
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
		Route::get('/logout',[App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
		// resource means get==(index function) post(save)(add cinema)==store function edit==update function delete== destroy
		Route::resource('/cinemahall',App\Http\Controllers\Admin\CinemaListController::class);
		Route::get('/booking/{id}',[App\Http\Controllers\Admin\CinemaListController::class,'booking'])->name('admin.booking');
		//
		Route::get('/order',[App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.order');
		Route::resource('/users',App\Http\Controllers\Admin\UserController::class);
	});
});
