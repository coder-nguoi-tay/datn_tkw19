<?php

namespace Database\Seeders;

use App\Models\LeverPackage;
use Illuminate\Database\Seeder;

class LeverPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeverPackage::query()->truncate();
        $arr = ['VIP 1', 'VIP 2', 'VIP 3'];
        foreach ($arr as $value) {
            $system = new LeverPackage();
            $system->name = $value;
            $system->save();
        }
    }
}