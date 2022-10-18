<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::query()->truncate();
        $arr = ['Fontend', 'Backend','Tester'];
        foreach ($arr as $value) {
            $system = new Profession();
            $system->name = $value;
            $system->save();
        }
    }
}
