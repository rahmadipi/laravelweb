<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Codename;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    private $menu = "Home";

    public function index()
    {
        return view('modules/front/home/home', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "carousel" => Carousel::all(),
        ]);
    }
}
