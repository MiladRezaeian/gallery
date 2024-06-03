<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Image;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, Image $image)
    {
        $image->comments()->create([
            'user_id' => auth()->id(),
            'body' => $request->body
        ]);

        return back()->with('alert', 'Comment has been sent successfully.');
    }
}
