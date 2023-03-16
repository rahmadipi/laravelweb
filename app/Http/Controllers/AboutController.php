<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('menus/about', [
            "menu" => "About",
            "site_descriptions" => Codename::site_descriptions(),
        ]);
    }
}
