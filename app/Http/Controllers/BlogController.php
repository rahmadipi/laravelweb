<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Codename;
use Illuminate\Http\Request;
use App\Http\Controllers\CodenameController;

class BlogController extends Controller
{
    private $menu = "Blog";

    public function index()
    {
        return view('modules/blog/posts', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "posts" => Post::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view('modules/blog/post', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "post" => $post,
        ]);
    }
}
