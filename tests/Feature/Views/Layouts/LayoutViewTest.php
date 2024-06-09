<?php

namespace Tests\Feature\Views\Layouts;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LayoutViewTest extends TestCase
{
    use RefreshDatabase;

    public function test_layout_view_rendered_when_user_is_login(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $view = $this->view('layouts.layout');

        $view->assertSee('<i class="fa fa-sign-out color-4"></i>Logout</a></li>', false);
    }

    public function test_layout_view_rendered_when_user_is_not_login(): void
    {
        $view = $this->view('layouts.layout');

        $view->assertDontSee('<i class="fa fa-sign-out color-4"></i>Logout</a></li>', false);
    }
}
