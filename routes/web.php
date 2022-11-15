<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Models\Customer;
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

Route::get('/', function () {
    // return (Customer::all());
    // dd(auth('customer')->check());
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/',[AdminController::class, 'dashboard'])->name('admin');
    Route::resource('categories', CategoryController::class);
    Route::resource('brands' , BrandController::class);
    Route::resource('products', ProductController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('customer')->middleware('guest:customer')->group(function () {
    Route::get('/register' , [CustomerController::class , 'registerView'])->name('customer_register');
    Route::post('/register', [CustomerController::class , 'registerSubmit'])->name('register_submit');
    Route::get('/login' , [CustomerController::class , 'loginView'])->name('customer_loginView');
    Route::post('/login', [CustomerController::class, 'login'])->name('customer_login');
});


Route::get('customer/logout', [CustomerController::class, 'logout'])->middleware('customer')->name('customer_logout');

Route::get('customer/test', [CustomerController::class, 'test']);
