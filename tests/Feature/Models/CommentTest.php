<?php

namespace Tests\Feature\Models;

use App\Models\Comment;
use App\Models\Image;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Model;

class CommentTest extends TestCase
{
    use RefreshDatabase,
        ModelHelperTesting;

    protected function model(): Model
    {
        return new Comment();
    }

    public function test_comment_relationship_with_image(): void
    {
        $comment = Comment::factory()->for(Image::factory())->create();

        $this->assertTrue(isset($comment->image->id));
        $this->assertTrue($comment->image instanceof Image);
    }

    public function test_comment_relationship_with_user(): void
    {
        $image = Comment::factory()->for(User::factory())->create();

        $this->assertTrue(isset($image->user->id));
        $this->assertTrue($image->user instanceof User);
    }

}
