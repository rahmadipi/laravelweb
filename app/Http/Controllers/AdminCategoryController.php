<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Codename;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');

        return view('modules/auth/categories/index', [
            "site_descriptions" => Codename::siteDescriptions(),
            "categories" => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules/auth/categories/create', [
            "site_descriptions" => Codename::siteDescriptions(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'unique:categories|required',
            'image' => 'image|file|max:1024',
            'description' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('category-images');
        }

        Category::create($validatedData);

        Alert::success('Success', 'New category has been added.');
        return redirect('/dashboard/categories')->with('success', 'New category has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    /*
    public function show(Category $category)
    {
        //
    }
    */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('modules/auth/categories/edit', [
            "site_descriptions" => Codename::siteDescriptions(),
            "category" => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required',
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'unique:categories|required';
        }

        if ($request->file('image')) {
            $rules['image'] = 'image|file|max:1024';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('category-images');
        }

        Category::where('id', $category->id)
            ->update($validatedData);

        Alert::success('Success', 'Category has been updated.');
        return redirect('/dashboard/categories')->with('success', 'Category has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->image) {
            Storage::delete($category->image);
        }

        Category::destroy($category->id);

        Alert::success('Success', 'Category has been deleted.');
        return redirect('/dashboard/categories')->with('success', 'Category has been deleted.');
    }

    public function createSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
