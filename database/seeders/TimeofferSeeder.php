<?php

namespace Database\Seeders;

use App\Models\Timeoffer;
use Illuminate\Database\Seeder;

class TimeofferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timeoffer::query()->truncate();
        $arr = ['1 ngày', '7 ngày', '30 ngày', '365 ngày'];
        foreach ($arr as $value) {
            $system = new Timeoffer();
            $system->name = $value;
            $system->save();
        }
    }
}