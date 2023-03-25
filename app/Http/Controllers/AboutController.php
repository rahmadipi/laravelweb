<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CodenameController;

class AboutController extends Controller
{
    public function index()
    {
        return view('menus/about', [
            "menu" => "About",
            "site_descriptions" => CodenameController::site_descriptions(),
        ]);
    }
}
