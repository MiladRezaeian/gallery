<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use DatabaseMigrations, WithFaker;

    /**
     * Test that a registered user can successfully login.
     *
     * @return void
     */
    public function test_it_can_login_a_registered_user()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $response = $this->post(route('login.authenticate'), [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect();
        $this->assertTrue(Auth::check());
    }
}
