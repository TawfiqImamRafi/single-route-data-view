<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    /* Test that the user data is displayed correctly on the user list page */
    public function testUserListData()
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone_number' => '555-1234'
        ]);

        User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'phone_number' => '555-5678'
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('John Doe');
        $response->assertSee('johndoe@example.com');
        $response->assertSee('555-1234');
        $response->assertSee('Jane Doe');
        $response->assertSee('janedoe@example.com');
        $response->assertSee('555-5678');
    }

    /* Test that the user list page displays correctly */
    public function testUserListPage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Name');
        $response->assertSee('Email');
        $response->assertSee('Phone Number');
    }
}
