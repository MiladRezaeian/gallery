<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        //
    }
}
