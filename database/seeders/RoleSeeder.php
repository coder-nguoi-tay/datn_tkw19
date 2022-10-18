<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::query()->truncate();
        $arr = ['Người tìm việc', 'Công ty'];
        foreach ($arr as $value) {
            $system = new Role();
            $system->name = $value;
            $system->save();
        }
    }
}
