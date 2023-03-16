<?php

use App\Models\Blog;
use App\Models\Codename;
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
    return view('menus/home', [
        "menu" => "Home",
        "site_descriptions" => Codename::site_descriptions(),
    ]);
});

Route::get('/home', function () {
    return view('menus/home', [
        "menu" => "Home",
        "site_descriptions" => Codename::site_descriptions(),
    ]);
});

Route::get('/about', function () {
    return view('menus/about', [
        "menu" => "About",
        "site_descriptions" => Codename::site_descriptions(),
    ]);
});

Route::get('/blog', function () {
    return view('menus/blog', [
        "menu" => "Blog",
        "site_descriptions" => Codename::site_descriptions(),
        "posts" => Blog::all(),
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    return view('menus/post', [
        "menu" => "Blog",
        "site_descriptions" => Codename::site_descriptions(),
        "post" => Blog::find($slug),
    ]);
});

Route::get('/signin', function () {
    return view('signin');
});
