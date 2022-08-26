<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $system = new User();
        $system->name = 'admin';
        $system->email = 'admin@gmail.com';
        $system->password = Hash::make('12345678');
        $system->save();
    }
}
