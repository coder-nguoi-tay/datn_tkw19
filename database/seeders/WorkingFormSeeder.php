<?php

namespace Database\Seeders;

use App\Models\WorkingForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkingFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkingForm::query()->truncate();
        $arr = ['Nhân viên', 'TTS'];
        foreach ($arr as $value) {
            $system = new WorkingForm();
            $system->name = $value;
            $system->save();
        }
    }
}
