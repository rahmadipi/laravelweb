<?php

namespace App\Models;

class Codename
{
    private static $site_descriptions = [
        "title" => "Port.io",
        "author" => "Putra Rahmadi",
    ];

    public static function site_descriptions()
    {
        return self::$site_descriptions;
    }
}
