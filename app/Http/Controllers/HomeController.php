<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $menu = "Home";

    public function index()
    {
        return view('modules/home/home', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
        ]);
    }
}
