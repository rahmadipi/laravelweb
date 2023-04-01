<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $menu = "Dashboard";

    public function index()
    {
        return view('modules/dashboard/dashboard', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
        ]);
    }
}
