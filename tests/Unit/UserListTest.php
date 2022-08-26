<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserListTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::where('email', 'admin@gmail.com')->first();
        $this->user = User::where('email', '<>', 'admin@gmail.com')->first();
    }
    public function test_get_list()
    {
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->get('/admin/user');
        $response->assertStatus(200);
    }
    public function test_search_list()
    {
        $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
            ->get('/admin/user', [
                'search_input' => 'search',
                'page' => '',
                'limit_page' => '',
            ]);
        $response->assertStatus(200);
    }
    public function test_delete_user()
    {
        if ($this->user) {
            $response = $this->actingAs($this->admin, 'admin')->withSession(['banned' => false])
                ->delete('/admin/user/' . $this->user->id, [
                    'search_input' => 'search',
                    'page' => '',
                    'limit_page' => '',
                ]);
            $response->assertStatus(200);
        }
    }
}
