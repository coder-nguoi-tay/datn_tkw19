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
        \DB::table('job_broads')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => 'A',
                'name' => '管理的職業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'code' => 'B',
                'name' => '専門的・技術的職業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'code' => 'C',
                'name' => '事務従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'code' => 'D',
                'name' => '販売従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'code' => 'E',
                'name' => 'サービス職業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'code' => 'F',
                'name' => '保安職業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'code' => 'G',
                'name' => '農林漁業従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'code' => 'H',
                'name' => '生産工程従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'code' => 'I',
                'name' => '輸送・機械運転従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'code' => 'J',
                'name' => '建設・採掘従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'code' => 'K',
                'name' => '運搬・清掃・包装等従事者',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'code' => 'L',
                'name' => '分類不能の職業',
                'created_at' => '2022-09-27 16:14:22',
                'updated_at' => '2022-09-27 16:14:22',
                'deleted_at' => NULL,
            ),
        ));


    }
}
