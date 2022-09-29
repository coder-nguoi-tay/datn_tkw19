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

        \DB::table('industry_broads')->insert([
            0 => [
                'id' => 1,
                'code' => 'A',
                'name' => '農業，林業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            1 => [
                'id' => 2,
                'code' => 'B',
                'name' => '漁業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            2 => [
                'id' => 3,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            3 => [
                'id' => 4,
                'code' => 'D',
                'name' => '建設業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            4 => [
                'id' => 5,
                'code' => 'E',
                'name' => '製造業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            5 => [
                'id' => 6,
                'code' => 'F',
                'name' => '電気・ガス・熱供給・水道業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            6 => [
                'id' => 7,
                'code' => 'G',
                'name' => '情報通信業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            7 => [
                'id' => 8,
                'code' => 'H',
                'name' => '運輸業，郵便業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            8 => [
                'id' => 9,
                'code' => 'I',
                'name' => '卸売業，小売業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            9 => [
                'id' => 10,
                'code' => 'J',
                'name' => '金融業，保険業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            10 => [
                'id' => 11,
                'code' => 'K',
                'name' => '不動産業，物品賃貸業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            11 => [
                'id' => 12,
                'code' => 'L',
                'name' => '学術研究，専門・技術サービス業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            12 => [
                'id' => 13,
                'code' => 'M',
                'name' => '宿泊業，飲食サービス業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            13 => [
                'id' => 14,
                'code' => 'N',
                'name' => '生活関連サービス業，娯楽業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            14 => [
                'id' => 15,
                'code' => 'O',
                'name' => '教育，学習支援業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            15 => [
                'id' => 16,
                'code' => 'P',
                'name' => '医療，福祉',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            16 => [
                'id' => 17,
                'code' => 'Q',
                'name' => '複合サービス事業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            17 => [
                'id' => 18,
                'code' => 'R',
                'name' => 'サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            18 => [
                'id' => 19,
                'code' => 'S',
                'name' => '公務（他に分類されるものを除く）',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
            19 => [
                'id' => 20,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:29:29',
                'updated_at' => '2022-09-27 16:29:29',
                'deleted_at' => null,
            ],
        ]);
    }
}
