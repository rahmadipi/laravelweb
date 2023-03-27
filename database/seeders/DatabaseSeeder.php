<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Codename;
use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Category::create([
            'name' => 'Blog',
            'slug' => 'blog',
            'description' => 'Tempat berbagi pengalaman dalam dunia programming.',
        ]);

        Category::create([
            'name' => 'News',
            'slug' => 'news',
            'description' => 'Berita terkini dalam dunia pemrogramman.',
        ]);

        Category::create([
            'name' => 'Information',
            'slug' => 'information',
            'description' => 'Informasi terkini dalam dunia pemrogramman.',
        ]);

        Category::create([
            'name' => 'Tutorial',
            'slug' => 'tutorial',
            'description' => 'Tutorial dalam dunia pemrograman.',
        ]);

        Portfolio::create([
            'name' => 'PHP Native',
            'slug' => 'php-native',
            'description' => 'Native PHP.',
        ]);

        Portfolio::create([
            'name' => 'Codeigniter 3',
            'slug' => 'codeigniter-3',
            'description' => 'PHP dengan framework Codeigniter 3.',
        ]);

        Portfolio::create([
            'name' => 'Laravel 8',
            'slug' => 'laravel-8',
            'description' => 'PHP dengan framework Laravel 8.',
        ]);

        Post::factory(20)->create();

        Codename::create(['var' => 'title', 'value' => 'Judul site',]);
        Codename::create(['var' => 'owner', 'value' => 'Putra Rahmadi',]);
        Codename::create(['var' => 'icon', 'value' => 'icon',]);
    }
}
