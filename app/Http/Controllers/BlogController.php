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
    private $perpage = 10;

    public function index()
    {
        $posts = Post::latest()->filter(request(['search', 'category', 'author']));

        return view('modules/blog/posts', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "posts" => $posts->paginate($this->perpage)->withQueryString(),
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
        return view('modules/blog/posts', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "author" => $user,
            "posts" => Post::where('author_id', $user->id)
                ->with(['author', 'category'])
                ->filter(request(['search', 'category', 'author']))
                ->orderBy('created_at', 'desc')
                ->paginate($this->perpage),
        ]);
    }

    public function byCategory(Category $category)
    {
        return view('modules/blog/posts', [
            "menu" => $this->menu,
            "site_descriptions" => Codename::siteDescriptions(),
            "category" => $category,
            "posts" => Post::where('category_id', $category->id)
                ->with(['author', 'category'])
                ->filter(request(['search', 'category', 'author']))
                ->orderBy('created_at', 'desc')
                ->paginate($this->perpage),
        ]);
    }
}
