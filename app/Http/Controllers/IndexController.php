<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
