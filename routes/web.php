<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ChildCategoryController;
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

Route::get('/',[FrontendController::class,'index']);
Route::get('/home',[FrontendController::class,'index'])->name('home');
Route::get('/category-all',[CategoryController::class,'index'])->name('category.index');
// Route::get('/subcategory-all',[SubcategoryController::class,'index'])->name('subcategory.index');
Route::get('/subcategory-list/{category_id}',[SubcategoryController::class,'subCategory'])->name('subcategory.list');
Route::get('/child-category-all',[ChildCategoryController::class,'index'])->name('child-category.index');
Route::get('/child-category-list/{subcategory_id}',[ChildCategoryController::class,'childCategory'])->name('child-category.list');
Route::get('product-all',[ProductController::class,'index'])->name('product.index');
Route::get('/product-list/{childcategory_id}', [ProductController::class,'productList'])->name('product.list');
Route::get('/product_details/{id}', [ProductController::class,'singleProduct'])->name('product_details.singleProduct');


Route::get('/remove-from-cart/{cart_id}', [CartController::class, 'removeFromCart'])->name('removefrom.cart');


Route::get('/customer',[CustomerAuthController::class,'SingUpForm'])->name('register');
Route::post('register',[CustomerAuthController::class,'signUpStore'])->name('customer.store');
Route::get('/login',[CustomerAuthController::class,'SinInForm'])->name('login');
Route::post('/login',[CustomerAuthController::class,'customerLoginCheck'])->name('login.check');
Route::get('/logout',[CustomerAuthController::class,'singOut'])->name('logOut');

Route::group(['middleware'=>isCustomer::class],function(){
    Route::prefix('customer')->group(function(){
        Route::get('dashboard',[FrontendController::class,'index'])->name('customer.dashboard');
        Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to.cart');
        Route::get('/shopping-cart',[CartController::class,'cartPage'])->name('cart.page');
    });
});

