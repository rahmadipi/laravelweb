<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('menus/home', [
            "menu" => "Home",
            "site_descriptions" => Codename::site_descriptions(),
        ]);
    }
}
