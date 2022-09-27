<?php

namespace Database\Seeders;

use App\Models\IndustryBroad;
use Illuminate\Database\Seeder;

class IndustryBroadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        IndustryBroad::query()->truncate();

        \DB::table('industry_broads')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => 'A',
                'name' => '農業，林業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'code' => 'B',
                'name' => '漁業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'code' => 'D',
                'name' => '建設業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'code' => 'E',
                'name' => '製造業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'code' => 'F',
                'name' => '電気・ガス・熱供給・水道業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'code' => 'G',
                'name' => '情報通信業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'code' => 'H',
                'name' => '運輸業，郵便業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'code' => 'I',
                'name' => '卸売業，小売業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'code' => 'J',
                'name' => '金融業，保険業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'code' => 'K',
                'name' => '不動産業，物品賃貸業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'code' => 'L',
                'name' => '学術研究，専門・技術サービス業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'code' => 'M',
                'name' => '宿泊業，飲食サービス業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'code' => 'N',
                'name' => '生活関連サービス業，娯楽業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'code' => 'O',
                'name' => '教育，学習支援業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'code' => 'P',
                'name' => '医療，福祉',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'code' => 'Q',
                'name' => '複合サービス事業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'code' => 'R',
                'name' => 'サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'code' => 'S',
                'name' => '公務（他に分類されるものを除く）',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => NULL,
            ),
        ));


    }
}
