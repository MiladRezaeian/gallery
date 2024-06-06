<?php

namespace Tests\Feature\Controllers;

use App\Models\Comment;
use App\Models\Image;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImageControllerTest extends TestCase
{

    public function test_show_method(): void
    {
        $image = Image::factory()->hasComments()->create();
        $response = $this->get(route('images.show', $image));

        $response->assertOk();
        $response->assertViewIs('images.show', $image);
        $response->assertViewHas('image');
        $response->assertViewHas('comments');
    }

}
