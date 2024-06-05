<?php

namespace Tests\Feature\Models;

use App\Models\Comment;
use App\Models\Image;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Model;

class ImageTest extends TestCase
{
    use RefreshDatabase,
        ModelHelperTesting;

    protected function model(): Model
    {
        return new Image();
    }

    public function test_image_relationship_with_user(): void
    {
        $image = Image::factory()->for(User::factory())->create();

        $this->assertTrue(isset($image->user->id));
        $this->assertTrue($image->user instanceof User);
    }

    public function test_image_relationship_with_comment(): void
    {
        $count = rand(1, 10);

        $image = Image::factory()->hasComments($count)->create();

        $this->assertCount($count, $image->comments);
        $this->assertTrue($image->comments->first() instanceof Comment);
    }

}
