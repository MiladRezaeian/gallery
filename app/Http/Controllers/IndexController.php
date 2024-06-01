<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $images = Image::all();

        return view('index', [
            'images' => $images
        ]);
    }
}