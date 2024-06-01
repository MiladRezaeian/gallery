<?php

namespace App\View\Components;

use App\Models\Image;
use Illuminate\View\Component;

class LatestImages extends Component
{
    public $images;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->images = Image::with(['user'])->latest()->take(30)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latest-images');
    }
}
