<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Codename;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('menus/blog', [
            "menu" => "Blog",
            "site_descriptions" => Codename::site_descriptions(),
            "posts" => Blog::all(),
        ]);
    }

    public function show($slug)
    {
        return view('menus/post', [
            "menu" => "Blog",
            "site_descriptions" => Codename::site_descriptions(),
            "post" => Blog::find($slug),
        ]);
    }
}
