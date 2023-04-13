<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontPortfolioController extends Controller
{
    private $menu = "Portfolio";

    public function index()
    {
        return view('modules/front/portfolio/portfolios', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "portfolios" => Portfolio::all(),
        ]);
    }

    public function show(Portfolio $portfolio)
    {
        return view('modules/front/portfolio/portfolio', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::site_descriptions(),
            "portfolio" => $portfolio,
        ]);
    }
}
