<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\CodenameController;

class PostController extends Controller
{
    public function index()
    {
        return view('menus/posts', [
            "menu" => "Blog",
            "site_descriptions" => CodenameController::site_descriptions(),
            "posts" => Post::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view('menus/post', [
            "menu" => "Blog",
            "site_descriptions" => CodenameController::site_descriptions(),
            "post" => $post,
        ]);
    }
}
