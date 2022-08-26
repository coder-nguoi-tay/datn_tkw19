<?php

namespace Tests\Unit;

use Faker\Factory as Faker;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Str;

class UserCreateTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::where('email', 'admin@gmail.com')->first();
        $this->faker = Faker::create();
    }
    public function test_user_create()
    {
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->get('/admin/user/create');
        $response->assertStatus(200);
    }
    public function test_user_post()
    {
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->post('/admin/user', [
                'name' => '',
                'email' => '',
                'password' => '',
                'password_confirmation' => '',
            ]);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('email');
        $response->assertSessionHasErrors('password');
        $response->assertSessionHasErrors('password_confirmation');
    }
    public function test_max_length()
    {
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->post('/admin/user', [
                'name' => Str::random(256),
                'email' => Str::random(256),
                'password' => Str::random(256),
                'password_confirmation' => Str::random(256)
            ]);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('email');
        $response->assertSessionHasErrors('password');
    }
    public function test_email_format()
    {
        $pass = Str::random(8);
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->post('/admin/user', [
                'name' => $this->faker->name,
                'email' => $this->faker->name,
                'password' => $pass,
                'password_confirmation' => $pass
            ]);
        $response->assertSessionHasErrors('email');
    }
    public function test_email_exists()
    {
        if (User::first()) {
            $pass = Str::random(8);
            $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
                ->post('/admin/user', [
                    'name' => $this->faker->name,
                    'email' => User::first()->email,
                    'password' => $pass,
                    'password_confirmation' => $pass
                ]);
            $response->assertSessionHasErrors('email');
        }
    }
    public function test_pass_not_same()
    {
        $pass = Str::random(8);
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->post('/admin/user', [
                'name' => $this->faker->name,
                'email' => $this->faker->email,
                'password' => Str::random(8),
                'password_confirmation' => Str::random(9)
            ]);
        $response->assertSessionHasErrors('password');
    }
    public function test_store_user()
    {
        $pass = Str::random(8);
        $email = $this->faker->email;
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->post('/admin/user', [
                'name' => $this->faker->name,
                'email' => $email,
                'password' => $pass,
                'password_confirmation' => $pass
            ]);
        $response->assertRedirectContains('/admin/user');
        $this->assertDatabaseHas('user', ['email' => $email]);
    }
}
