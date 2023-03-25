<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\CodenameController;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('menus/portfolios', [
            "menu" => "Portfolio",
            "site_descriptions" => CodenameController::site_descriptions(),
            "posts" => Post::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view('menus/portfolio', [
            "menu" => "Portfolio",
            "site_descriptions" => CodenameController::site_descriptions(),
            "post" => $post,
        ]);
    }
}
