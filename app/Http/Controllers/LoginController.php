<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $menu = "Login";

    public function index()
    {
        return view('modules/login/login', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
        ]);
    }
}
