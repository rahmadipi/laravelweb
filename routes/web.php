<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontBlogController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\FrontAboutController;
use App\Http\Controllers\FrontLoginController;
use App\Http\Controllers\FrontCategoryController;
use App\Http\Controllers\FrontRegisterController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FrontPortfolioController;
use App\Http\Controllers\AdminCategoryController;

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

Route::get('/', [FrontHomeController::class, 'index']);
Route::get('/home', [FrontHomeController::class, 'index']);

Route::get('/blog', [FrontBlogController::class, 'index']);
Route::get('/blog/{post:slug}', [FrontBlogController::class, 'show']);

Route::get('/category', [FrontCategoryController::class, 'index']);

Route::get('/portfolio', [FrontPortfolioController::class, 'index']);
Route::get('/portfolio/{portfolio:slug}', [FrontPortfolioController::class, 'show']);

Route::get('/about', [FrontAboutController::class, 'index']);

Route::get('/login', [FrontLoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [FrontLoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [FrontLoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [FrontRegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [FrontRegisterController::class, 'store'])->middleware('guest');

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/posts/createSlug', [AdminBlogController::class, 'createSlug'])->middleware('auth');
Route::resource('/dashboard/posts', AdminBlogController::class)->middleware('auth');

Route::get('/dashboard/categories/createSlug', [AdminCategoryController::class, 'createSlug'])->middleware('admin');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
