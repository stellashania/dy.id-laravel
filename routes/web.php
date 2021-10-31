<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('index');
// });

// GUEST ============================================================================================================
// Route::get('/', [PagesController::class, 'guestIndex']);
Route::get('/', [ProductController::class, 'index']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);

// MEMBER ===========================================================================================================
// Route::get('/member-index', [PagesController::class, 'memberIndex']);
Route::get('/member-index', [ProductController::class, 'memberIndex']);
Route::get('/member-detail-product/{id}', [ProductController::class, 'getMemberDetailProduct']);

// ADMIN ============================================================================================================
// Route::get('/admin-index', [PagesController::class, 'adminIndex']);
Route::get('/admin-index', [ProductController::class, 'adminIndex']);

Route::get('/admin-detail-product/{id}', [ProductController::class, 'getAdminDetailProduct']);

Route::get('/view-product', [ProductController::class, 'displayAll']);
Route::get('/add-product', [ProductController::class, 'getAddProductPage']);
Route::post('/add-product', [ProductController::class, 'addProduct']);
Route::post('/delete-product/{id}', [ProductController::class, 'deleteProduct']);
Route::get('/edit-product/{id}', [ProductController::class, 'getEditProductPage']);
Route::post('/edit-product/{id}', [ProductController::class, 'editProduct']);

Route::get('/view-category', [CategoryController::class, 'displayAll']);
Route::get('/add-category', [CategoryController::class, 'getAddCategoryPage']);
Route::post('/add-category', [CategoryController::class, 'addCategory']);
Route::post('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);
Route::get('/edit-category/{id}', [CategoryController::class, 'getEditCategoryPage']);
Route::post('/edit-category/{id}', [CategoryController::class, 'editCategory']);



