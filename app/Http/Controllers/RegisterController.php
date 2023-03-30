<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private $menu = "Login";

    public function index()
    {
        return view('modules/register/register', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
        ]);
    }
}
