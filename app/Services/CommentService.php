<?php

namespace App\Services;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class CommentService
{

    public function create($request, $image)
    {
        $image->comments()->create([
            'user_id' => auth()->id(),
            'body' => $request->body
        ]);
    }

}
