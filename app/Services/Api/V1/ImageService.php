<?php

namespace App\Services\Api\V1;

use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class ImageService
{

    public function index()
    {
        return $images = Image::paginate();
    }

}
