<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_access_dashboard()
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->get('/dashboard');

        $response->assertStatus(200);  // Mengharapkan respons berhasil (status 200)
    }

    /** @test */
    public function non_admin_cannot_access_dashboard()
    {
        $user = User::factory()->create(['role' => 'user']);

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertRedirect('/login');  // Mengharapkan redirect ke halaman login
    }

    /** @test */
    public function guest_is_redirected_to_login()
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');  // Mengharapkan redirect ke halaman login
    }
}
