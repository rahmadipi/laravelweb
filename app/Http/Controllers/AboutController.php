<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $menu = "About";

    public function index()
    {
        return view('modules/about/about', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
        ]);
    }
}
