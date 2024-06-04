<?php

namespace Tests\Feature\Api;

use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImageApiControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_returns_a_collection_of_image_resources_when_listing_images()
    {
        Image::factory(5)->create();

        $response = $this->getJson(route('images.index'));

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'path',
                    'description',
                    'owner_name',
                ],
            ],
        ]);
    }

}
