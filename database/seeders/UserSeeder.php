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
        $user = new User();
        $user->phone_number = '036278668';
        $user->email = 'dinhtu444@gmail.com';
        $user->show_name = 'dinhtu';
        $user->type = 1;
        $user->password = Hash::make('12345678');
        $user->save();
    }
}
