<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::query()->truncate();
        $arr = ['北海道・東北エリア', '関東エリア', '中部エリア', '近畿エリア', '中国・四国エリア', '九州エリア'];
        foreach ($arr as $key => $value) {
            $area = new Area();
            $area->name = $value;
            $area->order_num = $key + 1;
            $area->save();
        }
    }
}
