<?php

namespace Tests\Feature\Models;

use App\Models\Comment;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase,
        ModelHelperTesting;

    protected function model(): Model
    {
        return new User();
    }

    public function test_user_relationship_with_image(): void
    {
        $count = rand(1, 10);

        $user = User::factory()->hasImages($count)->create();

        $this->assertCount($count, $user->images);
        $this->assertTrue($user->images->first() instanceof Image);
    }

    public function test_user_relationship_with_comment(): void
    {
        $count = rand(1, 10);

        $user = User::factory()->hasComments($count)->create();

        $this->assertCount($count, $user->comments);
        $this->assertTrue($user->comments->first() instanceof Comment);
    }

}
