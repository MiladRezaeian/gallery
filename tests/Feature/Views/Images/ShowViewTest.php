<?php

namespace Tests\Feature\Views\Images;

use App\Models\Image;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowViewTest extends TestCase
{
    use RefreshDatabase;

    public function test_show_view_rendered_when_user_is_login(): void
    {
        $image = Image::factory()->create();
        $comments = [];

        $view = (string)$this->actingAs(User::factory()->create())
            ->view(
                'images.show',
                compact('image', 'comments')
            );

        $dom = new \DomDocument();

        libxml_use_internal_errors(true);
        $dom->loadHTML($view);
        libxml_use_internal_errors(false);

        $dom = new \DOMXPath($dom);

        $action = route('comments.store', ['image' => $image->id]);

        $this->assertCount(
            1,
            $dom->query("//form[@method='post'][@action='$action']/textarea[@name='body']")
        );
    }

}
