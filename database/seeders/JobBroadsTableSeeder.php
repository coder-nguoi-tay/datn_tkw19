<?php

namespace Database\Seeders;

use App\Models\JobBroad;
use Illuminate\Database\Seeder;

class JobBroadsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        JobBroad::query()->truncate();
        \DB::table('job_broads')->insert([
            0 => [
                'id' => 1,
                'code' => 'A',
                'name' => '管理的職業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            1 => [
                'id' => 2,
                'code' => 'B',
                'name' => '専門的・技術的職業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            2 => [
                'id' => 3,
                'code' => 'C',
                'name' => '事務従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            3 => [
                'id' => 4,
                'code' => 'D',
                'name' => '販売従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            4 => [
                'id' => 5,
                'code' => 'E',
                'name' => 'サービス職業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            5 => [
                'id' => 6,
                'code' => 'F',
                'name' => '保安職業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            6 => [
                'id' => 7,
                'code' => 'G',
                'name' => '農林漁業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            7 => [
                'id' => 8,
                'code' => 'H',
                'name' => '生産工程従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            8 => [
                'id' => 9,
                'code' => 'I',
                'name' => '輸送・機械運転従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            9 => [
                'id' => 10,
                'code' => 'J',
                'name' => '建設・採掘従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            10 => [
                'id' => 11,
                'code' => 'K',
                'name' => '運搬・清掃・包装等従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
            11 => [
                'id' => 12,
                'code' => 'L',
                'name' => '分類不能の職業',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => null,
            ],
        ]);
    }
}
