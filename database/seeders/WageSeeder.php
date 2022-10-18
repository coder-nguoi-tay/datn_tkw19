<?php

namespace Database\Seeders;

use App\Models\Wage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wage::query()->truncate();
        $arr = ['Dưới 3 triệu', '3 - 5 Triệu','5 - 7 Triệu','7 - 10 Triệu','10 - 12 Triệu','12 - 15 Triệu','15 - 20 Triệu','25 - 30 Triệu','Trên 30 Triệu','Thỏa Thuận'];
        foreach ($arr as $value) {
            $system = new Wage();
            $system->name = $value;
            $system->save();
        }
    }
}
