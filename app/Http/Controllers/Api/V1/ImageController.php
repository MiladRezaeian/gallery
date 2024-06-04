<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ImageResource;
use App\Models\Image;
use App\Services\Api\V1\ImageService;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function show(Image $image)
    {
        return new ImageResource($image);
    }

    public function index()
    {
        $images = (new ImageService)->index();

        return ImageResource::collection($images);
    }

}
