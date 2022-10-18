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
        $arr = ['1 ngày', '1 tuần', '1 tháng','1 năm'];
        foreach ($arr as $value) {
            $system = new Timeoffer();
            $system->name = $value;
            $system->save();
        }

       
    }
}
