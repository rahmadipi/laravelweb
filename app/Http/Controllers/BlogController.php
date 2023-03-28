<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Codename;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $menu = "Blog";

    public function index()
    {
        $posts = Post::latest()->filter(request(['search', 'category', 'author']));

        return view('modules/blog/posts', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "posts" => $posts->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('modules/blog/post', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "post" => $post,
        ]);
    }

    public function byAuthor(User $user)
    {
        $posts = $user->posts->load(['author', 'category']);

        return view('modules/blog/posts', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "author" => $user,
            "posts" => $posts->paginate(7)->withQueryString(),
        ]);
    }

    public function byCategory(Category $category)
    {
        $posts = $category->posts->load(['author', 'category']);

        return view('modules/blog/posts', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "category" => $category,
            "posts" => $posts->paginate(7)->withQueryString(),
        ]);
    }
}
