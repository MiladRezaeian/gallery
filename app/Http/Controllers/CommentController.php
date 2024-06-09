<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Image;
use App\Services\CommentService;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, Image $image)
    {
        (new CommentService)->create($request, $image);

        return back()->with('alert', 'Comment has been sent successfully.');
    }
}
