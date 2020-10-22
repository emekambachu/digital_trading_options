<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@home');

Route::get('about', static function () {
    return view('about');
});

Route::get('services', static function () {
    return view('services');
});

Route::get('investments', 'HomeController@investmentPackages');

Route::get('contact', static function () {
    return view('contact');
});

Route::get('terms', static function () {
    return view('terms');
});

Route::get('legal', static function () {
    return view('legal');
});

Route::get('faq', static function () {
    return view('faq');
});

Route::get('certificates', static function () {
    return view('certificates');
});

Route::get('registration-complete', static function () {
    return view('registration-complete');
});

Route::post('contact/send', 'HomeController@contactForm');

Route::get('github/deploy/{password}', 'GithubDeploymentController@run');

Auth::routes();

// Password Recovery
Route::get('forgot-password', 'HomeController@forgotPassword');
Route::post('recover-password', 'HomeController@recoverPassword');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/users', 'UserController@index')->name('users');

// User Section
// Perform User logout
Route::get('users-logout', 'Auth\LoginController@logout')->name('users-logout');

// User Dashboard
Route::get('users/dashboard', 'UserController@index')->name('users-dashboard');

// User Investment
Route::resource('users/investments', 'InvestmentController');
Route::post('users/submit-investments', 'InvestmentController@submitInvestment');

Route::get('users/account-settings', 'UserController@accountSettings');
Route::post('users/update-account', 'UserController@updateAccount');

// Withdrawal
Route::get('users/withdrawal', 'UserController@withdrawal');
Route::post('users/withdraw-amount', 'UserController@withdrawAmount');

// Admin Section
// Login Page
Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');

// Submit Login
Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);

// Perform Admin logout
Route::get('admin-logout', 'Auth\AdminLoginController@logout')->name('admin-logout');

//Admin Dashboard Page
Route::get('admin/dashboard', 'AdminController@index')->name('admin-dashboard');

//Admin Manage Users Page
Route::get('admin/manage-users', 'AdminController@manageUsers')->name('manage-users');

// Admin Approve User
Route::post('admin/approve-users/{id}', ['uses' => 'AdminController@approveUser']);

// Delete User
Route::post('admin/delete-users/{id}', ['uses' => 'AdminController@deleteUser']);

//Fund User Page
Route::get('admin/fund-wallet/{id}',
    ['as'=>'admin.fund-wallet', 'uses'=>'AdminController@fundWalletPage']
);

// Fund User Form
Route::post('admin/fund-wallet/{id}', ['uses' => 'AdminController@fundWallet']);

//Admin Manage Investments
Route::get('admin/manage-investments', 'AdminController@manageInvestments')->name('manage-investments');

// Admin Approve Investment
Route::post('admin/approve-investments/{id}', ['uses' => 'AdminController@approveInvestment']);

// Admin Manage Investment Packages
Route::resource('admin/investments-packages', 'InvestmentPackageController');

//Add User Investment Page
Route::get('admin/add-users-investments/{id}',
    ['as'=>'admin.add-users-investments', 'uses'=>'AdminController@addUserInvestmentPage']
);

//Add User Investment Form
Route::post('admin/add-users-investments/{id}', ['uses' => 'AdminController@addUserInvestment']);

//Admin Withdrawal Requests
Route::get('admin/withdrawal-requests', 'AdminController@withdrawalRequests')->name('withdrawal-requests');
// Admin Approve Withdrawals
Route::post('admin/approve-withdrawal/{id}', ['uses' => 'AdminController@approveWithdrawal']);
