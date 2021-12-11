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
Route::get('/', [ProductController::class, 'index']);
// Route::get('/member-index', [HomeController::class, 'memberIndex'])->middleware('role:member');
// Route::get('/admin-index', [HomeController::class, 'adminIndex'])->middleware('role:admin');

// DETAIL PRODUCT PAGE
Route::get('/detail-product/{id}', [ProductController::class, 'getDetailProduct']);
// Route::get('/member-detail-product/{id}', [ProductController::class, 'getMemberDetailProduct']);
// Route::get('/admin-detail-product/{id}', [ProductController::class, 'getAdminDetailProduct']);

// GUEST LOGIN AND REGISTER
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);

// VIEW, ADD, UPDATE, DELETE PRODUCT
Route::get('/view-product', [ProductController::class, 'displayAll']);
Route::get('/add-product', [ProductController::class, 'getAddProductPage']);
Route::post('/add-product', [ProductController::class, 'addProduct']);
Route::post('/delete-product/{id}', [ProductController::class, 'deleteProduct']);
Route::get('/edit-product/{id}', [ProductController::class, 'getEditProductPage']);
Route::post('/edit-product/{id}', [ProductController::class, 'editProduct']);

// VIEW, ADD, UPDATE, DELETE CATEGORY
Route::get('/view-category', [CategoryController::class, 'displayAll']);
Route::get('/add-category', [CategoryController::class, 'getAddCategoryPage']);
Route::post('/add-category', [CategoryController::class, 'addCategory']);
Route::post('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);
Route::get('/edit-category/{id}', [CategoryController::class, 'getEditCategoryPage']);
Route::post('/edit-category/{id}', [CategoryController::class, 'editCategory']);

// CART
Route::get('/view-cart/{id}', [CartController::class, 'displayAll']);
Route::post('/add-cart-item', [CartDetailController::class, 'addItem']);
Route::post('/delete-cart-item/{cart_id}/{product_id}', [CartDetailController::class, 'deleteItem']);
Route::get('/update-cart-item/{cart_id}/{product_id}', [CartDetailController::class, 'getUpdateItemPage']);
Route::post('/update-cart-item/{cart_id}/{product_id}', [CartDetailController::class, 'updateItem']);

// TRANSACTION
Route::post('/checkout/{cart_id}', [TransactionController::class, 'checkout']);

// Route::get('/history-transaction', function () {
//     return view('history-transaction');
// });

Route::get('/history-transaction', [TransactionController::class, 'displayAll']);

// AUTH
Auth::routes();
