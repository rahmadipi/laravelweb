<?php

namespace App\Http\Controllers;

use App\Models\Codename;
use Illuminate\Http\Request;

class CodenameController extends Controller
{

    public static function site_descriptions()
    {
        $title = Codename::select('value')->where('var', 'title')->get()->toArray();
        $owner = Codename::select('value')->where('var', 'owner')->get()->toArray();

        $site_descriptions = [
            'title' => $title,
            'owner' => $owner,
            'test' => "FU",
        ];

        return $site_descriptions;
    }
}
