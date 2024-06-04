<?php

namespace Tests\Unit;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class LoginRequestTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that authentication is successful with valid credentials.
     *
     * @return void
     */
    public function test_it_authenticates_with_valid_credentials(): void
    {
        $user = User::factory()->create([
            'email' => 'tlubowitz@example.com',
            'password' => bcrypt('password'),
        ]);

        $request = new LoginRequest();

        $request->merge([
            'email' => 'tlubowitz@example.com',
            'password' => 'password',
        ]);

        $this->assertTrue($request->authenticate());

        $this->assertTrue(Auth::guard('web')->check());
    }

    /**
     * Test that a validation exception is thrown with invalid credentials.
     *
     * @return void
     */
    public function test_it_throws_validation_exception_with_invalid_credentials(): void
    {
        $this->expectException(ValidationException::class);

        $user = User::factory()->create([
            'email' => 'tlubowitz@example.com',
            'password' => 'password',
        ]);

        $request = new LoginRequest();

        $request->merge([
            'email' => 'tlubowitz@example.com',
            'password' => 'incorrect_password',
        ]);

        $request->authenticate();
    }
}
