<?php

use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Models\CustomerAuth;
use Illuminate\Support\Facades\Route;

/* Middleware */
use App\Http\Middleware\isCustomer;
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

Route::resource('/',FrontendController::class);
Route::resource('category',CategoryController::class);
Route::resource('subcategory',SubcategoryController::class);
Route::resource('product',ProductController::class);
Route::get('/product/{id}', [ProductController::class,'viewProduct'])->name('product.product.singleProduct');
Route::get('/customer',[CustomerAuthController::class,'SingUpForm'])->name('register');
Route::post('register',[CustomerAuthController::class,'signUpStore'])->name('customer.store');
Route::get('/login',[CustomerAuthController::class,'SinInForm'])->name('login');
Route::post('/login',[CustomerAuthController::class,'customerLoginCheck'])->name('login.check');
Route::get('/logout',[CustomerAuthController::class,'singOut'])->name('logOut');

Route::group(['middleware'=>isCustomer::class],function(){
    Route::prefix('customer')->group(function(){
        Route::get('dashboard',[FrontendController::class,'index'])->name('customer.dashboard');
    });
});

