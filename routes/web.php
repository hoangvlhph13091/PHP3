<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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



Route::get('/home', function(){return view('home');})->name('home');
Route::get('/', function(){return view('home');})->name('home');
Route::get('/product', function(){return view('product');});
Route::middleware('guest')->get('/login', [LoginController::class, 'index'])->name('login-form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::middleware('auth')->any('/logout', [LoginController::class, 'logout'])->name('logout');

route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/add', [CategoryController::class, 'addForm'])->name('category/AddForm');
    Route::post('/category/add', [CategoryController::class, 'add'])->name('categoryAdd');
    Route::get('/category/edit/{id}', [CategoryController::class, 'editForm'])->name('category/EditForm');
    Route::post('/category/edit/{id}', [CategoryController::class, 'edit'])->name('categoryEdit');
    Route::any('/category/del/{id}', [CategoryController::class, 'del'])->name('category/Del');

    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/add', [ProductController::class, 'addform'])->name('product-addform');
    Route::post('/product/add', [ProductController::class, 'add'])->name('product-add');
    Route::get('/product/edit/{id}', [ProductController::class, 'editform'])->name('product-editform');
    Route::post('/product/edit/{id}', [ProductController::class, 'edit'])->name('product-edit');
    Route::any('/product/del/{id}', [ProductController::class, 'del'])->name('product-del');

    Route::get('/post', [PostsController::class, 'index'])->name('post');
    Route::get('/post/add', [PostsController::class, 'addform'])->name('post-add');
    Route::post('/post/add', [PostsController::class, 'add'])->name('post-add');
    Route::any('/post/del{id}', [PostsController::class, 'del'])->name('post-del');

    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::any('/user/del/{id}', [UserController::class, 'del'])->name('user-del');
    

});


