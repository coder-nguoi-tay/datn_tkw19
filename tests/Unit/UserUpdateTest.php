<?php

namespace Tests\Unit;

use Faker\Factory as Faker;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Str;

class UserUpdateTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::where('email', 'admin@gmail.com')->first();
        $this->user = User::where('email', '<>', 'admin@gmail.com')->first();
        $this->faker = Faker::create();
    }
    public function test_user_edit()
    {
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->get('/admin/user/' . $this->user->id . '/edit');
        $response->assertStatus(200);
    }
    public function test_user_put()
    {
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->put('/admin/user/' . $this->user->id, [
                'name' => '',
                'email' => '',
                'password' => '',
                'password_confirmation' => '',
            ]);
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('email');
    }
    public function test_max_length()
    {
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->put('/admin/user/' . $this->user->id, [
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
            ->put('/admin/user/' . $this->user->id, [
                'name' => $this->faker->name,
                'email' => $this->faker->name,
                'password' => $pass,
                'password_confirmation' => $pass
            ]);
        $response->assertSessionHasErrors('email');
    }
    public function test_email_exists()
    {
        if (User::where('id', '!=', 1)->first()) {
            $pass = Str::random(8);
            $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
                ->put('/admin/user/' . $this->user->id, [
                    'name' => $this->faker->name,
                    'email' => User::where('id', '!=', $this->user->id)->first(),
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
            ->put('/admin/user/' . $this->user->id, [
                'name' => $this->faker->name,
                'email' => $this->faker->email,
                'password' => Str::random(8),
                'password_confirmation' => Str::random(9)
            ]);
        $response->assertSessionHasErrors('password');
    }
    public function test_update_user()
    {
        $pass = Str::random(8);
        $email = $this->faker->email;
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->put('/admin/user/' . $this->user->id, [
                'name' => $this->faker->name,
                'email' => $email,
                'password' => $pass,
                'password_confirmation' => $pass
            ]);
        $response->assertRedirectContains('/admin/user');
        $this->assertDatabaseHas('user', ['email' => $email]);
    }
}
