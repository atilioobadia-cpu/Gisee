<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_creates_user_and_returns_to_login_modal(): void
    {
        $response = $this->post(route('register.store'), [
            'signup_name' => 'New User',
            'signup_email' => 'new.user@example.com',
            'signup_password' => 'password123',
        ]);

        $response
            ->assertRedirect(route('home'))
            ->assertSessionHas('open_modal', 'auth')
            ->assertSessionHas('auth_mode', 'signin')
            ->assertSessionHas('toast_type', 'success');

        $this->assertGuest();
        $this->assertDatabaseHas(User::class, [
            'name' => 'New User',
            'email' => 'new.user@example.com',
        ]);
    }
}
