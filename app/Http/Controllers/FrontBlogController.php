<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Codename;
use Illuminate\Http\Request;

class FrontBlogController extends Controller
{
    private $menu = "Blog";
    private $perpage = 10;

    public function index()
    {
        $category = null;
        $author = null;

        if (request('category')) {
            $category = Category::where('slug', request('category'))->first();
        }
        if (request('author')) {
            $author = User::where('username', request('author'))->first();
        }

        $posts = Post::latest()->filter(request(['search', 'category', 'author']));

        return view('modules/front/blog/posts', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "posts" => $posts->paginate($this->perpage)->withQueryString(),
            "category" => $category,
            "author" => $author,
        ]);
    }

    public function show(Post $post)
    {
        return view('modules/front/blog/post', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "post" => $post,
        ]);
    }
}
