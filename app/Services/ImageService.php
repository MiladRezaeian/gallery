<?php

namespace App\Services;

use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class ImageService
{
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
        $path = Storage::putFile('public/images', $data['file']);
        $data['path'] = $path;

        return $data;
    }
}
