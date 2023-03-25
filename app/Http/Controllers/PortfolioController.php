<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Codename;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('menus/portfolios', [
            "menu" => "Portfolio",
            "site_descriptions" => Codename::site_descriptions(),
            "posts" => Post::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view('menus/portfolio', [
            "menu" => "Portfolio",
            "site_descriptions" => Codename::site_descriptions(),
            "post" => $post,
        ]);
    }
}
