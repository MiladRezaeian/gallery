<?php

namespace Tests\Unit;

use App\Models\Comment;
use App\Models\Image;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_comment_belongs_to_an_image()
    {
        $user = User::factory()->create();
        $image = Image::factory()->create(['user_id' => $user->id]);
        $comment = Comment::factory()->create(['image_id' => $image->id, 'user_id' => $user->id]);

        $this->assertInstanceOf(Image::class, $comment->image);
        $this->assertEquals($image->id, $comment->image->id);
    }

    public function test_a_comment_belongs_to_a_user()
    {
        $user = User::factory()->create();
        $comment = Comment::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(User::class, $comment->user);
        $this->assertEquals($user->id, $comment->user->id);
    }

}
