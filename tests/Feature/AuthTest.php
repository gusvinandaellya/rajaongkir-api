<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_authenticate_a_user_and_return_token()
    {
        // Create a user
        $user = User::factory()->create([
            'email' => 'vina@rajaapi.com', // Replace with a valid email
            'password' => bcrypt(1234), // Replace with a valid password
        ]);

        // Make a POST request to the login endpoint
        $response = $this->post('/api/login', [
            'email' => 'vina@rajaapi.com', // Use the same email as the user you created
            'password' => 1234, // Use the same password as the user you created
        ]);

        // Ensure the response has a 200 status code
        $response->assertStatus(200);

        // Ensure the response contains a token
        $response->assertJsonStructure([
            'token',
        ]);
    }

    /** @test */
    public function it_returns_unauthorized_for_invalid_credentials()
    {
        // Make a POST request to the login endpoint with invalid credentials
        $response = $this->post('/api/login', [
            'email' => 'invalid@example.com', // Use an invalid email
            'password' => 'invalidpassword', // Use an invalid password
        ]);

        // Ensure the response has a 401 status code
        $response->assertStatus(401);

        // Ensure the response contains an 'Unauthorized' message
        $response->assertJson([
            'message' => 'Unauthorized',
        ]);
    }
}
