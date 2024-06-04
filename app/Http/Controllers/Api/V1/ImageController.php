<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ImageResource;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function show(Image $image)
    {
        return new ImageResource($image);
    }

    public function index()
    {
        $images = Image::paginate();

        return ImageResource::collection($images);
    }

}
