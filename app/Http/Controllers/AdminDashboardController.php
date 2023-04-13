<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    private $menu = "Dashboard";

    public function index()
    {
        return view('modules/auth/dashboard/index', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
        ]);
    }
}
