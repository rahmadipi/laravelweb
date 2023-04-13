<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Codename;
use Illuminate\Http\Request;

class FrontCategoryController extends Controller
{
    private $menu = "Category";

    public function index()
    {
        return view('modules/front/category/categories', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "categories" => Category::all(),
        ]);
    }
}
