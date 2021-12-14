<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
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

// INDEX PAGE
Route::get('/', [HomeController::class, 'index']);

// DETAIL PRODUCT PAGE
Route::get('/detail-product/{id}', [ProductController::class, 'getDetailProduct']);

// GUEST LOGIN AND REGISTER
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);

// VIEW, ADD, UPDATE, DELETE PRODUCT
Route::get('/view-product', [ProductController::class, 'displayAll'])->middleware('role:admin')->name('view-product');
Route::get('/add-product', [ProductController::class, 'getAddProductPage'])->middleware('role:admin');
Route::post('/add-product', [ProductController::class, 'addProduct'])->middleware('role:admin');
Route::post('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->middleware('role:admin');
Route::get('/edit-product/{id}', [ProductController::class, 'getEditProductPage'])->middleware('role:admin');
Route::post('/edit-product/{id}', [ProductController::class, 'editProduct'])->middleware('role:admin');

// VIEW, ADD, UPDATE, DELETE CATEGORY
Route::get('/view-category', [CategoryController::class, 'displayAll'])->middleware('role:admin')->name('view-category');
Route::get('/add-category', [CategoryController::class, 'getAddCategoryPage'])->middleware('role:admin');
Route::post('/add-category', [CategoryController::class, 'addCategory'])->middleware('role:admin');
Route::post('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->middleware('role:admin');
Route::get('/edit-category/{id}', [CategoryController::class, 'getEditCategoryPage'])->middleware('role:admin');
Route::post('/edit-category/{id}', [CategoryController::class, 'editCategory'])->middleware('role:admin');

// CART
Route::get('/view-cart/{id}', [CartController::class, 'displayAll'])->middleware('role:member')->name('view-cart');
Route::post('/add-cart-item', [CartDetailController::class, 'addItem'])->middleware('role:member');
Route::post('/delete-cart-item/{cart_id}/{product_id}', [CartDetailController::class, 'deleteItem'])->middleware('role:member');
Route::get('/update-cart-item/{cart_id}/{product_id}', [CartDetailController::class, 'getUpdateItemPage'])->middleware('role:member');
Route::post('/update-cart-item/{cart_id}/{product_id}', [CartDetailController::class, 'updateItem'])->middleware('role:member');

// TRANSACTION
Route::post('/checkout', [TransactionController::class, 'checkout'])->middleware('role:member');
Route::get('/history-transaction', [TransactionController::class, 'displayAll'])->middleware('role:member')->name('history-transaction');

// SEARCH
Route::get('/search/{page?}', [HomeController::class, 'searchProducts']);

// AUTH
Auth::routes();
