<?php

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

// GUEST
Route::get('/', [PagesController::class, 'guestIndex']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);

// MEMBER
Route::get('/member-index', [PagesController::class, 'memberIndex']);

// ADMIN
Route::get('/admin-index', [PagesController::class, 'adminIndex']);
Route::get('/view-product', [ProductController::class, 'displayAll']);
Route::get('/add-product', [ProductController::class, 'getAddProductPage']);
Route::post('/add-product', [ProductController::class, 'addProduct']);
Route::post('/delete-product/{id}', [ProductController::class, 'deleteProduct']);

Route::get('/view-category', [PagesController::class, 'viewCategory']);



