<?php

namespace App\Services;

use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class ImageService
{

    public function index()
    {
        return Image::with(['user'])->latest()->paginate(10);
    }

    public function create(User $user, array $data)
    {
        $data = $this->putFile($data);

        return $user->images()->create($data);
    }

    public function update(Image $image, array $data)
    {
        if (isset($data['file']) && $data['file'] instanceof File) {
            $data = $this->putFile($data);
        }

        return $image->update($data);
    }

    private function putFile(array $data)
    {
        $uploadedFile = $data['file'];
        $path = Storage::putFile('public/images', $uploadedFile);
        $data['path'] = $path;

        $mime_type = $uploadedFile->getMimeType();
        $data['mime_type'] = $mime_type;

        return $data;
    }

    public function show(Image $image)
    {
        $image->load('comments.user');
        $comments = $image->comments()->paginate(5);

        return $comments;
    }
}
