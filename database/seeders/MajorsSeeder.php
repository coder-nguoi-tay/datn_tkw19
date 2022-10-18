<?php

namespace Database\Seeders;

use App\Models\Majors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Majors::query()->truncate();
        $arr = ['Phát triển phầm mềm', 'Lập trình Web', 'Lập trình Mobile','Ứng dụng phần mềm','Xử lý dữ liệu'];
        foreach ($arr as $value) {
            $system = new Majors();
            $system->name = $value;
            $system->save();
        }
    }
}
