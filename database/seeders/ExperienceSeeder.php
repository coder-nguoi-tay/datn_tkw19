<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::query()->truncate();
        $arr = ['Chưa có kinh nghiệm', 'Từ 1 - 2 năm', 'Từ 3 - 4 năm','Từ 4 - 5 năm','Trên 5 năm kinh nghiệm'];
        foreach ($arr as $value) {
            $system = new Experience();
            $system->name = $value;
            $system->save();
        }
    }
}
