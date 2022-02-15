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

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dashboard()
    {
        $this->withoutMiddleware();
        
        $user = User::first();
        
        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_doubts()
    {
        $this->withoutMiddleware();
        
        $user = User::first();
        
        $response = $this->actingAs($user)->get('/doubts');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_question()
    {
        $this->withoutMiddleware();
        
        $user = User::first();
        
        $response = $this->actingAs($user)->get('/question');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_question_list()
    {
        $this->withoutMiddleware();
        
        $user = User::first();
        
        $response = $this->actingAs($user)->get('/question-list');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_doubts_user()
    {
        $this->withoutMiddleware();
        
        $user = User::first();
        
        $response = $this->actingAs($user)->get('/doubts/user');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_senddoubt()
    {
        $this->withoutMiddleware();
        
        $user = User::first();
        
        $response = $this->actingAs($user)->post('/senddoubt', [
            "teacher" => 1, 
            "subject" => "Prova", 
            "message" => "Prova"
        ]);

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_users()
    {
        $this->withoutMiddleware();
        
        $user = User::first();
        
        $response = $this->actingAs($user)->get('/users');

        $response->assertStatus(200);
    }
}
