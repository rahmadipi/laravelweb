<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CodenameController;

class HomeController extends Controller
{
    public function index()
    {
        return view('menus/home', [
            "menu" => "Home",
            "site_descriptions" => CodenameController::site_descriptions(),
        ]);
    }
}
