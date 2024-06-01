<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create()
    {
        return view('images.create');
    }

    public function store(StoreImageRequest $request)
    {
        Image::create($request->all());

        return redirect()->route('index')->with('alert', 'Image has been uploaded');
    }

    public function show(Request $request, Image $image)
    {
        return view('images.show', compact('image'));
    }
}
