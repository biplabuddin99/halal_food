<?php

use App\Http\Controllers\CartController;
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
Route::get('/home',[FrontendController::class,'index'])->name('home');
Route::resource('category',CategoryController::class);
Route::get('side-category',[CategoryController::class,'sideCategory'])->name('side.category');
Route::resource('subcategory',SubcategoryController::class);
Route::resource('product',ProductController::class);
Route::get('/product_details/{id}', [ProductController::class,'singleProduct'])->name('product_details.singleProduct');
Route::get('/shopping-cart',[CartController::class,'cartPage'])->name('cart.page');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to.cart');
// Route::resource('cart',CartController::class);


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

