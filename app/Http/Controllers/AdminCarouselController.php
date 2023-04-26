<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Codename;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modules/auth/carousels/index', [
            "site_descriptions" => Codename::siteDescriptions(),
            "carousels" => Carousel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Carousel::enumPositions();

        return view('modules/auth/carousels/create', [
            "site_descriptions" => Codename::siteDescriptions(),
            "positions" => (object) $positions,
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
        $positions = Carousel::enumPositions();

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|max:255',
            'url' => 'required|url',
            'position' => ['required', Rule::in($positions)],
            'image' => 'image|file|max:1024',
            'body' => 'required|max:255',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('carousel-images');
        }

        Carousel::create($validatedData);

        Alert::success('Success', 'New carousel item has been added.');
        return redirect('/dashboard/carousels')->with('success', 'New carousel item has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        return view('modules/auth/carousels/show', [
            "site_descriptions" => Codename::siteDescriptions(),
            "carousel" => $carousel,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        $positions = Carousel::enumPositions();

        return view('modules/auth/carousels/edit', [
            "site_descriptions" => Codename::siteDescriptions(),
            "carousel" => $carousel,
            "positions" => (object) $positions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        $positions = Carousel::enumPositions();

        $rules = [
            'title' => 'required|max:255',
            'link' => 'required|max:255',
            'url' => 'required|url',
            'position' => ['required', Rule::in($positions)],
            'body' => 'required|max:255',
        ];

        if ($request->file('image')) {
            $rules['image'] = 'image|file|max:1024';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('carousel-images');
        }

        Carousel::where('id', $carousel->id)
            ->update($validatedData);

        Alert::success('Success', 'Carousel item has been updated.');
        return redirect('/dashboard/carousels')->with('success', 'Carousel item has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        if ($carousel->image) {
            Storage::delete($carousel->image);
        }

        Carousel::destroy($carousel->id);

        Alert::success('Success', 'Carousel item has been deleted.');
        return redirect('/dashboard/carousels')->with('success', 'Carousel item has been deleted.');
    }
}
