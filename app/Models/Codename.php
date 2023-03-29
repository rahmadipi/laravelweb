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
        $site_descriptions = Codename::whereIn('var', ['title', 'owner'])
            ->pluck('value', 'var')->toArray();

        return (object) $site_descriptions;
    }
}
