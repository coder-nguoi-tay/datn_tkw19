<?php

namespace Database\Seeders;

use App\Models\Lever;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lever::query()->truncate();
        $arr = ['Tất cả', 'Đại học', 'Cao đẳng'];
        foreach ($arr as $value) {
            $system = new Lever();
            $system->name = $value;
            $system->save();
        }
    }
}
