<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_root()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_contact()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_about()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_profile()
    {
        $this->withoutMiddleware();
        
        $user = User::first();
        
        $response = $this->actingAs($user)->get('/profile');

        $response->assertStatus(200);
    }
}
