<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Codename;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('menus/blog', [
            "menu" => "Blog",
            "site_descriptions" => Codename::site_descriptions(),
            "posts" => Post::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view('menus/post', [
            "menu" => "Blog",
            "site_descriptions" => Codename::site_descriptions(),
            "post" => $post,
        ]);
    }
}
