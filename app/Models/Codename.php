<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Codename extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function siteDescriptions()
    {
        $site_descriptions = new Codename;
        $site_descriptions->title = self::where('var', 'title')->value('value');
        $site_descriptions->owner = self::where('var', 'owner')->value('value');

        return $site_descriptions;
    }
}
