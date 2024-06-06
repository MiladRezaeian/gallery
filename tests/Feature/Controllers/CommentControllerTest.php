<?php

namespace Tests\Feature\Controllers;

use App\Models\Comment;
use App\Models\Image;
use App\Models\User;
use App\Policies\CommentPolicy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Client\Response;
use Tests\TestCase;

class CommentControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_validation_rules()
    {
        $image = Image::factory()->create();

        $response = $this->actingAs(User::factory()->create())
            ->post(route('comments.store', $image->id), []);

        $response->assertSessionHasErrors('body');
    }

    public function test_store_method_when_user_logged_in()
    {
        $user = User::factory()->create();
        $image = Image::factory()->create();
        $data = Comment::factory()->state([
            'user_id' => $user->id,
            'image_id' => $image->id,
        ])->make()->toArray();
        $comment = Comment::factory()->make($data);
        $comment->save();

        $this->assertDatabaseHas('comments', $data);
    }

}
