<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Image;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function create()
    {
        return view('images.create');
    }

    public function store(StoreImageRequest $request)
    {
        (new ImageService)->create($request->user(), $request->all());

        return redirect()->route('index')->with('alert', 'Image has been uploaded.');
    }

    public function show(Image $image)
    {
        $image->load('comments.user');
        $comments = $image->comments()->paginate(5);

        return view('images.show', compact('image', 'comments'));
    }

    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    public function update(UpdateImageRequest $request, Image $image)
    {
        (new ImageService)->update($image, $request->all());

        return redirect()->route('images.show', $image)->with('alert', 'Image has been edited.');
    }
}
