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

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => mt_rand(1, 2),
            'slug' => 'judul-pertama',
            'author_id' => mt_rand(1, 10),
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi, provident, in, voluptatum dignissimos commodi hic minus maxime veniam esse aspernatur. Ducimus, suscipit nulla. Exercitationem voluptatem hic sunt numquam nesciunt reprehenderit aperiam praesentium quaerat, quidem aliquid veniam eius quos fugiat natus consequatur obcaecati? Soluta, quisquam aspernatur dignissimos ab rerum optio. Assumenda reprehenderit natus, facere nulla minus ea magnam saepe ad non aspernatur similique vero corporis sint repellat quisquam sequi nisi soluta laboriosam incidunt eius aperiam possimus dolorem, veritatis facilis? Alias maxime nulla ullam, enim odio et cumque non?'
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => mt_rand(1, 2),
            'slug' => 'judul-kedua',
            'author_id' => mt_rand(1, 10),
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi, provident, in, voluptatum dignissimos commodi hic minus maxime veniam esse aspernatur. Ducimus, suscipit nulla. Exercitationem voluptatem hic sunt numquam nesciunt reprehenderit aperiam praesentium quaerat, quidem aliquid veniam eius quos fugiat natus consequatur obcaecati? Soluta, quisquam aspernatur dignissimos ab rerum optio. Assumenda reprehenderit natus, facere nulla minus ea magnam saepe ad non aspernatur similique vero corporis sint repellat quisquam sequi nisi soluta laboriosam incidunt eius aperiam possimus dolorem, veritatis facilis? Alias maxime nulla ullam, enim odio et cumque non?'
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => mt_rand(1, 2),
            'slug' => 'judul-ketiga',
            'author_id' => mt_rand(1, 10),
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi, provident, in, voluptatum dignissimos commodi hic minus maxime veniam esse aspernatur. Ducimus, suscipit nulla. Exercitationem voluptatem hic sunt numquam nesciunt reprehenderit aperiam praesentium quaerat, quidem aliquid veniam eius quos fugiat natus consequatur obcaecati? Soluta, quisquam aspernatur dignissimos ab rerum optio. Assumenda reprehenderit natus, facere nulla minus ea magnam saepe ad non aspernatur similique vero corporis sint repellat quisquam sequi nisi soluta laboriosam incidunt eius aperiam possimus dolorem, veritatis facilis? Alias maxime nulla ullam, enim odio et cumque non?'
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'category_id' => mt_rand(1, 2),
            'slug' => 'judul-keempat',
            'author_id' => mt_rand(1, 10),
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores accusamus rerum nam ex iste beatae consequuntur eaque aliquid dolorem magni aut modi, provident, in, voluptatum dignissimos commodi hic minus maxime veniam esse aspernatur. Ducimus, suscipit nulla. Exercitationem voluptatem hic sunt numquam nesciunt reprehenderit aperiam praesentium quaerat, quidem aliquid veniam eius quos fugiat natus consequatur obcaecati? Soluta, quisquam aspernatur dignissimos ab rerum optio. Assumenda reprehenderit natus, facere nulla minus ea magnam saepe ad non aspernatur similique vero corporis sint repellat quisquam sequi nisi soluta laboriosam incidunt eius aperiam possimus dolorem, veritatis facilis? Alias maxime nulla ullam, enim odio et cumque non?'
        ]);

        Codename::create(['var' => 'title', 'value' => 'Judul site',]);
        Codename::create(['var' => 'owner', 'value' => 'Putra Rahmadi',]);
        Codename::create(['var' => 'icon', 'value' => 'icon',]);
    }
}
