<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $system = new Admin();
        $system->name = 'admin';
        $system->email = 'admin@gmail.com';
        $system->password = Hash::make('12345678');
        $system->role = 2;
        $system->save();
    }
}