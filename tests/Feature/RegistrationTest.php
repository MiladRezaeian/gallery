<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use DatabaseMigrations, WithFaker;

    /**
     * Test that a new user can be registered.
     *
     * @return void
     */
    public function test_it_can_register_a_new_user()
    {
        $name = $this->faker->name;
        $email = $this->faker->unique()->safeEmail;
        $password = 'password';

        $response = $this->post(route('register'), [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('users', [
            'name' => $name,
            'email' => $email,
        ]);
    }

    /**
     * Test that successful registration redirects to the intended page.
     *
     * @return void
     */
    public function test_it_redirects_to_intended_page_after_successful_registration()
    {
        $response = $this->followingRedirects()->post(route('register'), [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertOk()->assertSee('Registration successful! Welcome aboard.');
        $this->assertTrue(Auth::check());
    }
}
