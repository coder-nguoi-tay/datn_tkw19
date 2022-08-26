<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_require_param()
    {
        $response = $this->post('/login', [
            'email' => '',
            'passsword' => '',
        ]);
        $response->assertSessionHasErrors('email');
        $response->assertSessionHasErrors('password');
    }

    public function test_post_login()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => '12345678',
        ]);
        $response->assertRedirectContains('/admin/dashboard');
    }
    public function test_post_login_wrong()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => '123456789',
        ]);
        $response->assertRedirectContains('/login');
    }
}
