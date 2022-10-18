<?php

namespace Database\Seeders;

use App\Models\Timework;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timework::query()->truncate();
        $arr = ['PartTime', 'FullTime','Freelance'];
        foreach ($arr as $value) {
            $system = new Timework();
            $system->name = $value;
            $system->save();
        }
    }
}
