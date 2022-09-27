<?php

namespace Database\Seeders;

use App\Models\IndustryMiddle;
use Illuminate\Database\Seeder;

class IndustryMiddlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        IndustryMiddle::query()->truncate();

        \DB::table('industry_middles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'industry_broad_id' => 1,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'industry_broad_id' => 1,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'industry_broad_id' => 1,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'industry_broad_id' => 1,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'industry_broad_id' => 1,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'industry_broad_id' => 1,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'industry_broad_id' => 1,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'industry_broad_id' => 1,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'industry_broad_id' => 1,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'industry_broad_id' => 1,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'industry_broad_id' => 1,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'industry_broad_id' => 1,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'industry_broad_id' => 1,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'industry_broad_id' => 1,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'industry_broad_id' => 1,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'industry_broad_id' => 1,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'industry_broad_id' => 1,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'industry_broad_id' => 1,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'industry_broad_id' => 1,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'industry_broad_id' => 1,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'industry_broad_id' => 1,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'industry_broad_id' => 1,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'industry_broad_id' => 1,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'industry_broad_id' => 1,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'industry_broad_id' => 1,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'industry_broad_id' => 1,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            50 =>
            array (
                'id' => 51,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            51 =>
            array (
                'id' => 52,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            52 =>
            array (
                'id' => 53,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            56 =>
            array (
                'id' => 57,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            57 =>
            array (
                'id' => 58,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            58 =>
            array (
                'id' => 59,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            59 =>
            array (
                'id' => 60,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            60 =>
            array (
                'id' => 61,
                'industry_broad_id' => 1,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            61 =>
            array (
                'id' => 62,
                'industry_broad_id' => 1,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            62 =>
            array (
                'id' => 63,
                'industry_broad_id' => 1,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            63 =>
            array (
                'id' => 64,
                'industry_broad_id' => 1,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            64 =>
            array (
                'id' => 65,
                'industry_broad_id' => 1,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            65 =>
            array (
                'id' => 66,
                'industry_broad_id' => 1,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            66 =>
            array (
                'id' => 67,
                'industry_broad_id' => 1,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            67 =>
            array (
                'id' => 68,
                'industry_broad_id' => 1,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            68 =>
            array (
                'id' => 69,
                'industry_broad_id' => 1,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            69 =>
            array (
                'id' => 70,
                'industry_broad_id' => 1,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            70 =>
            array (
                'id' => 71,
                'industry_broad_id' => 1,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            71 =>
            array (
                'id' => 72,
                'industry_broad_id' => 1,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            72 =>
            array (
                'id' => 73,
                'industry_broad_id' => 1,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            73 =>
            array (
                'id' => 74,
                'industry_broad_id' => 1,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            74 =>
            array (
                'id' => 75,
                'industry_broad_id' => 1,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            75 =>
            array (
                'id' => 76,
                'industry_broad_id' => 1,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            76 =>
            array (
                'id' => 77,
                'industry_broad_id' => 1,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            77 =>
            array (
                'id' => 78,
                'industry_broad_id' => 1,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            78 =>
            array (
                'id' => 79,
                'industry_broad_id' => 1,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            79 =>
            array (
                'id' => 80,
                'industry_broad_id' => 1,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            80 =>
            array (
                'id' => 81,
                'industry_broad_id' => 1,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            81 =>
            array (
                'id' => 82,
                'industry_broad_id' => 1,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            82 =>
            array (
                'id' => 83,
                'industry_broad_id' => 1,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            83 =>
            array (
                'id' => 84,
                'industry_broad_id' => 1,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            84 =>
            array (
                'id' => 85,
                'industry_broad_id' => 1,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            85 =>
            array (
                'id' => 86,
                'industry_broad_id' => 1,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            86 =>
            array (
                'id' => 87,
                'industry_broad_id' => 1,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            87 =>
            array (
                'id' => 88,
                'industry_broad_id' => 1,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            88 =>
            array (
                'id' => 89,
                'industry_broad_id' => 1,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            89 =>
            array (
                'id' => 90,
                'industry_broad_id' => 1,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            90 =>
            array (
                'id' => 91,
                'industry_broad_id' => 1,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            91 =>
            array (
                'id' => 92,
                'industry_broad_id' => 1,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            92 =>
            array (
                'id' => 93,
                'industry_broad_id' => 1,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            93 =>
            array (
                'id' => 94,
                'industry_broad_id' => 1,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            94 =>
            array (
                'id' => 95,
                'industry_broad_id' => 1,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            95 =>
            array (
                'id' => 96,
                'industry_broad_id' => 1,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            96 =>
            array (
                'id' => 97,
                'industry_broad_id' => 1,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            97 =>
            array (
                'id' => 98,
                'industry_broad_id' => 1,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            98 =>
            array (
                'id' => 99,
                'industry_broad_id' => 1,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:16',
                'updated_at' => '2022-09-27 16:33:16',
                'deleted_at' => NULL,
            ),
            99 =>
            array (
                'id' => 100,
                'industry_broad_id' => 2,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            100 =>
            array (
                'id' => 101,
                'industry_broad_id' => 2,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            101 =>
            array (
                'id' => 102,
                'industry_broad_id' => 2,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            102 =>
            array (
                'id' => 103,
                'industry_broad_id' => 2,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            103 =>
            array (
                'id' => 104,
                'industry_broad_id' => 2,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            104 =>
            array (
                'id' => 105,
                'industry_broad_id' => 2,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            105 =>
            array (
                'id' => 106,
                'industry_broad_id' => 2,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            106 =>
            array (
                'id' => 107,
                'industry_broad_id' => 2,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            107 =>
            array (
                'id' => 108,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            108 =>
            array (
                'id' => 109,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            110 =>
            array (
                'id' => 111,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            111 =>
            array (
                'id' => 112,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            112 =>
            array (
                'id' => 113,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            113 =>
            array (
                'id' => 114,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            114 =>
            array (
                'id' => 115,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            115 =>
            array (
                'id' => 116,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            116 =>
            array (
                'id' => 117,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            117 =>
            array (
                'id' => 118,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            118 =>
            array (
                'id' => 119,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            119 =>
            array (
                'id' => 120,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            120 =>
            array (
                'id' => 121,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            121 =>
            array (
                'id' => 122,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            122 =>
            array (
                'id' => 123,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            123 =>
            array (
                'id' => 124,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            124 =>
            array (
                'id' => 125,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            125 =>
            array (
                'id' => 126,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            126 =>
            array (
                'id' => 127,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            127 =>
            array (
                'id' => 128,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            128 =>
            array (
                'id' => 129,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            129 =>
            array (
                'id' => 130,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            130 =>
            array (
                'id' => 131,
                'industry_broad_id' => 2,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            131 =>
            array (
                'id' => 132,
                'industry_broad_id' => 2,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            132 =>
            array (
                'id' => 133,
                'industry_broad_id' => 2,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            133 =>
            array (
                'id' => 134,
                'industry_broad_id' => 2,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            134 =>
            array (
                'id' => 135,
                'industry_broad_id' => 2,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            135 =>
            array (
                'id' => 136,
                'industry_broad_id' => 2,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            136 =>
            array (
                'id' => 137,
                'industry_broad_id' => 2,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            137 =>
            array (
                'id' => 138,
                'industry_broad_id' => 2,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            138 =>
            array (
                'id' => 139,
                'industry_broad_id' => 2,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            139 =>
            array (
                'id' => 140,
                'industry_broad_id' => 2,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            140 =>
            array (
                'id' => 141,
                'industry_broad_id' => 2,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            141 =>
            array (
                'id' => 142,
                'industry_broad_id' => 2,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            142 =>
            array (
                'id' => 143,
                'industry_broad_id' => 2,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            143 =>
            array (
                'id' => 144,
                'industry_broad_id' => 2,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            144 =>
            array (
                'id' => 145,
                'industry_broad_id' => 2,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            145 =>
            array (
                'id' => 146,
                'industry_broad_id' => 2,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            146 =>
            array (
                'id' => 147,
                'industry_broad_id' => 2,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            147 =>
            array (
                'id' => 148,
                'industry_broad_id' => 2,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            148 =>
            array (
                'id' => 149,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            149 =>
            array (
                'id' => 150,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            150 =>
            array (
                'id' => 151,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            151 =>
            array (
                'id' => 152,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            152 =>
            array (
                'id' => 153,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            153 =>
            array (
                'id' => 154,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            154 =>
            array (
                'id' => 155,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            155 =>
            array (
                'id' => 156,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            156 =>
            array (
                'id' => 157,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            157 =>
            array (
                'id' => 158,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            158 =>
            array (
                'id' => 159,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            159 =>
            array (
                'id' => 160,
                'industry_broad_id' => 2,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            160 =>
            array (
                'id' => 161,
                'industry_broad_id' => 2,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            161 =>
            array (
                'id' => 162,
                'industry_broad_id' => 2,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            162 =>
            array (
                'id' => 163,
                'industry_broad_id' => 2,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            163 =>
            array (
                'id' => 164,
                'industry_broad_id' => 2,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            164 =>
            array (
                'id' => 165,
                'industry_broad_id' => 2,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            165 =>
            array (
                'id' => 166,
                'industry_broad_id' => 2,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            166 =>
            array (
                'id' => 167,
                'industry_broad_id' => 2,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            167 =>
            array (
                'id' => 168,
                'industry_broad_id' => 2,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            168 =>
            array (
                'id' => 169,
                'industry_broad_id' => 2,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            169 =>
            array (
                'id' => 170,
                'industry_broad_id' => 2,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            170 =>
            array (
                'id' => 171,
                'industry_broad_id' => 2,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            171 =>
            array (
                'id' => 172,
                'industry_broad_id' => 2,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            172 =>
            array (
                'id' => 173,
                'industry_broad_id' => 2,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            173 =>
            array (
                'id' => 174,
                'industry_broad_id' => 2,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            174 =>
            array (
                'id' => 175,
                'industry_broad_id' => 2,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            175 =>
            array (
                'id' => 176,
                'industry_broad_id' => 2,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            176 =>
            array (
                'id' => 177,
                'industry_broad_id' => 2,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            177 =>
            array (
                'id' => 178,
                'industry_broad_id' => 2,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            178 =>
            array (
                'id' => 179,
                'industry_broad_id' => 2,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            179 =>
            array (
                'id' => 180,
                'industry_broad_id' => 2,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            180 =>
            array (
                'id' => 181,
                'industry_broad_id' => 2,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            181 =>
            array (
                'id' => 182,
                'industry_broad_id' => 2,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            182 =>
            array (
                'id' => 183,
                'industry_broad_id' => 2,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            183 =>
            array (
                'id' => 184,
                'industry_broad_id' => 2,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            184 =>
            array (
                'id' => 185,
                'industry_broad_id' => 2,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            185 =>
            array (
                'id' => 186,
                'industry_broad_id' => 2,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            186 =>
            array (
                'id' => 187,
                'industry_broad_id' => 2,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            187 =>
            array (
                'id' => 188,
                'industry_broad_id' => 2,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            188 =>
            array (
                'id' => 189,
                'industry_broad_id' => 2,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            189 =>
            array (
                'id' => 190,
                'industry_broad_id' => 2,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            190 =>
            array (
                'id' => 191,
                'industry_broad_id' => 2,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            191 =>
            array (
                'id' => 192,
                'industry_broad_id' => 2,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            192 =>
            array (
                'id' => 193,
                'industry_broad_id' => 2,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            193 =>
            array (
                'id' => 194,
                'industry_broad_id' => 2,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            194 =>
            array (
                'id' => 195,
                'industry_broad_id' => 2,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            195 =>
            array (
                'id' => 196,
                'industry_broad_id' => 2,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            196 =>
            array (
                'id' => 197,
                'industry_broad_id' => 2,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            197 =>
            array (
                'id' => 198,
                'industry_broad_id' => 2,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:17',
                'updated_at' => '2022-09-27 16:33:17',
                'deleted_at' => NULL,
            ),
            198 =>
            array (
                'id' => 199,
                'industry_broad_id' => 3,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            199 =>
            array (
                'id' => 200,
                'industry_broad_id' => 3,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            200 =>
            array (
                'id' => 201,
                'industry_broad_id' => 3,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            201 =>
            array (
                'id' => 202,
                'industry_broad_id' => 3,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            202 =>
            array (
                'id' => 203,
                'industry_broad_id' => 3,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            203 =>
            array (
                'id' => 204,
                'industry_broad_id' => 3,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            204 =>
            array (
                'id' => 205,
                'industry_broad_id' => 3,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            205 =>
            array (
                'id' => 206,
                'industry_broad_id' => 3,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            206 =>
            array (
                'id' => 207,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            207 =>
            array (
                'id' => 208,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            208 =>
            array (
                'id' => 209,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            209 =>
            array (
                'id' => 210,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            210 =>
            array (
                'id' => 211,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            211 =>
            array (
                'id' => 212,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            212 =>
            array (
                'id' => 213,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            213 =>
            array (
                'id' => 214,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            214 =>
            array (
                'id' => 215,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            215 =>
            array (
                'id' => 216,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            216 =>
            array (
                'id' => 217,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            217 =>
            array (
                'id' => 218,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            218 =>
            array (
                'id' => 219,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            219 =>
            array (
                'id' => 220,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            220 =>
            array (
                'id' => 221,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            221 =>
            array (
                'id' => 222,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            222 =>
            array (
                'id' => 223,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            223 =>
            array (
                'id' => 224,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            224 =>
            array (
                'id' => 225,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            225 =>
            array (
                'id' => 226,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            226 =>
            array (
                'id' => 227,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            227 =>
            array (
                'id' => 228,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            228 =>
            array (
                'id' => 229,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            229 =>
            array (
                'id' => 230,
                'industry_broad_id' => 3,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            230 =>
            array (
                'id' => 231,
                'industry_broad_id' => 3,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            231 =>
            array (
                'id' => 232,
                'industry_broad_id' => 3,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            232 =>
            array (
                'id' => 233,
                'industry_broad_id' => 3,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            233 =>
            array (
                'id' => 234,
                'industry_broad_id' => 3,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            234 =>
            array (
                'id' => 235,
                'industry_broad_id' => 3,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            235 =>
            array (
                'id' => 236,
                'industry_broad_id' => 3,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            236 =>
            array (
                'id' => 237,
                'industry_broad_id' => 3,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            237 =>
            array (
                'id' => 238,
                'industry_broad_id' => 3,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            238 =>
            array (
                'id' => 239,
                'industry_broad_id' => 3,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            239 =>
            array (
                'id' => 240,
                'industry_broad_id' => 3,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            240 =>
            array (
                'id' => 241,
                'industry_broad_id' => 3,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            241 =>
            array (
                'id' => 242,
                'industry_broad_id' => 3,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            242 =>
            array (
                'id' => 243,
                'industry_broad_id' => 3,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            243 =>
            array (
                'id' => 244,
                'industry_broad_id' => 3,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            244 =>
            array (
                'id' => 245,
                'industry_broad_id' => 3,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            245 =>
            array (
                'id' => 246,
                'industry_broad_id' => 3,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            246 =>
            array (
                'id' => 247,
                'industry_broad_id' => 3,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            247 =>
            array (
                'id' => 248,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            248 =>
            array (
                'id' => 249,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            249 =>
            array (
                'id' => 250,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            250 =>
            array (
                'id' => 251,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            251 =>
            array (
                'id' => 252,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            252 =>
            array (
                'id' => 253,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            253 =>
            array (
                'id' => 254,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            254 =>
            array (
                'id' => 255,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            255 =>
            array (
                'id' => 256,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            256 =>
            array (
                'id' => 257,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            257 =>
            array (
                'id' => 258,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            258 =>
            array (
                'id' => 259,
                'industry_broad_id' => 3,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            259 =>
            array (
                'id' => 260,
                'industry_broad_id' => 3,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            260 =>
            array (
                'id' => 261,
                'industry_broad_id' => 3,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            261 =>
            array (
                'id' => 262,
                'industry_broad_id' => 3,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            262 =>
            array (
                'id' => 263,
                'industry_broad_id' => 3,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            263 =>
            array (
                'id' => 264,
                'industry_broad_id' => 3,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            264 =>
            array (
                'id' => 265,
                'industry_broad_id' => 3,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            265 =>
            array (
                'id' => 266,
                'industry_broad_id' => 3,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            266 =>
            array (
                'id' => 267,
                'industry_broad_id' => 3,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            267 =>
            array (
                'id' => 268,
                'industry_broad_id' => 3,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            268 =>
            array (
                'id' => 269,
                'industry_broad_id' => 3,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            269 =>
            array (
                'id' => 270,
                'industry_broad_id' => 3,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            270 =>
            array (
                'id' => 271,
                'industry_broad_id' => 3,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            271 =>
            array (
                'id' => 272,
                'industry_broad_id' => 3,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            272 =>
            array (
                'id' => 273,
                'industry_broad_id' => 3,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            273 =>
            array (
                'id' => 274,
                'industry_broad_id' => 3,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            274 =>
            array (
                'id' => 275,
                'industry_broad_id' => 3,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            275 =>
            array (
                'id' => 276,
                'industry_broad_id' => 3,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            276 =>
            array (
                'id' => 277,
                'industry_broad_id' => 3,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            277 =>
            array (
                'id' => 278,
                'industry_broad_id' => 3,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            278 =>
            array (
                'id' => 279,
                'industry_broad_id' => 3,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            279 =>
            array (
                'id' => 280,
                'industry_broad_id' => 3,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            280 =>
            array (
                'id' => 281,
                'industry_broad_id' => 3,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            281 =>
            array (
                'id' => 282,
                'industry_broad_id' => 3,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            282 =>
            array (
                'id' => 283,
                'industry_broad_id' => 3,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            283 =>
            array (
                'id' => 284,
                'industry_broad_id' => 3,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            284 =>
            array (
                'id' => 285,
                'industry_broad_id' => 3,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            285 =>
            array (
                'id' => 286,
                'industry_broad_id' => 3,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            286 =>
            array (
                'id' => 287,
                'industry_broad_id' => 3,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            287 =>
            array (
                'id' => 288,
                'industry_broad_id' => 3,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            288 =>
            array (
                'id' => 289,
                'industry_broad_id' => 3,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            289 =>
            array (
                'id' => 290,
                'industry_broad_id' => 3,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            290 =>
            array (
                'id' => 291,
                'industry_broad_id' => 3,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            291 =>
            array (
                'id' => 292,
                'industry_broad_id' => 3,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            292 =>
            array (
                'id' => 293,
                'industry_broad_id' => 3,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            293 =>
            array (
                'id' => 294,
                'industry_broad_id' => 3,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            294 =>
            array (
                'id' => 295,
                'industry_broad_id' => 3,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            295 =>
            array (
                'id' => 296,
                'industry_broad_id' => 3,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            296 =>
            array (
                'id' => 297,
                'industry_broad_id' => 3,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            297 =>
            array (
                'id' => 298,
                'industry_broad_id' => 4,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            298 =>
            array (
                'id' => 299,
                'industry_broad_id' => 4,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            299 =>
            array (
                'id' => 300,
                'industry_broad_id' => 4,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            300 =>
            array (
                'id' => 301,
                'industry_broad_id' => 4,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            301 =>
            array (
                'id' => 302,
                'industry_broad_id' => 4,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            302 =>
            array (
                'id' => 303,
                'industry_broad_id' => 4,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            303 =>
            array (
                'id' => 304,
                'industry_broad_id' => 4,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            304 =>
            array (
                'id' => 305,
                'industry_broad_id' => 4,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            305 =>
            array (
                'id' => 306,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            306 =>
            array (
                'id' => 307,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            307 =>
            array (
                'id' => 308,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            308 =>
            array (
                'id' => 309,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            309 =>
            array (
                'id' => 310,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            310 =>
            array (
                'id' => 311,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            311 =>
            array (
                'id' => 312,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            312 =>
            array (
                'id' => 313,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            313 =>
            array (
                'id' => 314,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            314 =>
            array (
                'id' => 315,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            315 =>
            array (
                'id' => 316,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            316 =>
            array (
                'id' => 317,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            317 =>
            array (
                'id' => 318,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            318 =>
            array (
                'id' => 319,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            319 =>
            array (
                'id' => 320,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            320 =>
            array (
                'id' => 321,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            321 =>
            array (
                'id' => 322,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            322 =>
            array (
                'id' => 323,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            323 =>
            array (
                'id' => 324,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            324 =>
            array (
                'id' => 325,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            325 =>
            array (
                'id' => 326,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            326 =>
            array (
                'id' => 327,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            327 =>
            array (
                'id' => 328,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            328 =>
            array (
                'id' => 329,
                'industry_broad_id' => 4,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            329 =>
            array (
                'id' => 330,
                'industry_broad_id' => 4,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            330 =>
            array (
                'id' => 331,
                'industry_broad_id' => 4,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            331 =>
            array (
                'id' => 332,
                'industry_broad_id' => 4,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            332 =>
            array (
                'id' => 333,
                'industry_broad_id' => 4,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            333 =>
            array (
                'id' => 334,
                'industry_broad_id' => 4,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            334 =>
            array (
                'id' => 335,
                'industry_broad_id' => 4,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            335 =>
            array (
                'id' => 336,
                'industry_broad_id' => 4,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            336 =>
            array (
                'id' => 337,
                'industry_broad_id' => 4,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            337 =>
            array (
                'id' => 338,
                'industry_broad_id' => 4,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            338 =>
            array (
                'id' => 339,
                'industry_broad_id' => 4,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            339 =>
            array (
                'id' => 340,
                'industry_broad_id' => 4,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            340 =>
            array (
                'id' => 341,
                'industry_broad_id' => 4,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            341 =>
            array (
                'id' => 342,
                'industry_broad_id' => 4,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            342 =>
            array (
                'id' => 343,
                'industry_broad_id' => 4,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            343 =>
            array (
                'id' => 344,
                'industry_broad_id' => 4,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            344 =>
            array (
                'id' => 345,
                'industry_broad_id' => 4,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            345 =>
            array (
                'id' => 346,
                'industry_broad_id' => 4,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            346 =>
            array (
                'id' => 347,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            347 =>
            array (
                'id' => 348,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            348 =>
            array (
                'id' => 349,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            349 =>
            array (
                'id' => 350,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            350 =>
            array (
                'id' => 351,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            351 =>
            array (
                'id' => 352,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            352 =>
            array (
                'id' => 353,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            353 =>
            array (
                'id' => 354,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            354 =>
            array (
                'id' => 355,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            355 =>
            array (
                'id' => 356,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            356 =>
            array (
                'id' => 357,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            357 =>
            array (
                'id' => 358,
                'industry_broad_id' => 4,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            358 =>
            array (
                'id' => 359,
                'industry_broad_id' => 4,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            359 =>
            array (
                'id' => 360,
                'industry_broad_id' => 4,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            360 =>
            array (
                'id' => 361,
                'industry_broad_id' => 4,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            361 =>
            array (
                'id' => 362,
                'industry_broad_id' => 4,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            362 =>
            array (
                'id' => 363,
                'industry_broad_id' => 4,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            363 =>
            array (
                'id' => 364,
                'industry_broad_id' => 4,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            364 =>
            array (
                'id' => 365,
                'industry_broad_id' => 4,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            365 =>
            array (
                'id' => 366,
                'industry_broad_id' => 4,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            366 =>
            array (
                'id' => 367,
                'industry_broad_id' => 4,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            367 =>
            array (
                'id' => 368,
                'industry_broad_id' => 4,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            368 =>
            array (
                'id' => 369,
                'industry_broad_id' => 4,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            369 =>
            array (
                'id' => 370,
                'industry_broad_id' => 4,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            370 =>
            array (
                'id' => 371,
                'industry_broad_id' => 4,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            371 =>
            array (
                'id' => 372,
                'industry_broad_id' => 4,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            372 =>
            array (
                'id' => 373,
                'industry_broad_id' => 4,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            373 =>
            array (
                'id' => 374,
                'industry_broad_id' => 4,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            374 =>
            array (
                'id' => 375,
                'industry_broad_id' => 4,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            375 =>
            array (
                'id' => 376,
                'industry_broad_id' => 4,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            376 =>
            array (
                'id' => 377,
                'industry_broad_id' => 4,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            377 =>
            array (
                'id' => 378,
                'industry_broad_id' => 4,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            378 =>
            array (
                'id' => 379,
                'industry_broad_id' => 4,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            379 =>
            array (
                'id' => 380,
                'industry_broad_id' => 4,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            380 =>
            array (
                'id' => 381,
                'industry_broad_id' => 4,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            381 =>
            array (
                'id' => 382,
                'industry_broad_id' => 4,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            382 =>
            array (
                'id' => 383,
                'industry_broad_id' => 4,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            383 =>
            array (
                'id' => 384,
                'industry_broad_id' => 4,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            384 =>
            array (
                'id' => 385,
                'industry_broad_id' => 4,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            385 =>
            array (
                'id' => 386,
                'industry_broad_id' => 4,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            386 =>
            array (
                'id' => 387,
                'industry_broad_id' => 4,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            387 =>
            array (
                'id' => 388,
                'industry_broad_id' => 4,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            388 =>
            array (
                'id' => 389,
                'industry_broad_id' => 4,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            389 =>
            array (
                'id' => 390,
                'industry_broad_id' => 4,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            390 =>
            array (
                'id' => 391,
                'industry_broad_id' => 4,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            391 =>
            array (
                'id' => 392,
                'industry_broad_id' => 4,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            392 =>
            array (
                'id' => 393,
                'industry_broad_id' => 4,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            393 =>
            array (
                'id' => 394,
                'industry_broad_id' => 4,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            394 =>
            array (
                'id' => 395,
                'industry_broad_id' => 4,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            395 =>
            array (
                'id' => 396,
                'industry_broad_id' => 4,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:18',
                'updated_at' => '2022-09-27 16:33:18',
                'deleted_at' => NULL,
            ),
            396 =>
            array (
                'id' => 397,
                'industry_broad_id' => 5,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            397 =>
            array (
                'id' => 398,
                'industry_broad_id' => 5,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            398 =>
            array (
                'id' => 399,
                'industry_broad_id' => 5,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            399 =>
            array (
                'id' => 400,
                'industry_broad_id' => 5,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            400 =>
            array (
                'id' => 401,
                'industry_broad_id' => 5,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            401 =>
            array (
                'id' => 402,
                'industry_broad_id' => 5,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            402 =>
            array (
                'id' => 403,
                'industry_broad_id' => 5,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            403 =>
            array (
                'id' => 404,
                'industry_broad_id' => 5,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            404 =>
            array (
                'id' => 405,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            405 =>
            array (
                'id' => 406,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            406 =>
            array (
                'id' => 407,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            407 =>
            array (
                'id' => 408,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            408 =>
            array (
                'id' => 409,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            409 =>
            array (
                'id' => 410,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            410 =>
            array (
                'id' => 411,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            411 =>
            array (
                'id' => 412,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            412 =>
            array (
                'id' => 413,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            413 =>
            array (
                'id' => 414,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            414 =>
            array (
                'id' => 415,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            415 =>
            array (
                'id' => 416,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            416 =>
            array (
                'id' => 417,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            417 =>
            array (
                'id' => 418,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            418 =>
            array (
                'id' => 419,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            419 =>
            array (
                'id' => 420,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            420 =>
            array (
                'id' => 421,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            421 =>
            array (
                'id' => 422,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            422 =>
            array (
                'id' => 423,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            423 =>
            array (
                'id' => 424,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            424 =>
            array (
                'id' => 425,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            425 =>
            array (
                'id' => 426,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            426 =>
            array (
                'id' => 427,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            427 =>
            array (
                'id' => 428,
                'industry_broad_id' => 5,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            428 =>
            array (
                'id' => 429,
                'industry_broad_id' => 5,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            429 =>
            array (
                'id' => 430,
                'industry_broad_id' => 5,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            430 =>
            array (
                'id' => 431,
                'industry_broad_id' => 5,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            431 =>
            array (
                'id' => 432,
                'industry_broad_id' => 5,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            432 =>
            array (
                'id' => 433,
                'industry_broad_id' => 5,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            433 =>
            array (
                'id' => 434,
                'industry_broad_id' => 5,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            434 =>
            array (
                'id' => 435,
                'industry_broad_id' => 5,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            435 =>
            array (
                'id' => 436,
                'industry_broad_id' => 5,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            436 =>
            array (
                'id' => 437,
                'industry_broad_id' => 5,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            437 =>
            array (
                'id' => 438,
                'industry_broad_id' => 5,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            438 =>
            array (
                'id' => 439,
                'industry_broad_id' => 5,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            439 =>
            array (
                'id' => 440,
                'industry_broad_id' => 5,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            440 =>
            array (
                'id' => 441,
                'industry_broad_id' => 5,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            441 =>
            array (
                'id' => 442,
                'industry_broad_id' => 5,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            442 =>
            array (
                'id' => 443,
                'industry_broad_id' => 5,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            443 =>
            array (
                'id' => 444,
                'industry_broad_id' => 5,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            444 =>
            array (
                'id' => 445,
                'industry_broad_id' => 5,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            445 =>
            array (
                'id' => 446,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            446 =>
            array (
                'id' => 447,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            447 =>
            array (
                'id' => 448,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            448 =>
            array (
                'id' => 449,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            449 =>
            array (
                'id' => 450,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            450 =>
            array (
                'id' => 451,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            451 =>
            array (
                'id' => 452,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            452 =>
            array (
                'id' => 453,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            453 =>
            array (
                'id' => 454,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            454 =>
            array (
                'id' => 455,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            455 =>
            array (
                'id' => 456,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            456 =>
            array (
                'id' => 457,
                'industry_broad_id' => 5,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            457 =>
            array (
                'id' => 458,
                'industry_broad_id' => 5,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            458 =>
            array (
                'id' => 459,
                'industry_broad_id' => 5,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            459 =>
            array (
                'id' => 460,
                'industry_broad_id' => 5,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            460 =>
            array (
                'id' => 461,
                'industry_broad_id' => 5,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            461 =>
            array (
                'id' => 462,
                'industry_broad_id' => 5,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            462 =>
            array (
                'id' => 463,
                'industry_broad_id' => 5,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            463 =>
            array (
                'id' => 464,
                'industry_broad_id' => 5,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            464 =>
            array (
                'id' => 465,
                'industry_broad_id' => 5,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            465 =>
            array (
                'id' => 466,
                'industry_broad_id' => 5,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            466 =>
            array (
                'id' => 467,
                'industry_broad_id' => 5,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            467 =>
            array (
                'id' => 468,
                'industry_broad_id' => 5,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            468 =>
            array (
                'id' => 469,
                'industry_broad_id' => 5,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            469 =>
            array (
                'id' => 470,
                'industry_broad_id' => 5,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            470 =>
            array (
                'id' => 471,
                'industry_broad_id' => 5,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            471 =>
            array (
                'id' => 472,
                'industry_broad_id' => 5,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            472 =>
            array (
                'id' => 473,
                'industry_broad_id' => 5,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            473 =>
            array (
                'id' => 474,
                'industry_broad_id' => 5,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            474 =>
            array (
                'id' => 475,
                'industry_broad_id' => 5,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            475 =>
            array (
                'id' => 476,
                'industry_broad_id' => 5,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            476 =>
            array (
                'id' => 477,
                'industry_broad_id' => 5,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            477 =>
            array (
                'id' => 478,
                'industry_broad_id' => 5,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            478 =>
            array (
                'id' => 479,
                'industry_broad_id' => 5,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            479 =>
            array (
                'id' => 480,
                'industry_broad_id' => 5,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            480 =>
            array (
                'id' => 481,
                'industry_broad_id' => 5,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            481 =>
            array (
                'id' => 482,
                'industry_broad_id' => 5,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            482 =>
            array (
                'id' => 483,
                'industry_broad_id' => 5,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            483 =>
            array (
                'id' => 484,
                'industry_broad_id' => 5,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            484 =>
            array (
                'id' => 485,
                'industry_broad_id' => 5,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            485 =>
            array (
                'id' => 486,
                'industry_broad_id' => 5,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            486 =>
            array (
                'id' => 487,
                'industry_broad_id' => 5,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            487 =>
            array (
                'id' => 488,
                'industry_broad_id' => 5,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            488 =>
            array (
                'id' => 489,
                'industry_broad_id' => 5,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            489 =>
            array (
                'id' => 490,
                'industry_broad_id' => 5,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            490 =>
            array (
                'id' => 491,
                'industry_broad_id' => 5,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            491 =>
            array (
                'id' => 492,
                'industry_broad_id' => 5,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            492 =>
            array (
                'id' => 493,
                'industry_broad_id' => 5,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            493 =>
            array (
                'id' => 494,
                'industry_broad_id' => 5,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            494 =>
            array (
                'id' => 495,
                'industry_broad_id' => 5,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            495 =>
            array (
                'id' => 496,
                'industry_broad_id' => 6,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            496 =>
            array (
                'id' => 497,
                'industry_broad_id' => 6,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            497 =>
            array (
                'id' => 498,
                'industry_broad_id' => 6,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            498 =>
            array (
                'id' => 499,
                'industry_broad_id' => 6,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            499 =>
            array (
                'id' => 500,
                'industry_broad_id' => 6,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('industry_middles')->insert(array (
            0 =>
            array (
                'id' => 501,
                'industry_broad_id' => 6,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 502,
                'industry_broad_id' => 6,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 503,
                'industry_broad_id' => 6,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 504,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 505,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 506,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 507,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 508,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 509,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 510,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 511,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 512,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 513,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 514,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 515,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 516,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 517,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 518,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 519,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 520,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 521,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 522,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 523,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 524,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 525,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 526,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 527,
                'industry_broad_id' => 6,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 528,
                'industry_broad_id' => 6,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 529,
                'industry_broad_id' => 6,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 530,
                'industry_broad_id' => 6,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 531,
                'industry_broad_id' => 6,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 532,
                'industry_broad_id' => 6,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 533,
                'industry_broad_id' => 6,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 534,
                'industry_broad_id' => 6,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 535,
                'industry_broad_id' => 6,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 536,
                'industry_broad_id' => 6,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 537,
                'industry_broad_id' => 6,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 538,
                'industry_broad_id' => 6,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 539,
                'industry_broad_id' => 6,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 540,
                'industry_broad_id' => 6,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 541,
                'industry_broad_id' => 6,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 542,
                'industry_broad_id' => 6,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 543,
                'industry_broad_id' => 6,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 544,
                'industry_broad_id' => 6,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 545,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 546,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 547,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => 548,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => 549,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'id' => 550,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            50 =>
            array (
                'id' => 551,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            51 =>
            array (
                'id' => 552,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            52 =>
            array (
                'id' => 553,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            53 =>
            array (
                'id' => 554,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            54 =>
            array (
                'id' => 555,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            55 =>
            array (
                'id' => 556,
                'industry_broad_id' => 6,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            56 =>
            array (
                'id' => 557,
                'industry_broad_id' => 6,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            57 =>
            array (
                'id' => 558,
                'industry_broad_id' => 6,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            58 =>
            array (
                'id' => 559,
                'industry_broad_id' => 6,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            59 =>
            array (
                'id' => 560,
                'industry_broad_id' => 6,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            60 =>
            array (
                'id' => 561,
                'industry_broad_id' => 6,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            61 =>
            array (
                'id' => 562,
                'industry_broad_id' => 6,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            62 =>
            array (
                'id' => 563,
                'industry_broad_id' => 6,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            63 =>
            array (
                'id' => 564,
                'industry_broad_id' => 6,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            64 =>
            array (
                'id' => 565,
                'industry_broad_id' => 6,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            65 =>
            array (
                'id' => 566,
                'industry_broad_id' => 6,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            66 =>
            array (
                'id' => 567,
                'industry_broad_id' => 6,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            67 =>
            array (
                'id' => 568,
                'industry_broad_id' => 6,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            68 =>
            array (
                'id' => 569,
                'industry_broad_id' => 6,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            69 =>
            array (
                'id' => 570,
                'industry_broad_id' => 6,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            70 =>
            array (
                'id' => 571,
                'industry_broad_id' => 6,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            71 =>
            array (
                'id' => 572,
                'industry_broad_id' => 6,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            72 =>
            array (
                'id' => 573,
                'industry_broad_id' => 6,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            73 =>
            array (
                'id' => 574,
                'industry_broad_id' => 6,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            74 =>
            array (
                'id' => 575,
                'industry_broad_id' => 6,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            75 =>
            array (
                'id' => 576,
                'industry_broad_id' => 6,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            76 =>
            array (
                'id' => 577,
                'industry_broad_id' => 6,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            77 =>
            array (
                'id' => 578,
                'industry_broad_id' => 6,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            78 =>
            array (
                'id' => 579,
                'industry_broad_id' => 6,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            79 =>
            array (
                'id' => 580,
                'industry_broad_id' => 6,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            80 =>
            array (
                'id' => 581,
                'industry_broad_id' => 6,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            81 =>
            array (
                'id' => 582,
                'industry_broad_id' => 6,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            82 =>
            array (
                'id' => 583,
                'industry_broad_id' => 6,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            83 =>
            array (
                'id' => 584,
                'industry_broad_id' => 6,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            84 =>
            array (
                'id' => 585,
                'industry_broad_id' => 6,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            85 =>
            array (
                'id' => 586,
                'industry_broad_id' => 6,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            86 =>
            array (
                'id' => 587,
                'industry_broad_id' => 6,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            87 =>
            array (
                'id' => 588,
                'industry_broad_id' => 6,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            88 =>
            array (
                'id' => 589,
                'industry_broad_id' => 6,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            89 =>
            array (
                'id' => 590,
                'industry_broad_id' => 6,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            90 =>
            array (
                'id' => 591,
                'industry_broad_id' => 6,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            91 =>
            array (
                'id' => 592,
                'industry_broad_id' => 6,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            92 =>
            array (
                'id' => 593,
                'industry_broad_id' => 6,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            93 =>
            array (
                'id' => 594,
                'industry_broad_id' => 6,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:19',
                'updated_at' => '2022-09-27 16:33:19',
                'deleted_at' => NULL,
            ),
            94 =>
            array (
                'id' => 595,
                'industry_broad_id' => 7,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            95 =>
            array (
                'id' => 596,
                'industry_broad_id' => 7,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            96 =>
            array (
                'id' => 597,
                'industry_broad_id' => 7,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            97 =>
            array (
                'id' => 598,
                'industry_broad_id' => 7,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            98 =>
            array (
                'id' => 599,
                'industry_broad_id' => 7,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            99 =>
            array (
                'id' => 600,
                'industry_broad_id' => 7,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            100 =>
            array (
                'id' => 601,
                'industry_broad_id' => 7,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            101 =>
            array (
                'id' => 602,
                'industry_broad_id' => 7,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            102 =>
            array (
                'id' => 603,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            103 =>
            array (
                'id' => 604,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            104 =>
            array (
                'id' => 605,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            105 =>
            array (
                'id' => 606,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            106 =>
            array (
                'id' => 607,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            107 =>
            array (
                'id' => 608,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            108 =>
            array (
                'id' => 609,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            109 =>
            array (
                'id' => 610,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            110 =>
            array (
                'id' => 611,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            111 =>
            array (
                'id' => 612,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            112 =>
            array (
                'id' => 613,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            113 =>
            array (
                'id' => 614,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            114 =>
            array (
                'id' => 615,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            115 =>
            array (
                'id' => 616,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            116 =>
            array (
                'id' => 617,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            117 =>
            array (
                'id' => 618,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            118 =>
            array (
                'id' => 619,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            119 =>
            array (
                'id' => 620,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            120 =>
            array (
                'id' => 621,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            121 =>
            array (
                'id' => 622,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            122 =>
            array (
                'id' => 623,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            123 =>
            array (
                'id' => 624,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            124 =>
            array (
                'id' => 625,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            125 =>
            array (
                'id' => 626,
                'industry_broad_id' => 7,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            126 =>
            array (
                'id' => 627,
                'industry_broad_id' => 7,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            127 =>
            array (
                'id' => 628,
                'industry_broad_id' => 7,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            128 =>
            array (
                'id' => 629,
                'industry_broad_id' => 7,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            129 =>
            array (
                'id' => 630,
                'industry_broad_id' => 7,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            130 =>
            array (
                'id' => 631,
                'industry_broad_id' => 7,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            131 =>
            array (
                'id' => 632,
                'industry_broad_id' => 7,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            132 =>
            array (
                'id' => 633,
                'industry_broad_id' => 7,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            133 =>
            array (
                'id' => 634,
                'industry_broad_id' => 7,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            134 =>
            array (
                'id' => 635,
                'industry_broad_id' => 7,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            135 =>
            array (
                'id' => 636,
                'industry_broad_id' => 7,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            136 =>
            array (
                'id' => 637,
                'industry_broad_id' => 7,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            137 =>
            array (
                'id' => 638,
                'industry_broad_id' => 7,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            138 =>
            array (
                'id' => 639,
                'industry_broad_id' => 7,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            139 =>
            array (
                'id' => 640,
                'industry_broad_id' => 7,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            140 =>
            array (
                'id' => 641,
                'industry_broad_id' => 7,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            141 =>
            array (
                'id' => 642,
                'industry_broad_id' => 7,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            142 =>
            array (
                'id' => 643,
                'industry_broad_id' => 7,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            143 =>
            array (
                'id' => 644,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            144 =>
            array (
                'id' => 645,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            145 =>
            array (
                'id' => 646,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            146 =>
            array (
                'id' => 647,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            147 =>
            array (
                'id' => 648,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            148 =>
            array (
                'id' => 649,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            149 =>
            array (
                'id' => 650,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            150 =>
            array (
                'id' => 651,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            151 =>
            array (
                'id' => 652,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            152 =>
            array (
                'id' => 653,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            153 =>
            array (
                'id' => 654,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            154 =>
            array (
                'id' => 655,
                'industry_broad_id' => 7,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            155 =>
            array (
                'id' => 656,
                'industry_broad_id' => 7,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            156 =>
            array (
                'id' => 657,
                'industry_broad_id' => 7,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            157 =>
            array (
                'id' => 658,
                'industry_broad_id' => 7,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            158 =>
            array (
                'id' => 659,
                'industry_broad_id' => 7,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            159 =>
            array (
                'id' => 660,
                'industry_broad_id' => 7,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            160 =>
            array (
                'id' => 661,
                'industry_broad_id' => 7,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            161 =>
            array (
                'id' => 662,
                'industry_broad_id' => 7,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            162 =>
            array (
                'id' => 663,
                'industry_broad_id' => 7,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            163 =>
            array (
                'id' => 664,
                'industry_broad_id' => 7,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            164 =>
            array (
                'id' => 665,
                'industry_broad_id' => 7,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            165 =>
            array (
                'id' => 666,
                'industry_broad_id' => 7,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            166 =>
            array (
                'id' => 667,
                'industry_broad_id' => 7,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            167 =>
            array (
                'id' => 668,
                'industry_broad_id' => 7,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            168 =>
            array (
                'id' => 669,
                'industry_broad_id' => 7,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            169 =>
            array (
                'id' => 670,
                'industry_broad_id' => 7,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            170 =>
            array (
                'id' => 671,
                'industry_broad_id' => 7,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            171 =>
            array (
                'id' => 672,
                'industry_broad_id' => 7,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            172 =>
            array (
                'id' => 673,
                'industry_broad_id' => 7,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            173 =>
            array (
                'id' => 674,
                'industry_broad_id' => 7,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            174 =>
            array (
                'id' => 675,
                'industry_broad_id' => 7,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            175 =>
            array (
                'id' => 676,
                'industry_broad_id' => 7,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            176 =>
            array (
                'id' => 677,
                'industry_broad_id' => 7,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            177 =>
            array (
                'id' => 678,
                'industry_broad_id' => 7,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            178 =>
            array (
                'id' => 679,
                'industry_broad_id' => 7,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            179 =>
            array (
                'id' => 680,
                'industry_broad_id' => 7,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            180 =>
            array (
                'id' => 681,
                'industry_broad_id' => 7,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            181 =>
            array (
                'id' => 682,
                'industry_broad_id' => 7,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            182 =>
            array (
                'id' => 683,
                'industry_broad_id' => 7,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            183 =>
            array (
                'id' => 684,
                'industry_broad_id' => 7,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            184 =>
            array (
                'id' => 685,
                'industry_broad_id' => 7,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            185 =>
            array (
                'id' => 686,
                'industry_broad_id' => 7,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            186 =>
            array (
                'id' => 687,
                'industry_broad_id' => 7,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            187 =>
            array (
                'id' => 688,
                'industry_broad_id' => 7,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            188 =>
            array (
                'id' => 689,
                'industry_broad_id' => 7,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            189 =>
            array (
                'id' => 690,
                'industry_broad_id' => 7,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            190 =>
            array (
                'id' => 691,
                'industry_broad_id' => 7,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            191 =>
            array (
                'id' => 692,
                'industry_broad_id' => 7,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            192 =>
            array (
                'id' => 693,
                'industry_broad_id' => 7,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            193 =>
            array (
                'id' => 694,
                'industry_broad_id' => 8,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            194 =>
            array (
                'id' => 695,
                'industry_broad_id' => 8,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            195 =>
            array (
                'id' => 696,
                'industry_broad_id' => 8,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            196 =>
            array (
                'id' => 697,
                'industry_broad_id' => 8,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            197 =>
            array (
                'id' => 698,
                'industry_broad_id' => 8,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            198 =>
            array (
                'id' => 699,
                'industry_broad_id' => 8,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            199 =>
            array (
                'id' => 700,
                'industry_broad_id' => 8,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            200 =>
            array (
                'id' => 701,
                'industry_broad_id' => 8,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            201 =>
            array (
                'id' => 702,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            202 =>
            array (
                'id' => 703,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            203 =>
            array (
                'id' => 704,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            204 =>
            array (
                'id' => 705,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            205 =>
            array (
                'id' => 706,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            206 =>
            array (
                'id' => 707,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            207 =>
            array (
                'id' => 708,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            208 =>
            array (
                'id' => 709,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            209 =>
            array (
                'id' => 710,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            210 =>
            array (
                'id' => 711,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            211 =>
            array (
                'id' => 712,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            212 =>
            array (
                'id' => 713,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            213 =>
            array (
                'id' => 714,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            214 =>
            array (
                'id' => 715,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            215 =>
            array (
                'id' => 716,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            216 =>
            array (
                'id' => 717,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            217 =>
            array (
                'id' => 718,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            218 =>
            array (
                'id' => 719,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            219 =>
            array (
                'id' => 720,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            220 =>
            array (
                'id' => 721,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            221 =>
            array (
                'id' => 722,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            222 =>
            array (
                'id' => 723,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            223 =>
            array (
                'id' => 724,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            224 =>
            array (
                'id' => 725,
                'industry_broad_id' => 8,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            225 =>
            array (
                'id' => 726,
                'industry_broad_id' => 8,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            226 =>
            array (
                'id' => 727,
                'industry_broad_id' => 8,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            227 =>
            array (
                'id' => 728,
                'industry_broad_id' => 8,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            228 =>
            array (
                'id' => 729,
                'industry_broad_id' => 8,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            229 =>
            array (
                'id' => 730,
                'industry_broad_id' => 8,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            230 =>
            array (
                'id' => 731,
                'industry_broad_id' => 8,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            231 =>
            array (
                'id' => 732,
                'industry_broad_id' => 8,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            232 =>
            array (
                'id' => 733,
                'industry_broad_id' => 8,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            233 =>
            array (
                'id' => 734,
                'industry_broad_id' => 8,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            234 =>
            array (
                'id' => 735,
                'industry_broad_id' => 8,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            235 =>
            array (
                'id' => 736,
                'industry_broad_id' => 8,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            236 =>
            array (
                'id' => 737,
                'industry_broad_id' => 8,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            237 =>
            array (
                'id' => 738,
                'industry_broad_id' => 8,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            238 =>
            array (
                'id' => 739,
                'industry_broad_id' => 8,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            239 =>
            array (
                'id' => 740,
                'industry_broad_id' => 8,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            240 =>
            array (
                'id' => 741,
                'industry_broad_id' => 8,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            241 =>
            array (
                'id' => 742,
                'industry_broad_id' => 8,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            242 =>
            array (
                'id' => 743,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            243 =>
            array (
                'id' => 744,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            244 =>
            array (
                'id' => 745,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            245 =>
            array (
                'id' => 746,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            246 =>
            array (
                'id' => 747,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            247 =>
            array (
                'id' => 748,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            248 =>
            array (
                'id' => 749,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            249 =>
            array (
                'id' => 750,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            250 =>
            array (
                'id' => 751,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            251 =>
            array (
                'id' => 752,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            252 =>
            array (
                'id' => 753,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            253 =>
            array (
                'id' => 754,
                'industry_broad_id' => 8,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            254 =>
            array (
                'id' => 755,
                'industry_broad_id' => 8,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            255 =>
            array (
                'id' => 756,
                'industry_broad_id' => 8,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            256 =>
            array (
                'id' => 757,
                'industry_broad_id' => 8,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            257 =>
            array (
                'id' => 758,
                'industry_broad_id' => 8,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            258 =>
            array (
                'id' => 759,
                'industry_broad_id' => 8,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            259 =>
            array (
                'id' => 760,
                'industry_broad_id' => 8,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            260 =>
            array (
                'id' => 761,
                'industry_broad_id' => 8,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            261 =>
            array (
                'id' => 762,
                'industry_broad_id' => 8,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            262 =>
            array (
                'id' => 763,
                'industry_broad_id' => 8,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            263 =>
            array (
                'id' => 764,
                'industry_broad_id' => 8,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            264 =>
            array (
                'id' => 765,
                'industry_broad_id' => 8,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            265 =>
            array (
                'id' => 766,
                'industry_broad_id' => 8,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            266 =>
            array (
                'id' => 767,
                'industry_broad_id' => 8,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            267 =>
            array (
                'id' => 768,
                'industry_broad_id' => 8,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            268 =>
            array (
                'id' => 769,
                'industry_broad_id' => 8,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            269 =>
            array (
                'id' => 770,
                'industry_broad_id' => 8,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            270 =>
            array (
                'id' => 771,
                'industry_broad_id' => 8,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            271 =>
            array (
                'id' => 772,
                'industry_broad_id' => 8,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            272 =>
            array (
                'id' => 773,
                'industry_broad_id' => 8,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            273 =>
            array (
                'id' => 774,
                'industry_broad_id' => 8,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            274 =>
            array (
                'id' => 775,
                'industry_broad_id' => 8,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            275 =>
            array (
                'id' => 776,
                'industry_broad_id' => 8,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            276 =>
            array (
                'id' => 777,
                'industry_broad_id' => 8,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            277 =>
            array (
                'id' => 778,
                'industry_broad_id' => 8,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            278 =>
            array (
                'id' => 779,
                'industry_broad_id' => 8,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            279 =>
            array (
                'id' => 780,
                'industry_broad_id' => 8,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            280 =>
            array (
                'id' => 781,
                'industry_broad_id' => 8,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            281 =>
            array (
                'id' => 782,
                'industry_broad_id' => 8,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            282 =>
            array (
                'id' => 783,
                'industry_broad_id' => 8,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            283 =>
            array (
                'id' => 784,
                'industry_broad_id' => 8,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            284 =>
            array (
                'id' => 785,
                'industry_broad_id' => 8,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            285 =>
            array (
                'id' => 786,
                'industry_broad_id' => 8,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            286 =>
            array (
                'id' => 787,
                'industry_broad_id' => 8,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            287 =>
            array (
                'id' => 788,
                'industry_broad_id' => 8,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            288 =>
            array (
                'id' => 789,
                'industry_broad_id' => 8,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            289 =>
            array (
                'id' => 790,
                'industry_broad_id' => 8,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            290 =>
            array (
                'id' => 791,
                'industry_broad_id' => 8,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            291 =>
            array (
                'id' => 792,
                'industry_broad_id' => 8,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:20',
                'updated_at' => '2022-09-27 16:33:20',
                'deleted_at' => NULL,
            ),
            292 =>
            array (
                'id' => 793,
                'industry_broad_id' => 9,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            293 =>
            array (
                'id' => 794,
                'industry_broad_id' => 9,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            294 =>
            array (
                'id' => 795,
                'industry_broad_id' => 9,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            295 =>
            array (
                'id' => 796,
                'industry_broad_id' => 9,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            296 =>
            array (
                'id' => 797,
                'industry_broad_id' => 9,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            297 =>
            array (
                'id' => 798,
                'industry_broad_id' => 9,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            298 =>
            array (
                'id' => 799,
                'industry_broad_id' => 9,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            299 =>
            array (
                'id' => 800,
                'industry_broad_id' => 9,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            300 =>
            array (
                'id' => 801,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            301 =>
            array (
                'id' => 802,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            302 =>
            array (
                'id' => 803,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            303 =>
            array (
                'id' => 804,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            304 =>
            array (
                'id' => 805,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            305 =>
            array (
                'id' => 806,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            306 =>
            array (
                'id' => 807,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            307 =>
            array (
                'id' => 808,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            308 =>
            array (
                'id' => 809,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            309 =>
            array (
                'id' => 810,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            310 =>
            array (
                'id' => 811,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            311 =>
            array (
                'id' => 812,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            312 =>
            array (
                'id' => 813,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            313 =>
            array (
                'id' => 814,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            314 =>
            array (
                'id' => 815,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            315 =>
            array (
                'id' => 816,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            316 =>
            array (
                'id' => 817,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            317 =>
            array (
                'id' => 818,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            318 =>
            array (
                'id' => 819,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            319 =>
            array (
                'id' => 820,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            320 =>
            array (
                'id' => 821,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            321 =>
            array (
                'id' => 822,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            322 =>
            array (
                'id' => 823,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            323 =>
            array (
                'id' => 824,
                'industry_broad_id' => 9,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            324 =>
            array (
                'id' => 825,
                'industry_broad_id' => 9,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            325 =>
            array (
                'id' => 826,
                'industry_broad_id' => 9,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            326 =>
            array (
                'id' => 827,
                'industry_broad_id' => 9,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            327 =>
            array (
                'id' => 828,
                'industry_broad_id' => 9,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            328 =>
            array (
                'id' => 829,
                'industry_broad_id' => 9,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            329 =>
            array (
                'id' => 830,
                'industry_broad_id' => 9,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            330 =>
            array (
                'id' => 831,
                'industry_broad_id' => 9,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            331 =>
            array (
                'id' => 832,
                'industry_broad_id' => 9,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            332 =>
            array (
                'id' => 833,
                'industry_broad_id' => 9,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            333 =>
            array (
                'id' => 834,
                'industry_broad_id' => 9,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            334 =>
            array (
                'id' => 835,
                'industry_broad_id' => 9,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            335 =>
            array (
                'id' => 836,
                'industry_broad_id' => 9,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            336 =>
            array (
                'id' => 837,
                'industry_broad_id' => 9,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            337 =>
            array (
                'id' => 838,
                'industry_broad_id' => 9,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            338 =>
            array (
                'id' => 839,
                'industry_broad_id' => 9,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            339 =>
            array (
                'id' => 840,
                'industry_broad_id' => 9,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            340 =>
            array (
                'id' => 841,
                'industry_broad_id' => 9,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            341 =>
            array (
                'id' => 842,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            342 =>
            array (
                'id' => 843,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            343 =>
            array (
                'id' => 844,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            344 =>
            array (
                'id' => 845,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            345 =>
            array (
                'id' => 846,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            346 =>
            array (
                'id' => 847,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            347 =>
            array (
                'id' => 848,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            348 =>
            array (
                'id' => 849,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            349 =>
            array (
                'id' => 850,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            350 =>
            array (
                'id' => 851,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            351 =>
            array (
                'id' => 852,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            352 =>
            array (
                'id' => 853,
                'industry_broad_id' => 9,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            353 =>
            array (
                'id' => 854,
                'industry_broad_id' => 9,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            354 =>
            array (
                'id' => 855,
                'industry_broad_id' => 9,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            355 =>
            array (
                'id' => 856,
                'industry_broad_id' => 9,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            356 =>
            array (
                'id' => 857,
                'industry_broad_id' => 9,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            357 =>
            array (
                'id' => 858,
                'industry_broad_id' => 9,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            358 =>
            array (
                'id' => 859,
                'industry_broad_id' => 9,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            359 =>
            array (
                'id' => 860,
                'industry_broad_id' => 9,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            360 =>
            array (
                'id' => 861,
                'industry_broad_id' => 9,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            361 =>
            array (
                'id' => 862,
                'industry_broad_id' => 9,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            362 =>
            array (
                'id' => 863,
                'industry_broad_id' => 9,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            363 =>
            array (
                'id' => 864,
                'industry_broad_id' => 9,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            364 =>
            array (
                'id' => 865,
                'industry_broad_id' => 9,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            365 =>
            array (
                'id' => 866,
                'industry_broad_id' => 9,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            366 =>
            array (
                'id' => 867,
                'industry_broad_id' => 9,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            367 =>
            array (
                'id' => 868,
                'industry_broad_id' => 9,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            368 =>
            array (
                'id' => 869,
                'industry_broad_id' => 9,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            369 =>
            array (
                'id' => 870,
                'industry_broad_id' => 9,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            370 =>
            array (
                'id' => 871,
                'industry_broad_id' => 9,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            371 =>
            array (
                'id' => 872,
                'industry_broad_id' => 9,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            372 =>
            array (
                'id' => 873,
                'industry_broad_id' => 9,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            373 =>
            array (
                'id' => 874,
                'industry_broad_id' => 9,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            374 =>
            array (
                'id' => 875,
                'industry_broad_id' => 9,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            375 =>
            array (
                'id' => 876,
                'industry_broad_id' => 9,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            376 =>
            array (
                'id' => 877,
                'industry_broad_id' => 9,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            377 =>
            array (
                'id' => 878,
                'industry_broad_id' => 9,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            378 =>
            array (
                'id' => 879,
                'industry_broad_id' => 9,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            379 =>
            array (
                'id' => 880,
                'industry_broad_id' => 9,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            380 =>
            array (
                'id' => 881,
                'industry_broad_id' => 9,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            381 =>
            array (
                'id' => 882,
                'industry_broad_id' => 9,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            382 =>
            array (
                'id' => 883,
                'industry_broad_id' => 9,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            383 =>
            array (
                'id' => 884,
                'industry_broad_id' => 9,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            384 =>
            array (
                'id' => 885,
                'industry_broad_id' => 9,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            385 =>
            array (
                'id' => 886,
                'industry_broad_id' => 9,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            386 =>
            array (
                'id' => 887,
                'industry_broad_id' => 9,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            387 =>
            array (
                'id' => 888,
                'industry_broad_id' => 9,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            388 =>
            array (
                'id' => 889,
                'industry_broad_id' => 9,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            389 =>
            array (
                'id' => 890,
                'industry_broad_id' => 9,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            390 =>
            array (
                'id' => 891,
                'industry_broad_id' => 9,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            391 =>
            array (
                'id' => 892,
                'industry_broad_id' => 10,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            392 =>
            array (
                'id' => 893,
                'industry_broad_id' => 10,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            393 =>
            array (
                'id' => 894,
                'industry_broad_id' => 10,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            394 =>
            array (
                'id' => 895,
                'industry_broad_id' => 10,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            395 =>
            array (
                'id' => 896,
                'industry_broad_id' => 10,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            396 =>
            array (
                'id' => 897,
                'industry_broad_id' => 10,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            397 =>
            array (
                'id' => 898,
                'industry_broad_id' => 10,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            398 =>
            array (
                'id' => 899,
                'industry_broad_id' => 10,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            399 =>
            array (
                'id' => 900,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            400 =>
            array (
                'id' => 901,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            401 =>
            array (
                'id' => 902,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            402 =>
            array (
                'id' => 903,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            403 =>
            array (
                'id' => 904,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            404 =>
            array (
                'id' => 905,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            405 =>
            array (
                'id' => 906,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            406 =>
            array (
                'id' => 907,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            407 =>
            array (
                'id' => 908,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            408 =>
            array (
                'id' => 909,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            409 =>
            array (
                'id' => 910,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            410 =>
            array (
                'id' => 911,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            411 =>
            array (
                'id' => 912,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            412 =>
            array (
                'id' => 913,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            413 =>
            array (
                'id' => 914,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            414 =>
            array (
                'id' => 915,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            415 =>
            array (
                'id' => 916,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            416 =>
            array (
                'id' => 917,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            417 =>
            array (
                'id' => 918,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            418 =>
            array (
                'id' => 919,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            419 =>
            array (
                'id' => 920,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            420 =>
            array (
                'id' => 921,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            421 =>
            array (
                'id' => 922,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            422 =>
            array (
                'id' => 923,
                'industry_broad_id' => 10,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            423 =>
            array (
                'id' => 924,
                'industry_broad_id' => 10,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            424 =>
            array (
                'id' => 925,
                'industry_broad_id' => 10,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            425 =>
            array (
                'id' => 926,
                'industry_broad_id' => 10,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            426 =>
            array (
                'id' => 927,
                'industry_broad_id' => 10,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            427 =>
            array (
                'id' => 928,
                'industry_broad_id' => 10,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            428 =>
            array (
                'id' => 929,
                'industry_broad_id' => 10,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            429 =>
            array (
                'id' => 930,
                'industry_broad_id' => 10,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            430 =>
            array (
                'id' => 931,
                'industry_broad_id' => 10,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            431 =>
            array (
                'id' => 932,
                'industry_broad_id' => 10,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            432 =>
            array (
                'id' => 933,
                'industry_broad_id' => 10,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            433 =>
            array (
                'id' => 934,
                'industry_broad_id' => 10,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            434 =>
            array (
                'id' => 935,
                'industry_broad_id' => 10,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            435 =>
            array (
                'id' => 936,
                'industry_broad_id' => 10,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            436 =>
            array (
                'id' => 937,
                'industry_broad_id' => 10,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            437 =>
            array (
                'id' => 938,
                'industry_broad_id' => 10,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            438 =>
            array (
                'id' => 939,
                'industry_broad_id' => 10,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            439 =>
            array (
                'id' => 940,
                'industry_broad_id' => 10,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            440 =>
            array (
                'id' => 941,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            441 =>
            array (
                'id' => 942,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            442 =>
            array (
                'id' => 943,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            443 =>
            array (
                'id' => 944,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            444 =>
            array (
                'id' => 945,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            445 =>
            array (
                'id' => 946,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            446 =>
            array (
                'id' => 947,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            447 =>
            array (
                'id' => 948,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            448 =>
            array (
                'id' => 949,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            449 =>
            array (
                'id' => 950,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            450 =>
            array (
                'id' => 951,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            451 =>
            array (
                'id' => 952,
                'industry_broad_id' => 10,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            452 =>
            array (
                'id' => 953,
                'industry_broad_id' => 10,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            453 =>
            array (
                'id' => 954,
                'industry_broad_id' => 10,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            454 =>
            array (
                'id' => 955,
                'industry_broad_id' => 10,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            455 =>
            array (
                'id' => 956,
                'industry_broad_id' => 10,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            456 =>
            array (
                'id' => 957,
                'industry_broad_id' => 10,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            457 =>
            array (
                'id' => 958,
                'industry_broad_id' => 10,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            458 =>
            array (
                'id' => 959,
                'industry_broad_id' => 10,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            459 =>
            array (
                'id' => 960,
                'industry_broad_id' => 10,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            460 =>
            array (
                'id' => 961,
                'industry_broad_id' => 10,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            461 =>
            array (
                'id' => 962,
                'industry_broad_id' => 10,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            462 =>
            array (
                'id' => 963,
                'industry_broad_id' => 10,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            463 =>
            array (
                'id' => 964,
                'industry_broad_id' => 10,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            464 =>
            array (
                'id' => 965,
                'industry_broad_id' => 10,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            465 =>
            array (
                'id' => 966,
                'industry_broad_id' => 10,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            466 =>
            array (
                'id' => 967,
                'industry_broad_id' => 10,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            467 =>
            array (
                'id' => 968,
                'industry_broad_id' => 10,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            468 =>
            array (
                'id' => 969,
                'industry_broad_id' => 10,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            469 =>
            array (
                'id' => 970,
                'industry_broad_id' => 10,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            470 =>
            array (
                'id' => 971,
                'industry_broad_id' => 10,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            471 =>
            array (
                'id' => 972,
                'industry_broad_id' => 10,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            472 =>
            array (
                'id' => 973,
                'industry_broad_id' => 10,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            473 =>
            array (
                'id' => 974,
                'industry_broad_id' => 10,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            474 =>
            array (
                'id' => 975,
                'industry_broad_id' => 10,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            475 =>
            array (
                'id' => 976,
                'industry_broad_id' => 10,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            476 =>
            array (
                'id' => 977,
                'industry_broad_id' => 10,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            477 =>
            array (
                'id' => 978,
                'industry_broad_id' => 10,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            478 =>
            array (
                'id' => 979,
                'industry_broad_id' => 10,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            479 =>
            array (
                'id' => 980,
                'industry_broad_id' => 10,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            480 =>
            array (
                'id' => 981,
                'industry_broad_id' => 10,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            481 =>
            array (
                'id' => 982,
                'industry_broad_id' => 10,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            482 =>
            array (
                'id' => 983,
                'industry_broad_id' => 10,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            483 =>
            array (
                'id' => 984,
                'industry_broad_id' => 10,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            484 =>
            array (
                'id' => 985,
                'industry_broad_id' => 10,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            485 =>
            array (
                'id' => 986,
                'industry_broad_id' => 10,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            486 =>
            array (
                'id' => 987,
                'industry_broad_id' => 10,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            487 =>
            array (
                'id' => 988,
                'industry_broad_id' => 10,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            488 =>
            array (
                'id' => 989,
                'industry_broad_id' => 10,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            489 =>
            array (
                'id' => 990,
                'industry_broad_id' => 10,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            490 =>
            array (
                'id' => 991,
                'industry_broad_id' => 11,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            491 =>
            array (
                'id' => 992,
                'industry_broad_id' => 11,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            492 =>
            array (
                'id' => 993,
                'industry_broad_id' => 11,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            493 =>
            array (
                'id' => 994,
                'industry_broad_id' => 11,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            494 =>
            array (
                'id' => 995,
                'industry_broad_id' => 11,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            495 =>
            array (
                'id' => 996,
                'industry_broad_id' => 11,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            496 =>
            array (
                'id' => 997,
                'industry_broad_id' => 11,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            497 =>
            array (
                'id' => 998,
                'industry_broad_id' => 11,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            498 =>
            array (
                'id' => 999,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            499 =>
            array (
                'id' => 1000,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('industry_middles')->insert(array (
            0 =>
            array (
                'id' => 1001,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 1002,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 1003,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 1004,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 1005,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 1006,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 1007,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 1008,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 1009,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 1010,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 1011,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 1012,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 1013,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 1014,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 1015,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 1016,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 1017,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 1018,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 1019,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 1020,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 1021,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 1022,
                'industry_broad_id' => 11,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 1023,
                'industry_broad_id' => 11,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 1024,
                'industry_broad_id' => 11,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 1025,
                'industry_broad_id' => 11,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 1026,
                'industry_broad_id' => 11,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 1027,
                'industry_broad_id' => 11,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 1028,
                'industry_broad_id' => 11,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 1029,
                'industry_broad_id' => 11,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 1030,
                'industry_broad_id' => 11,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 1031,
                'industry_broad_id' => 11,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 1032,
                'industry_broad_id' => 11,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 1033,
                'industry_broad_id' => 11,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 1034,
                'industry_broad_id' => 11,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 1035,
                'industry_broad_id' => 11,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 1036,
                'industry_broad_id' => 11,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 1037,
                'industry_broad_id' => 11,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 1038,
                'industry_broad_id' => 11,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 1039,
                'industry_broad_id' => 11,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 1040,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 1041,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 1042,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 1043,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 1044,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 1045,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 1046,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 1047,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => 1048,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => 1049,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'id' => 1050,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            50 =>
            array (
                'id' => 1051,
                'industry_broad_id' => 11,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            51 =>
            array (
                'id' => 1052,
                'industry_broad_id' => 11,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            52 =>
            array (
                'id' => 1053,
                'industry_broad_id' => 11,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            53 =>
            array (
                'id' => 1054,
                'industry_broad_id' => 11,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            54 =>
            array (
                'id' => 1055,
                'industry_broad_id' => 11,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            55 =>
            array (
                'id' => 1056,
                'industry_broad_id' => 11,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            56 =>
            array (
                'id' => 1057,
                'industry_broad_id' => 11,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            57 =>
            array (
                'id' => 1058,
                'industry_broad_id' => 11,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            58 =>
            array (
                'id' => 1059,
                'industry_broad_id' => 11,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            59 =>
            array (
                'id' => 1060,
                'industry_broad_id' => 11,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            60 =>
            array (
                'id' => 1061,
                'industry_broad_id' => 11,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            61 =>
            array (
                'id' => 1062,
                'industry_broad_id' => 11,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            62 =>
            array (
                'id' => 1063,
                'industry_broad_id' => 11,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            63 =>
            array (
                'id' => 1064,
                'industry_broad_id' => 11,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            64 =>
            array (
                'id' => 1065,
                'industry_broad_id' => 11,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            65 =>
            array (
                'id' => 1066,
                'industry_broad_id' => 11,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            66 =>
            array (
                'id' => 1067,
                'industry_broad_id' => 11,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            67 =>
            array (
                'id' => 1068,
                'industry_broad_id' => 11,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            68 =>
            array (
                'id' => 1069,
                'industry_broad_id' => 11,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            69 =>
            array (
                'id' => 1070,
                'industry_broad_id' => 11,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            70 =>
            array (
                'id' => 1071,
                'industry_broad_id' => 11,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            71 =>
            array (
                'id' => 1072,
                'industry_broad_id' => 11,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            72 =>
            array (
                'id' => 1073,
                'industry_broad_id' => 11,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            73 =>
            array (
                'id' => 1074,
                'industry_broad_id' => 11,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            74 =>
            array (
                'id' => 1075,
                'industry_broad_id' => 11,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            75 =>
            array (
                'id' => 1076,
                'industry_broad_id' => 11,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            76 =>
            array (
                'id' => 1077,
                'industry_broad_id' => 11,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            77 =>
            array (
                'id' => 1078,
                'industry_broad_id' => 11,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            78 =>
            array (
                'id' => 1079,
                'industry_broad_id' => 11,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            79 =>
            array (
                'id' => 1080,
                'industry_broad_id' => 11,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            80 =>
            array (
                'id' => 1081,
                'industry_broad_id' => 11,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            81 =>
            array (
                'id' => 1082,
                'industry_broad_id' => 11,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            82 =>
            array (
                'id' => 1083,
                'industry_broad_id' => 11,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            83 =>
            array (
                'id' => 1084,
                'industry_broad_id' => 11,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            84 =>
            array (
                'id' => 1085,
                'industry_broad_id' => 11,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            85 =>
            array (
                'id' => 1086,
                'industry_broad_id' => 11,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            86 =>
            array (
                'id' => 1087,
                'industry_broad_id' => 11,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            87 =>
            array (
                'id' => 1088,
                'industry_broad_id' => 11,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            88 =>
            array (
                'id' => 1089,
                'industry_broad_id' => 11,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:21',
                'updated_at' => '2022-09-27 16:33:21',
                'deleted_at' => NULL,
            ),
            89 =>
            array (
                'id' => 1090,
                'industry_broad_id' => 12,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            90 =>
            array (
                'id' => 1091,
                'industry_broad_id' => 12,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            91 =>
            array (
                'id' => 1092,
                'industry_broad_id' => 12,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            92 =>
            array (
                'id' => 1093,
                'industry_broad_id' => 12,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            93 =>
            array (
                'id' => 1094,
                'industry_broad_id' => 12,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            94 =>
            array (
                'id' => 1095,
                'industry_broad_id' => 12,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            95 =>
            array (
                'id' => 1096,
                'industry_broad_id' => 12,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            96 =>
            array (
                'id' => 1097,
                'industry_broad_id' => 12,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            97 =>
            array (
                'id' => 1098,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            98 =>
            array (
                'id' => 1099,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            99 =>
            array (
                'id' => 1100,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            100 =>
            array (
                'id' => 1101,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            101 =>
            array (
                'id' => 1102,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            102 =>
            array (
                'id' => 1103,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            103 =>
            array (
                'id' => 1104,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            104 =>
            array (
                'id' => 1105,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            105 =>
            array (
                'id' => 1106,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            106 =>
            array (
                'id' => 1107,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            107 =>
            array (
                'id' => 1108,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            108 =>
            array (
                'id' => 1109,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            109 =>
            array (
                'id' => 1110,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            110 =>
            array (
                'id' => 1111,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            111 =>
            array (
                'id' => 1112,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            112 =>
            array (
                'id' => 1113,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            113 =>
            array (
                'id' => 1114,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            114 =>
            array (
                'id' => 1115,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            115 =>
            array (
                'id' => 1116,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            116 =>
            array (
                'id' => 1117,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            117 =>
            array (
                'id' => 1118,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            118 =>
            array (
                'id' => 1119,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            119 =>
            array (
                'id' => 1120,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            120 =>
            array (
                'id' => 1121,
                'industry_broad_id' => 12,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            121 =>
            array (
                'id' => 1122,
                'industry_broad_id' => 12,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            122 =>
            array (
                'id' => 1123,
                'industry_broad_id' => 12,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            123 =>
            array (
                'id' => 1124,
                'industry_broad_id' => 12,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            124 =>
            array (
                'id' => 1125,
                'industry_broad_id' => 12,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            125 =>
            array (
                'id' => 1126,
                'industry_broad_id' => 12,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            126 =>
            array (
                'id' => 1127,
                'industry_broad_id' => 12,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            127 =>
            array (
                'id' => 1128,
                'industry_broad_id' => 12,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            128 =>
            array (
                'id' => 1129,
                'industry_broad_id' => 12,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            129 =>
            array (
                'id' => 1130,
                'industry_broad_id' => 12,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            130 =>
            array (
                'id' => 1131,
                'industry_broad_id' => 12,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            131 =>
            array (
                'id' => 1132,
                'industry_broad_id' => 12,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            132 =>
            array (
                'id' => 1133,
                'industry_broad_id' => 12,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            133 =>
            array (
                'id' => 1134,
                'industry_broad_id' => 12,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            134 =>
            array (
                'id' => 1135,
                'industry_broad_id' => 12,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            135 =>
            array (
                'id' => 1136,
                'industry_broad_id' => 12,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            136 =>
            array (
                'id' => 1137,
                'industry_broad_id' => 12,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            137 =>
            array (
                'id' => 1138,
                'industry_broad_id' => 12,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            138 =>
            array (
                'id' => 1139,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            139 =>
            array (
                'id' => 1140,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            140 =>
            array (
                'id' => 1141,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            141 =>
            array (
                'id' => 1142,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            142 =>
            array (
                'id' => 1143,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            143 =>
            array (
                'id' => 1144,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            144 =>
            array (
                'id' => 1145,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            145 =>
            array (
                'id' => 1146,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            146 =>
            array (
                'id' => 1147,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            147 =>
            array (
                'id' => 1148,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            148 =>
            array (
                'id' => 1149,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            149 =>
            array (
                'id' => 1150,
                'industry_broad_id' => 12,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            150 =>
            array (
                'id' => 1151,
                'industry_broad_id' => 12,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            151 =>
            array (
                'id' => 1152,
                'industry_broad_id' => 12,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            152 =>
            array (
                'id' => 1153,
                'industry_broad_id' => 12,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            153 =>
            array (
                'id' => 1154,
                'industry_broad_id' => 12,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            154 =>
            array (
                'id' => 1155,
                'industry_broad_id' => 12,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            155 =>
            array (
                'id' => 1156,
                'industry_broad_id' => 12,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            156 =>
            array (
                'id' => 1157,
                'industry_broad_id' => 12,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            157 =>
            array (
                'id' => 1158,
                'industry_broad_id' => 12,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            158 =>
            array (
                'id' => 1159,
                'industry_broad_id' => 12,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            159 =>
            array (
                'id' => 1160,
                'industry_broad_id' => 12,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            160 =>
            array (
                'id' => 1161,
                'industry_broad_id' => 12,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            161 =>
            array (
                'id' => 1162,
                'industry_broad_id' => 12,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            162 =>
            array (
                'id' => 1163,
                'industry_broad_id' => 12,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            163 =>
            array (
                'id' => 1164,
                'industry_broad_id' => 12,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            164 =>
            array (
                'id' => 1165,
                'industry_broad_id' => 12,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            165 =>
            array (
                'id' => 1166,
                'industry_broad_id' => 12,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            166 =>
            array (
                'id' => 1167,
                'industry_broad_id' => 12,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            167 =>
            array (
                'id' => 1168,
                'industry_broad_id' => 12,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            168 =>
            array (
                'id' => 1169,
                'industry_broad_id' => 12,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            169 =>
            array (
                'id' => 1170,
                'industry_broad_id' => 12,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            170 =>
            array (
                'id' => 1171,
                'industry_broad_id' => 12,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            171 =>
            array (
                'id' => 1172,
                'industry_broad_id' => 12,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            172 =>
            array (
                'id' => 1173,
                'industry_broad_id' => 12,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            173 =>
            array (
                'id' => 1174,
                'industry_broad_id' => 12,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            174 =>
            array (
                'id' => 1175,
                'industry_broad_id' => 12,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            175 =>
            array (
                'id' => 1176,
                'industry_broad_id' => 12,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            176 =>
            array (
                'id' => 1177,
                'industry_broad_id' => 12,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            177 =>
            array (
                'id' => 1178,
                'industry_broad_id' => 12,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            178 =>
            array (
                'id' => 1179,
                'industry_broad_id' => 12,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            179 =>
            array (
                'id' => 1180,
                'industry_broad_id' => 12,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            180 =>
            array (
                'id' => 1181,
                'industry_broad_id' => 12,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            181 =>
            array (
                'id' => 1182,
                'industry_broad_id' => 12,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            182 =>
            array (
                'id' => 1183,
                'industry_broad_id' => 12,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            183 =>
            array (
                'id' => 1184,
                'industry_broad_id' => 12,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            184 =>
            array (
                'id' => 1185,
                'industry_broad_id' => 12,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            185 =>
            array (
                'id' => 1186,
                'industry_broad_id' => 12,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            186 =>
            array (
                'id' => 1187,
                'industry_broad_id' => 12,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            187 =>
            array (
                'id' => 1188,
                'industry_broad_id' => 12,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            188 =>
            array (
                'id' => 1189,
                'industry_broad_id' => 13,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            189 =>
            array (
                'id' => 1190,
                'industry_broad_id' => 13,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            190 =>
            array (
                'id' => 1191,
                'industry_broad_id' => 13,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            191 =>
            array (
                'id' => 1192,
                'industry_broad_id' => 13,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            192 =>
            array (
                'id' => 1193,
                'industry_broad_id' => 13,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            193 =>
            array (
                'id' => 1194,
                'industry_broad_id' => 13,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            194 =>
            array (
                'id' => 1195,
                'industry_broad_id' => 13,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            195 =>
            array (
                'id' => 1196,
                'industry_broad_id' => 13,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            196 =>
            array (
                'id' => 1197,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            197 =>
            array (
                'id' => 1198,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            198 =>
            array (
                'id' => 1199,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            199 =>
            array (
                'id' => 1200,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            200 =>
            array (
                'id' => 1201,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            201 =>
            array (
                'id' => 1202,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            202 =>
            array (
                'id' => 1203,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            203 =>
            array (
                'id' => 1204,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            204 =>
            array (
                'id' => 1205,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            205 =>
            array (
                'id' => 1206,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            206 =>
            array (
                'id' => 1207,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            207 =>
            array (
                'id' => 1208,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            208 =>
            array (
                'id' => 1209,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            209 =>
            array (
                'id' => 1210,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            210 =>
            array (
                'id' => 1211,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            211 =>
            array (
                'id' => 1212,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            212 =>
            array (
                'id' => 1213,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            213 =>
            array (
                'id' => 1214,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            214 =>
            array (
                'id' => 1215,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            215 =>
            array (
                'id' => 1216,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            216 =>
            array (
                'id' => 1217,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            217 =>
            array (
                'id' => 1218,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            218 =>
            array (
                'id' => 1219,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            219 =>
            array (
                'id' => 1220,
                'industry_broad_id' => 13,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            220 =>
            array (
                'id' => 1221,
                'industry_broad_id' => 13,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            221 =>
            array (
                'id' => 1222,
                'industry_broad_id' => 13,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            222 =>
            array (
                'id' => 1223,
                'industry_broad_id' => 13,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            223 =>
            array (
                'id' => 1224,
                'industry_broad_id' => 13,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            224 =>
            array (
                'id' => 1225,
                'industry_broad_id' => 13,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            225 =>
            array (
                'id' => 1226,
                'industry_broad_id' => 13,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            226 =>
            array (
                'id' => 1227,
                'industry_broad_id' => 13,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            227 =>
            array (
                'id' => 1228,
                'industry_broad_id' => 13,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            228 =>
            array (
                'id' => 1229,
                'industry_broad_id' => 13,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            229 =>
            array (
                'id' => 1230,
                'industry_broad_id' => 13,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            230 =>
            array (
                'id' => 1231,
                'industry_broad_id' => 13,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            231 =>
            array (
                'id' => 1232,
                'industry_broad_id' => 13,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            232 =>
            array (
                'id' => 1233,
                'industry_broad_id' => 13,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            233 =>
            array (
                'id' => 1234,
                'industry_broad_id' => 13,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            234 =>
            array (
                'id' => 1235,
                'industry_broad_id' => 13,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            235 =>
            array (
                'id' => 1236,
                'industry_broad_id' => 13,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            236 =>
            array (
                'id' => 1237,
                'industry_broad_id' => 13,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            237 =>
            array (
                'id' => 1238,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            238 =>
            array (
                'id' => 1239,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            239 =>
            array (
                'id' => 1240,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            240 =>
            array (
                'id' => 1241,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            241 =>
            array (
                'id' => 1242,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            242 =>
            array (
                'id' => 1243,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            243 =>
            array (
                'id' => 1244,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            244 =>
            array (
                'id' => 1245,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            245 =>
            array (
                'id' => 1246,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            246 =>
            array (
                'id' => 1247,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            247 =>
            array (
                'id' => 1248,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            248 =>
            array (
                'id' => 1249,
                'industry_broad_id' => 13,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            249 =>
            array (
                'id' => 1250,
                'industry_broad_id' => 13,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            250 =>
            array (
                'id' => 1251,
                'industry_broad_id' => 13,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            251 =>
            array (
                'id' => 1252,
                'industry_broad_id' => 13,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            252 =>
            array (
                'id' => 1253,
                'industry_broad_id' => 13,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            253 =>
            array (
                'id' => 1254,
                'industry_broad_id' => 13,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            254 =>
            array (
                'id' => 1255,
                'industry_broad_id' => 13,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            255 =>
            array (
                'id' => 1256,
                'industry_broad_id' => 13,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            256 =>
            array (
                'id' => 1257,
                'industry_broad_id' => 13,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            257 =>
            array (
                'id' => 1258,
                'industry_broad_id' => 13,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            258 =>
            array (
                'id' => 1259,
                'industry_broad_id' => 13,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            259 =>
            array (
                'id' => 1260,
                'industry_broad_id' => 13,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            260 =>
            array (
                'id' => 1261,
                'industry_broad_id' => 13,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            261 =>
            array (
                'id' => 1262,
                'industry_broad_id' => 13,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            262 =>
            array (
                'id' => 1263,
                'industry_broad_id' => 13,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            263 =>
            array (
                'id' => 1264,
                'industry_broad_id' => 13,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            264 =>
            array (
                'id' => 1265,
                'industry_broad_id' => 13,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            265 =>
            array (
                'id' => 1266,
                'industry_broad_id' => 13,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            266 =>
            array (
                'id' => 1267,
                'industry_broad_id' => 13,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            267 =>
            array (
                'id' => 1268,
                'industry_broad_id' => 13,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            268 =>
            array (
                'id' => 1269,
                'industry_broad_id' => 13,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            269 =>
            array (
                'id' => 1270,
                'industry_broad_id' => 13,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            270 =>
            array (
                'id' => 1271,
                'industry_broad_id' => 13,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            271 =>
            array (
                'id' => 1272,
                'industry_broad_id' => 13,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            272 =>
            array (
                'id' => 1273,
                'industry_broad_id' => 13,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            273 =>
            array (
                'id' => 1274,
                'industry_broad_id' => 13,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            274 =>
            array (
                'id' => 1275,
                'industry_broad_id' => 13,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            275 =>
            array (
                'id' => 1276,
                'industry_broad_id' => 13,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            276 =>
            array (
                'id' => 1277,
                'industry_broad_id' => 13,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            277 =>
            array (
                'id' => 1278,
                'industry_broad_id' => 13,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            278 =>
            array (
                'id' => 1279,
                'industry_broad_id' => 13,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            279 =>
            array (
                'id' => 1280,
                'industry_broad_id' => 13,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            280 =>
            array (
                'id' => 1281,
                'industry_broad_id' => 13,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            281 =>
            array (
                'id' => 1282,
                'industry_broad_id' => 13,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            282 =>
            array (
                'id' => 1283,
                'industry_broad_id' => 13,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            283 =>
            array (
                'id' => 1284,
                'industry_broad_id' => 13,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            284 =>
            array (
                'id' => 1285,
                'industry_broad_id' => 13,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            285 =>
            array (
                'id' => 1286,
                'industry_broad_id' => 13,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            286 =>
            array (
                'id' => 1287,
                'industry_broad_id' => 13,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:22',
                'updated_at' => '2022-09-27 16:33:22',
                'deleted_at' => NULL,
            ),
            287 =>
            array (
                'id' => 1288,
                'industry_broad_id' => 14,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            288 =>
            array (
                'id' => 1289,
                'industry_broad_id' => 14,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            289 =>
            array (
                'id' => 1290,
                'industry_broad_id' => 14,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            290 =>
            array (
                'id' => 1291,
                'industry_broad_id' => 14,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            291 =>
            array (
                'id' => 1292,
                'industry_broad_id' => 14,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            292 =>
            array (
                'id' => 1293,
                'industry_broad_id' => 14,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            293 =>
            array (
                'id' => 1294,
                'industry_broad_id' => 14,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            294 =>
            array (
                'id' => 1295,
                'industry_broad_id' => 14,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            295 =>
            array (
                'id' => 1296,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            296 =>
            array (
                'id' => 1297,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            297 =>
            array (
                'id' => 1298,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            298 =>
            array (
                'id' => 1299,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            299 =>
            array (
                'id' => 1300,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            300 =>
            array (
                'id' => 1301,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            301 =>
            array (
                'id' => 1302,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            302 =>
            array (
                'id' => 1303,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            303 =>
            array (
                'id' => 1304,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            304 =>
            array (
                'id' => 1305,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            305 =>
            array (
                'id' => 1306,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            306 =>
            array (
                'id' => 1307,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            307 =>
            array (
                'id' => 1308,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            308 =>
            array (
                'id' => 1309,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            309 =>
            array (
                'id' => 1310,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            310 =>
            array (
                'id' => 1311,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            311 =>
            array (
                'id' => 1312,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            312 =>
            array (
                'id' => 1313,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            313 =>
            array (
                'id' => 1314,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            314 =>
            array (
                'id' => 1315,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            315 =>
            array (
                'id' => 1316,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            316 =>
            array (
                'id' => 1317,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            317 =>
            array (
                'id' => 1318,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            318 =>
            array (
                'id' => 1319,
                'industry_broad_id' => 14,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            319 =>
            array (
                'id' => 1320,
                'industry_broad_id' => 14,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            320 =>
            array (
                'id' => 1321,
                'industry_broad_id' => 14,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            321 =>
            array (
                'id' => 1322,
                'industry_broad_id' => 14,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            322 =>
            array (
                'id' => 1323,
                'industry_broad_id' => 14,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            323 =>
            array (
                'id' => 1324,
                'industry_broad_id' => 14,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            324 =>
            array (
                'id' => 1325,
                'industry_broad_id' => 14,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            325 =>
            array (
                'id' => 1326,
                'industry_broad_id' => 14,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            326 =>
            array (
                'id' => 1327,
                'industry_broad_id' => 14,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            327 =>
            array (
                'id' => 1328,
                'industry_broad_id' => 14,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            328 =>
            array (
                'id' => 1329,
                'industry_broad_id' => 14,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            329 =>
            array (
                'id' => 1330,
                'industry_broad_id' => 14,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            330 =>
            array (
                'id' => 1331,
                'industry_broad_id' => 14,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            331 =>
            array (
                'id' => 1332,
                'industry_broad_id' => 14,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            332 =>
            array (
                'id' => 1333,
                'industry_broad_id' => 14,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            333 =>
            array (
                'id' => 1334,
                'industry_broad_id' => 14,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            334 =>
            array (
                'id' => 1335,
                'industry_broad_id' => 14,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            335 =>
            array (
                'id' => 1336,
                'industry_broad_id' => 14,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            336 =>
            array (
                'id' => 1337,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            337 =>
            array (
                'id' => 1338,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            338 =>
            array (
                'id' => 1339,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            339 =>
            array (
                'id' => 1340,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            340 =>
            array (
                'id' => 1341,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            341 =>
            array (
                'id' => 1342,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            342 =>
            array (
                'id' => 1343,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            343 =>
            array (
                'id' => 1344,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            344 =>
            array (
                'id' => 1345,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            345 =>
            array (
                'id' => 1346,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            346 =>
            array (
                'id' => 1347,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            347 =>
            array (
                'id' => 1348,
                'industry_broad_id' => 14,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            348 =>
            array (
                'id' => 1349,
                'industry_broad_id' => 14,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            349 =>
            array (
                'id' => 1350,
                'industry_broad_id' => 14,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            350 =>
            array (
                'id' => 1351,
                'industry_broad_id' => 14,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            351 =>
            array (
                'id' => 1352,
                'industry_broad_id' => 14,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            352 =>
            array (
                'id' => 1353,
                'industry_broad_id' => 14,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            353 =>
            array (
                'id' => 1354,
                'industry_broad_id' => 14,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            354 =>
            array (
                'id' => 1355,
                'industry_broad_id' => 14,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            355 =>
            array (
                'id' => 1356,
                'industry_broad_id' => 14,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            356 =>
            array (
                'id' => 1357,
                'industry_broad_id' => 14,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            357 =>
            array (
                'id' => 1358,
                'industry_broad_id' => 14,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            358 =>
            array (
                'id' => 1359,
                'industry_broad_id' => 14,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            359 =>
            array (
                'id' => 1360,
                'industry_broad_id' => 14,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            360 =>
            array (
                'id' => 1361,
                'industry_broad_id' => 14,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            361 =>
            array (
                'id' => 1362,
                'industry_broad_id' => 14,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            362 =>
            array (
                'id' => 1363,
                'industry_broad_id' => 14,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            363 =>
            array (
                'id' => 1364,
                'industry_broad_id' => 14,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            364 =>
            array (
                'id' => 1365,
                'industry_broad_id' => 14,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            365 =>
            array (
                'id' => 1366,
                'industry_broad_id' => 14,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            366 =>
            array (
                'id' => 1367,
                'industry_broad_id' => 14,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            367 =>
            array (
                'id' => 1368,
                'industry_broad_id' => 14,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            368 =>
            array (
                'id' => 1369,
                'industry_broad_id' => 14,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            369 =>
            array (
                'id' => 1370,
                'industry_broad_id' => 14,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            370 =>
            array (
                'id' => 1371,
                'industry_broad_id' => 14,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            371 =>
            array (
                'id' => 1372,
                'industry_broad_id' => 14,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            372 =>
            array (
                'id' => 1373,
                'industry_broad_id' => 14,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            373 =>
            array (
                'id' => 1374,
                'industry_broad_id' => 14,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            374 =>
            array (
                'id' => 1375,
                'industry_broad_id' => 14,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            375 =>
            array (
                'id' => 1376,
                'industry_broad_id' => 14,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            376 =>
            array (
                'id' => 1377,
                'industry_broad_id' => 14,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            377 =>
            array (
                'id' => 1378,
                'industry_broad_id' => 14,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            378 =>
            array (
                'id' => 1379,
                'industry_broad_id' => 14,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            379 =>
            array (
                'id' => 1380,
                'industry_broad_id' => 14,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            380 =>
            array (
                'id' => 1381,
                'industry_broad_id' => 14,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            381 =>
            array (
                'id' => 1382,
                'industry_broad_id' => 14,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            382 =>
            array (
                'id' => 1383,
                'industry_broad_id' => 14,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            383 =>
            array (
                'id' => 1384,
                'industry_broad_id' => 14,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            384 =>
            array (
                'id' => 1385,
                'industry_broad_id' => 14,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            385 =>
            array (
                'id' => 1386,
                'industry_broad_id' => 14,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            386 =>
            array (
                'id' => 1387,
                'industry_broad_id' => 15,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            387 =>
            array (
                'id' => 1388,
                'industry_broad_id' => 15,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            388 =>
            array (
                'id' => 1389,
                'industry_broad_id' => 15,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            389 =>
            array (
                'id' => 1390,
                'industry_broad_id' => 15,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            390 =>
            array (
                'id' => 1391,
                'industry_broad_id' => 15,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            391 =>
            array (
                'id' => 1392,
                'industry_broad_id' => 15,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            392 =>
            array (
                'id' => 1393,
                'industry_broad_id' => 15,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            393 =>
            array (
                'id' => 1394,
                'industry_broad_id' => 15,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            394 =>
            array (
                'id' => 1395,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            395 =>
            array (
                'id' => 1396,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            396 =>
            array (
                'id' => 1397,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            397 =>
            array (
                'id' => 1398,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            398 =>
            array (
                'id' => 1399,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            399 =>
            array (
                'id' => 1400,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            400 =>
            array (
                'id' => 1401,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            401 =>
            array (
                'id' => 1402,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            402 =>
            array (
                'id' => 1403,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            403 =>
            array (
                'id' => 1404,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            404 =>
            array (
                'id' => 1405,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            405 =>
            array (
                'id' => 1406,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            406 =>
            array (
                'id' => 1407,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            407 =>
            array (
                'id' => 1408,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            408 =>
            array (
                'id' => 1409,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            409 =>
            array (
                'id' => 1410,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            410 =>
            array (
                'id' => 1411,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            411 =>
            array (
                'id' => 1412,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            412 =>
            array (
                'id' => 1413,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            413 =>
            array (
                'id' => 1414,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            414 =>
            array (
                'id' => 1415,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            415 =>
            array (
                'id' => 1416,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            416 =>
            array (
                'id' => 1417,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            417 =>
            array (
                'id' => 1418,
                'industry_broad_id' => 15,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            418 =>
            array (
                'id' => 1419,
                'industry_broad_id' => 15,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            419 =>
            array (
                'id' => 1420,
                'industry_broad_id' => 15,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            420 =>
            array (
                'id' => 1421,
                'industry_broad_id' => 15,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            421 =>
            array (
                'id' => 1422,
                'industry_broad_id' => 15,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            422 =>
            array (
                'id' => 1423,
                'industry_broad_id' => 15,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            423 =>
            array (
                'id' => 1424,
                'industry_broad_id' => 15,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            424 =>
            array (
                'id' => 1425,
                'industry_broad_id' => 15,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            425 =>
            array (
                'id' => 1426,
                'industry_broad_id' => 15,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            426 =>
            array (
                'id' => 1427,
                'industry_broad_id' => 15,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            427 =>
            array (
                'id' => 1428,
                'industry_broad_id' => 15,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            428 =>
            array (
                'id' => 1429,
                'industry_broad_id' => 15,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            429 =>
            array (
                'id' => 1430,
                'industry_broad_id' => 15,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            430 =>
            array (
                'id' => 1431,
                'industry_broad_id' => 15,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            431 =>
            array (
                'id' => 1432,
                'industry_broad_id' => 15,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            432 =>
            array (
                'id' => 1433,
                'industry_broad_id' => 15,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            433 =>
            array (
                'id' => 1434,
                'industry_broad_id' => 15,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            434 =>
            array (
                'id' => 1435,
                'industry_broad_id' => 15,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            435 =>
            array (
                'id' => 1436,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            436 =>
            array (
                'id' => 1437,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            437 =>
            array (
                'id' => 1438,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            438 =>
            array (
                'id' => 1439,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            439 =>
            array (
                'id' => 1440,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            440 =>
            array (
                'id' => 1441,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            441 =>
            array (
                'id' => 1442,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            442 =>
            array (
                'id' => 1443,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            443 =>
            array (
                'id' => 1444,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            444 =>
            array (
                'id' => 1445,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            445 =>
            array (
                'id' => 1446,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            446 =>
            array (
                'id' => 1447,
                'industry_broad_id' => 15,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            447 =>
            array (
                'id' => 1448,
                'industry_broad_id' => 15,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            448 =>
            array (
                'id' => 1449,
                'industry_broad_id' => 15,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            449 =>
            array (
                'id' => 1450,
                'industry_broad_id' => 15,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            450 =>
            array (
                'id' => 1451,
                'industry_broad_id' => 15,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            451 =>
            array (
                'id' => 1452,
                'industry_broad_id' => 15,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            452 =>
            array (
                'id' => 1453,
                'industry_broad_id' => 15,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            453 =>
            array (
                'id' => 1454,
                'industry_broad_id' => 15,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            454 =>
            array (
                'id' => 1455,
                'industry_broad_id' => 15,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            455 =>
            array (
                'id' => 1456,
                'industry_broad_id' => 15,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            456 =>
            array (
                'id' => 1457,
                'industry_broad_id' => 15,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            457 =>
            array (
                'id' => 1458,
                'industry_broad_id' => 15,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            458 =>
            array (
                'id' => 1459,
                'industry_broad_id' => 15,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            459 =>
            array (
                'id' => 1460,
                'industry_broad_id' => 15,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            460 =>
            array (
                'id' => 1461,
                'industry_broad_id' => 15,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            461 =>
            array (
                'id' => 1462,
                'industry_broad_id' => 15,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            462 =>
            array (
                'id' => 1463,
                'industry_broad_id' => 15,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            463 =>
            array (
                'id' => 1464,
                'industry_broad_id' => 15,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            464 =>
            array (
                'id' => 1465,
                'industry_broad_id' => 15,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            465 =>
            array (
                'id' => 1466,
                'industry_broad_id' => 15,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            466 =>
            array (
                'id' => 1467,
                'industry_broad_id' => 15,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            467 =>
            array (
                'id' => 1468,
                'industry_broad_id' => 15,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            468 =>
            array (
                'id' => 1469,
                'industry_broad_id' => 15,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            469 =>
            array (
                'id' => 1470,
                'industry_broad_id' => 15,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            470 =>
            array (
                'id' => 1471,
                'industry_broad_id' => 15,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            471 =>
            array (
                'id' => 1472,
                'industry_broad_id' => 15,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            472 =>
            array (
                'id' => 1473,
                'industry_broad_id' => 15,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            473 =>
            array (
                'id' => 1474,
                'industry_broad_id' => 15,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            474 =>
            array (
                'id' => 1475,
                'industry_broad_id' => 15,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            475 =>
            array (
                'id' => 1476,
                'industry_broad_id' => 15,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            476 =>
            array (
                'id' => 1477,
                'industry_broad_id' => 15,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            477 =>
            array (
                'id' => 1478,
                'industry_broad_id' => 15,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            478 =>
            array (
                'id' => 1479,
                'industry_broad_id' => 15,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            479 =>
            array (
                'id' => 1480,
                'industry_broad_id' => 15,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            480 =>
            array (
                'id' => 1481,
                'industry_broad_id' => 15,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            481 =>
            array (
                'id' => 1482,
                'industry_broad_id' => 15,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            482 =>
            array (
                'id' => 1483,
                'industry_broad_id' => 15,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            483 =>
            array (
                'id' => 1484,
                'industry_broad_id' => 15,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            484 =>
            array (
                'id' => 1485,
                'industry_broad_id' => 15,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            485 =>
            array (
                'id' => 1486,
                'industry_broad_id' => 16,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            486 =>
            array (
                'id' => 1487,
                'industry_broad_id' => 16,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            487 =>
            array (
                'id' => 1488,
                'industry_broad_id' => 16,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            488 =>
            array (
                'id' => 1489,
                'industry_broad_id' => 16,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            489 =>
            array (
                'id' => 1490,
                'industry_broad_id' => 16,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            490 =>
            array (
                'id' => 1491,
                'industry_broad_id' => 16,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            491 =>
            array (
                'id' => 1492,
                'industry_broad_id' => 16,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            492 =>
            array (
                'id' => 1493,
                'industry_broad_id' => 16,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            493 =>
            array (
                'id' => 1494,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            494 =>
            array (
                'id' => 1495,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            495 =>
            array (
                'id' => 1496,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            496 =>
            array (
                'id' => 1497,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            497 =>
            array (
                'id' => 1498,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            498 =>
            array (
                'id' => 1499,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            499 =>
            array (
                'id' => 1500,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('industry_middles')->insert(array (
            0 =>
            array (
                'id' => 1501,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 1502,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 1503,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 1504,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 1505,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 1506,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 1507,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 1508,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 1509,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 1510,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 1511,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 1512,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 1513,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 1514,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 1515,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 1516,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 1517,
                'industry_broad_id' => 16,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 1518,
                'industry_broad_id' => 16,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 1519,
                'industry_broad_id' => 16,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 1520,
                'industry_broad_id' => 16,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 1521,
                'industry_broad_id' => 16,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 1522,
                'industry_broad_id' => 16,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 1523,
                'industry_broad_id' => 16,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 1524,
                'industry_broad_id' => 16,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 1525,
                'industry_broad_id' => 16,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 1526,
                'industry_broad_id' => 16,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 1527,
                'industry_broad_id' => 16,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 1528,
                'industry_broad_id' => 16,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 1529,
                'industry_broad_id' => 16,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 1530,
                'industry_broad_id' => 16,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 1531,
                'industry_broad_id' => 16,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 1532,
                'industry_broad_id' => 16,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 1533,
                'industry_broad_id' => 16,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 1534,
                'industry_broad_id' => 16,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 1535,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 1536,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 1537,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 1538,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 1539,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 1540,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 1541,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 1542,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 1543,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 1544,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 1545,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 1546,
                'industry_broad_id' => 16,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 1547,
                'industry_broad_id' => 16,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => 1548,
                'industry_broad_id' => 16,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => 1549,
                'industry_broad_id' => 16,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'id' => 1550,
                'industry_broad_id' => 16,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            50 =>
            array (
                'id' => 1551,
                'industry_broad_id' => 16,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            51 =>
            array (
                'id' => 1552,
                'industry_broad_id' => 16,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            52 =>
            array (
                'id' => 1553,
                'industry_broad_id' => 16,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            53 =>
            array (
                'id' => 1554,
                'industry_broad_id' => 16,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            54 =>
            array (
                'id' => 1555,
                'industry_broad_id' => 16,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            55 =>
            array (
                'id' => 1556,
                'industry_broad_id' => 16,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            56 =>
            array (
                'id' => 1557,
                'industry_broad_id' => 16,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            57 =>
            array (
                'id' => 1558,
                'industry_broad_id' => 16,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            58 =>
            array (
                'id' => 1559,
                'industry_broad_id' => 16,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            59 =>
            array (
                'id' => 1560,
                'industry_broad_id' => 16,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            60 =>
            array (
                'id' => 1561,
                'industry_broad_id' => 16,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            61 =>
            array (
                'id' => 1562,
                'industry_broad_id' => 16,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            62 =>
            array (
                'id' => 1563,
                'industry_broad_id' => 16,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            63 =>
            array (
                'id' => 1564,
                'industry_broad_id' => 16,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            64 =>
            array (
                'id' => 1565,
                'industry_broad_id' => 16,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            65 =>
            array (
                'id' => 1566,
                'industry_broad_id' => 16,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            66 =>
            array (
                'id' => 1567,
                'industry_broad_id' => 16,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            67 =>
            array (
                'id' => 1568,
                'industry_broad_id' => 16,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            68 =>
            array (
                'id' => 1569,
                'industry_broad_id' => 16,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            69 =>
            array (
                'id' => 1570,
                'industry_broad_id' => 16,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            70 =>
            array (
                'id' => 1571,
                'industry_broad_id' => 16,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            71 =>
            array (
                'id' => 1572,
                'industry_broad_id' => 16,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            72 =>
            array (
                'id' => 1573,
                'industry_broad_id' => 16,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            73 =>
            array (
                'id' => 1574,
                'industry_broad_id' => 16,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            74 =>
            array (
                'id' => 1575,
                'industry_broad_id' => 16,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            75 =>
            array (
                'id' => 1576,
                'industry_broad_id' => 16,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            76 =>
            array (
                'id' => 1577,
                'industry_broad_id' => 16,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            77 =>
            array (
                'id' => 1578,
                'industry_broad_id' => 16,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            78 =>
            array (
                'id' => 1579,
                'industry_broad_id' => 16,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            79 =>
            array (
                'id' => 1580,
                'industry_broad_id' => 16,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            80 =>
            array (
                'id' => 1581,
                'industry_broad_id' => 16,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            81 =>
            array (
                'id' => 1582,
                'industry_broad_id' => 16,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            82 =>
            array (
                'id' => 1583,
                'industry_broad_id' => 16,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            83 =>
            array (
                'id' => 1584,
                'industry_broad_id' => 16,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:23',
                'updated_at' => '2022-09-27 16:33:23',
                'deleted_at' => NULL,
            ),
            84 =>
            array (
                'id' => 1585,
                'industry_broad_id' => 17,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            85 =>
            array (
                'id' => 1586,
                'industry_broad_id' => 17,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            86 =>
            array (
                'id' => 1587,
                'industry_broad_id' => 17,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            87 =>
            array (
                'id' => 1588,
                'industry_broad_id' => 17,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            88 =>
            array (
                'id' => 1589,
                'industry_broad_id' => 17,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            89 =>
            array (
                'id' => 1590,
                'industry_broad_id' => 17,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            90 =>
            array (
                'id' => 1591,
                'industry_broad_id' => 17,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            91 =>
            array (
                'id' => 1592,
                'industry_broad_id' => 17,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            92 =>
            array (
                'id' => 1593,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            93 =>
            array (
                'id' => 1594,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            94 =>
            array (
                'id' => 1595,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            95 =>
            array (
                'id' => 1596,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            96 =>
            array (
                'id' => 1597,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            97 =>
            array (
                'id' => 1598,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            98 =>
            array (
                'id' => 1599,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            99 =>
            array (
                'id' => 1600,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            100 =>
            array (
                'id' => 1601,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            101 =>
            array (
                'id' => 1602,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            102 =>
            array (
                'id' => 1603,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            103 =>
            array (
                'id' => 1604,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            104 =>
            array (
                'id' => 1605,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            105 =>
            array (
                'id' => 1606,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            106 =>
            array (
                'id' => 1607,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            107 =>
            array (
                'id' => 1608,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            108 =>
            array (
                'id' => 1609,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            109 =>
            array (
                'id' => 1610,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            110 =>
            array (
                'id' => 1611,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            111 =>
            array (
                'id' => 1612,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            112 =>
            array (
                'id' => 1613,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            113 =>
            array (
                'id' => 1614,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            114 =>
            array (
                'id' => 1615,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            115 =>
            array (
                'id' => 1616,
                'industry_broad_id' => 17,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            116 =>
            array (
                'id' => 1617,
                'industry_broad_id' => 17,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            117 =>
            array (
                'id' => 1618,
                'industry_broad_id' => 17,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            118 =>
            array (
                'id' => 1619,
                'industry_broad_id' => 17,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            119 =>
            array (
                'id' => 1620,
                'industry_broad_id' => 17,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            120 =>
            array (
                'id' => 1621,
                'industry_broad_id' => 17,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            121 =>
            array (
                'id' => 1622,
                'industry_broad_id' => 17,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            122 =>
            array (
                'id' => 1623,
                'industry_broad_id' => 17,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            123 =>
            array (
                'id' => 1624,
                'industry_broad_id' => 17,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            124 =>
            array (
                'id' => 1625,
                'industry_broad_id' => 17,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            125 =>
            array (
                'id' => 1626,
                'industry_broad_id' => 17,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            126 =>
            array (
                'id' => 1627,
                'industry_broad_id' => 17,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            127 =>
            array (
                'id' => 1628,
                'industry_broad_id' => 17,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            128 =>
            array (
                'id' => 1629,
                'industry_broad_id' => 17,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            129 =>
            array (
                'id' => 1630,
                'industry_broad_id' => 17,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            130 =>
            array (
                'id' => 1631,
                'industry_broad_id' => 17,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            131 =>
            array (
                'id' => 1632,
                'industry_broad_id' => 17,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            132 =>
            array (
                'id' => 1633,
                'industry_broad_id' => 17,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            133 =>
            array (
                'id' => 1634,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            134 =>
            array (
                'id' => 1635,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            135 =>
            array (
                'id' => 1636,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            136 =>
            array (
                'id' => 1637,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            137 =>
            array (
                'id' => 1638,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            138 =>
            array (
                'id' => 1639,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            139 =>
            array (
                'id' => 1640,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            140 =>
            array (
                'id' => 1641,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            141 =>
            array (
                'id' => 1642,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            142 =>
            array (
                'id' => 1643,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            143 =>
            array (
                'id' => 1644,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            144 =>
            array (
                'id' => 1645,
                'industry_broad_id' => 17,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            145 =>
            array (
                'id' => 1646,
                'industry_broad_id' => 17,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            146 =>
            array (
                'id' => 1647,
                'industry_broad_id' => 17,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            147 =>
            array (
                'id' => 1648,
                'industry_broad_id' => 17,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            148 =>
            array (
                'id' => 1649,
                'industry_broad_id' => 17,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            149 =>
            array (
                'id' => 1650,
                'industry_broad_id' => 17,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            150 =>
            array (
                'id' => 1651,
                'industry_broad_id' => 17,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            151 =>
            array (
                'id' => 1652,
                'industry_broad_id' => 17,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            152 =>
            array (
                'id' => 1653,
                'industry_broad_id' => 17,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            153 =>
            array (
                'id' => 1654,
                'industry_broad_id' => 17,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            154 =>
            array (
                'id' => 1655,
                'industry_broad_id' => 17,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            155 =>
            array (
                'id' => 1656,
                'industry_broad_id' => 17,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            156 =>
            array (
                'id' => 1657,
                'industry_broad_id' => 17,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            157 =>
            array (
                'id' => 1658,
                'industry_broad_id' => 17,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            158 =>
            array (
                'id' => 1659,
                'industry_broad_id' => 17,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            159 =>
            array (
                'id' => 1660,
                'industry_broad_id' => 17,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            160 =>
            array (
                'id' => 1661,
                'industry_broad_id' => 17,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            161 =>
            array (
                'id' => 1662,
                'industry_broad_id' => 17,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            162 =>
            array (
                'id' => 1663,
                'industry_broad_id' => 17,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            163 =>
            array (
                'id' => 1664,
                'industry_broad_id' => 17,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            164 =>
            array (
                'id' => 1665,
                'industry_broad_id' => 17,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            165 =>
            array (
                'id' => 1666,
                'industry_broad_id' => 17,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            166 =>
            array (
                'id' => 1667,
                'industry_broad_id' => 17,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            167 =>
            array (
                'id' => 1668,
                'industry_broad_id' => 17,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            168 =>
            array (
                'id' => 1669,
                'industry_broad_id' => 17,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            169 =>
            array (
                'id' => 1670,
                'industry_broad_id' => 17,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            170 =>
            array (
                'id' => 1671,
                'industry_broad_id' => 17,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            171 =>
            array (
                'id' => 1672,
                'industry_broad_id' => 17,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            172 =>
            array (
                'id' => 1673,
                'industry_broad_id' => 17,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            173 =>
            array (
                'id' => 1674,
                'industry_broad_id' => 17,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            174 =>
            array (
                'id' => 1675,
                'industry_broad_id' => 17,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            175 =>
            array (
                'id' => 1676,
                'industry_broad_id' => 17,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            176 =>
            array (
                'id' => 1677,
                'industry_broad_id' => 17,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            177 =>
            array (
                'id' => 1678,
                'industry_broad_id' => 17,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            178 =>
            array (
                'id' => 1679,
                'industry_broad_id' => 17,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            179 =>
            array (
                'id' => 1680,
                'industry_broad_id' => 17,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            180 =>
            array (
                'id' => 1681,
                'industry_broad_id' => 17,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            181 =>
            array (
                'id' => 1682,
                'industry_broad_id' => 17,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            182 =>
            array (
                'id' => 1683,
                'industry_broad_id' => 17,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            183 =>
            array (
                'id' => 1684,
                'industry_broad_id' => 18,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            184 =>
            array (
                'id' => 1685,
                'industry_broad_id' => 18,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            185 =>
            array (
                'id' => 1686,
                'industry_broad_id' => 18,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            186 =>
            array (
                'id' => 1687,
                'industry_broad_id' => 18,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            187 =>
            array (
                'id' => 1688,
                'industry_broad_id' => 18,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            188 =>
            array (
                'id' => 1689,
                'industry_broad_id' => 18,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            189 =>
            array (
                'id' => 1690,
                'industry_broad_id' => 18,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            190 =>
            array (
                'id' => 1691,
                'industry_broad_id' => 18,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            191 =>
            array (
                'id' => 1692,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            192 =>
            array (
                'id' => 1693,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            193 =>
            array (
                'id' => 1694,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            194 =>
            array (
                'id' => 1695,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            195 =>
            array (
                'id' => 1696,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            196 =>
            array (
                'id' => 1697,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            197 =>
            array (
                'id' => 1698,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            198 =>
            array (
                'id' => 1699,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            199 =>
            array (
                'id' => 1700,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            200 =>
            array (
                'id' => 1701,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            201 =>
            array (
                'id' => 1702,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            202 =>
            array (
                'id' => 1703,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            203 =>
            array (
                'id' => 1704,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            204 =>
            array (
                'id' => 1705,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            205 =>
            array (
                'id' => 1706,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            206 =>
            array (
                'id' => 1707,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            207 =>
            array (
                'id' => 1708,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            208 =>
            array (
                'id' => 1709,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            209 =>
            array (
                'id' => 1710,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            210 =>
            array (
                'id' => 1711,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            211 =>
            array (
                'id' => 1712,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            212 =>
            array (
                'id' => 1713,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            213 =>
            array (
                'id' => 1714,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            214 =>
            array (
                'id' => 1715,
                'industry_broad_id' => 18,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            215 =>
            array (
                'id' => 1716,
                'industry_broad_id' => 18,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            216 =>
            array (
                'id' => 1717,
                'industry_broad_id' => 18,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            217 =>
            array (
                'id' => 1718,
                'industry_broad_id' => 18,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            218 =>
            array (
                'id' => 1719,
                'industry_broad_id' => 18,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            219 =>
            array (
                'id' => 1720,
                'industry_broad_id' => 18,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            220 =>
            array (
                'id' => 1721,
                'industry_broad_id' => 18,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            221 =>
            array (
                'id' => 1722,
                'industry_broad_id' => 18,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            222 =>
            array (
                'id' => 1723,
                'industry_broad_id' => 18,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            223 =>
            array (
                'id' => 1724,
                'industry_broad_id' => 18,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            224 =>
            array (
                'id' => 1725,
                'industry_broad_id' => 18,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            225 =>
            array (
                'id' => 1726,
                'industry_broad_id' => 18,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            226 =>
            array (
                'id' => 1727,
                'industry_broad_id' => 18,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            227 =>
            array (
                'id' => 1728,
                'industry_broad_id' => 18,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            228 =>
            array (
                'id' => 1729,
                'industry_broad_id' => 18,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            229 =>
            array (
                'id' => 1730,
                'industry_broad_id' => 18,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            230 =>
            array (
                'id' => 1731,
                'industry_broad_id' => 18,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            231 =>
            array (
                'id' => 1732,
                'industry_broad_id' => 18,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            232 =>
            array (
                'id' => 1733,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            233 =>
            array (
                'id' => 1734,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            234 =>
            array (
                'id' => 1735,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            235 =>
            array (
                'id' => 1736,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            236 =>
            array (
                'id' => 1737,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            237 =>
            array (
                'id' => 1738,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            238 =>
            array (
                'id' => 1739,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            239 =>
            array (
                'id' => 1740,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            240 =>
            array (
                'id' => 1741,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            241 =>
            array (
                'id' => 1742,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            242 =>
            array (
                'id' => 1743,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            243 =>
            array (
                'id' => 1744,
                'industry_broad_id' => 18,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            244 =>
            array (
                'id' => 1745,
                'industry_broad_id' => 18,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            245 =>
            array (
                'id' => 1746,
                'industry_broad_id' => 18,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            246 =>
            array (
                'id' => 1747,
                'industry_broad_id' => 18,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            247 =>
            array (
                'id' => 1748,
                'industry_broad_id' => 18,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            248 =>
            array (
                'id' => 1749,
                'industry_broad_id' => 18,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            249 =>
            array (
                'id' => 1750,
                'industry_broad_id' => 18,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            250 =>
            array (
                'id' => 1751,
                'industry_broad_id' => 18,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            251 =>
            array (
                'id' => 1752,
                'industry_broad_id' => 18,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            252 =>
            array (
                'id' => 1753,
                'industry_broad_id' => 18,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            253 =>
            array (
                'id' => 1754,
                'industry_broad_id' => 18,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            254 =>
            array (
                'id' => 1755,
                'industry_broad_id' => 18,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            255 =>
            array (
                'id' => 1756,
                'industry_broad_id' => 18,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            256 =>
            array (
                'id' => 1757,
                'industry_broad_id' => 18,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            257 =>
            array (
                'id' => 1758,
                'industry_broad_id' => 18,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            258 =>
            array (
                'id' => 1759,
                'industry_broad_id' => 18,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            259 =>
            array (
                'id' => 1760,
                'industry_broad_id' => 18,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            260 =>
            array (
                'id' => 1761,
                'industry_broad_id' => 18,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            261 =>
            array (
                'id' => 1762,
                'industry_broad_id' => 18,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            262 =>
            array (
                'id' => 1763,
                'industry_broad_id' => 18,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            263 =>
            array (
                'id' => 1764,
                'industry_broad_id' => 18,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            264 =>
            array (
                'id' => 1765,
                'industry_broad_id' => 18,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            265 =>
            array (
                'id' => 1766,
                'industry_broad_id' => 18,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            266 =>
            array (
                'id' => 1767,
                'industry_broad_id' => 18,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            267 =>
            array (
                'id' => 1768,
                'industry_broad_id' => 18,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            268 =>
            array (
                'id' => 1769,
                'industry_broad_id' => 18,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            269 =>
            array (
                'id' => 1770,
                'industry_broad_id' => 18,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            270 =>
            array (
                'id' => 1771,
                'industry_broad_id' => 18,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            271 =>
            array (
                'id' => 1772,
                'industry_broad_id' => 18,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            272 =>
            array (
                'id' => 1773,
                'industry_broad_id' => 18,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            273 =>
            array (
                'id' => 1774,
                'industry_broad_id' => 18,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            274 =>
            array (
                'id' => 1775,
                'industry_broad_id' => 18,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            275 =>
            array (
                'id' => 1776,
                'industry_broad_id' => 18,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            276 =>
            array (
                'id' => 1777,
                'industry_broad_id' => 18,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            277 =>
            array (
                'id' => 1778,
                'industry_broad_id' => 18,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            278 =>
            array (
                'id' => 1779,
                'industry_broad_id' => 18,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            279 =>
            array (
                'id' => 1780,
                'industry_broad_id' => 18,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            280 =>
            array (
                'id' => 1781,
                'industry_broad_id' => 18,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            281 =>
            array (
                'id' => 1782,
                'industry_broad_id' => 18,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:24',
                'updated_at' => '2022-09-27 16:33:24',
                'deleted_at' => NULL,
            ),
            282 =>
            array (
                'id' => 1783,
                'industry_broad_id' => 19,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            283 =>
            array (
                'id' => 1784,
                'industry_broad_id' => 19,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            284 =>
            array (
                'id' => 1785,
                'industry_broad_id' => 19,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            285 =>
            array (
                'id' => 1786,
                'industry_broad_id' => 19,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            286 =>
            array (
                'id' => 1787,
                'industry_broad_id' => 19,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            287 =>
            array (
                'id' => 1788,
                'industry_broad_id' => 19,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            288 =>
            array (
                'id' => 1789,
                'industry_broad_id' => 19,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            289 =>
            array (
                'id' => 1790,
                'industry_broad_id' => 19,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            290 =>
            array (
                'id' => 1791,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            291 =>
            array (
                'id' => 1792,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            292 =>
            array (
                'id' => 1793,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            293 =>
            array (
                'id' => 1794,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            294 =>
            array (
                'id' => 1795,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            295 =>
            array (
                'id' => 1796,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            296 =>
            array (
                'id' => 1797,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            297 =>
            array (
                'id' => 1798,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            298 =>
            array (
                'id' => 1799,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            299 =>
            array (
                'id' => 1800,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            300 =>
            array (
                'id' => 1801,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            301 =>
            array (
                'id' => 1802,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            302 =>
            array (
                'id' => 1803,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            303 =>
            array (
                'id' => 1804,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            304 =>
            array (
                'id' => 1805,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            305 =>
            array (
                'id' => 1806,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            306 =>
            array (
                'id' => 1807,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            307 =>
            array (
                'id' => 1808,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            308 =>
            array (
                'id' => 1809,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            309 =>
            array (
                'id' => 1810,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            310 =>
            array (
                'id' => 1811,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            311 =>
            array (
                'id' => 1812,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            312 =>
            array (
                'id' => 1813,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            313 =>
            array (
                'id' => 1814,
                'industry_broad_id' => 19,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            314 =>
            array (
                'id' => 1815,
                'industry_broad_id' => 19,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            315 =>
            array (
                'id' => 1816,
                'industry_broad_id' => 19,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            316 =>
            array (
                'id' => 1817,
                'industry_broad_id' => 19,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            317 =>
            array (
                'id' => 1818,
                'industry_broad_id' => 19,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            318 =>
            array (
                'id' => 1819,
                'industry_broad_id' => 19,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            319 =>
            array (
                'id' => 1820,
                'industry_broad_id' => 19,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            320 =>
            array (
                'id' => 1821,
                'industry_broad_id' => 19,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            321 =>
            array (
                'id' => 1822,
                'industry_broad_id' => 19,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            322 =>
            array (
                'id' => 1823,
                'industry_broad_id' => 19,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            323 =>
            array (
                'id' => 1824,
                'industry_broad_id' => 19,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            324 =>
            array (
                'id' => 1825,
                'industry_broad_id' => 19,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            325 =>
            array (
                'id' => 1826,
                'industry_broad_id' => 19,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            326 =>
            array (
                'id' => 1827,
                'industry_broad_id' => 19,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            327 =>
            array (
                'id' => 1828,
                'industry_broad_id' => 19,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            328 =>
            array (
                'id' => 1829,
                'industry_broad_id' => 19,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            329 =>
            array (
                'id' => 1830,
                'industry_broad_id' => 19,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            330 =>
            array (
                'id' => 1831,
                'industry_broad_id' => 19,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            331 =>
            array (
                'id' => 1832,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            332 =>
            array (
                'id' => 1833,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            333 =>
            array (
                'id' => 1834,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            334 =>
            array (
                'id' => 1835,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            335 =>
            array (
                'id' => 1836,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            336 =>
            array (
                'id' => 1837,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            337 =>
            array (
                'id' => 1838,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            338 =>
            array (
                'id' => 1839,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            339 =>
            array (
                'id' => 1840,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            340 =>
            array (
                'id' => 1841,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            341 =>
            array (
                'id' => 1842,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            342 =>
            array (
                'id' => 1843,
                'industry_broad_id' => 19,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            343 =>
            array (
                'id' => 1844,
                'industry_broad_id' => 19,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            344 =>
            array (
                'id' => 1845,
                'industry_broad_id' => 19,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            345 =>
            array (
                'id' => 1846,
                'industry_broad_id' => 19,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            346 =>
            array (
                'id' => 1847,
                'industry_broad_id' => 19,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            347 =>
            array (
                'id' => 1848,
                'industry_broad_id' => 19,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            348 =>
            array (
                'id' => 1849,
                'industry_broad_id' => 19,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            349 =>
            array (
                'id' => 1850,
                'industry_broad_id' => 19,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            350 =>
            array (
                'id' => 1851,
                'industry_broad_id' => 19,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            351 =>
            array (
                'id' => 1852,
                'industry_broad_id' => 19,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            352 =>
            array (
                'id' => 1853,
                'industry_broad_id' => 19,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            353 =>
            array (
                'id' => 1854,
                'industry_broad_id' => 19,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            354 =>
            array (
                'id' => 1855,
                'industry_broad_id' => 19,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            355 =>
            array (
                'id' => 1856,
                'industry_broad_id' => 19,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            356 =>
            array (
                'id' => 1857,
                'industry_broad_id' => 19,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            357 =>
            array (
                'id' => 1858,
                'industry_broad_id' => 19,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            358 =>
            array (
                'id' => 1859,
                'industry_broad_id' => 19,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            359 =>
            array (
                'id' => 1860,
                'industry_broad_id' => 19,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            360 =>
            array (
                'id' => 1861,
                'industry_broad_id' => 19,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            361 =>
            array (
                'id' => 1862,
                'industry_broad_id' => 19,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            362 =>
            array (
                'id' => 1863,
                'industry_broad_id' => 19,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            363 =>
            array (
                'id' => 1864,
                'industry_broad_id' => 19,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            364 =>
            array (
                'id' => 1865,
                'industry_broad_id' => 19,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            365 =>
            array (
                'id' => 1866,
                'industry_broad_id' => 19,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            366 =>
            array (
                'id' => 1867,
                'industry_broad_id' => 19,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            367 =>
            array (
                'id' => 1868,
                'industry_broad_id' => 19,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            368 =>
            array (
                'id' => 1869,
                'industry_broad_id' => 19,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            369 =>
            array (
                'id' => 1870,
                'industry_broad_id' => 19,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            370 =>
            array (
                'id' => 1871,
                'industry_broad_id' => 19,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            371 =>
            array (
                'id' => 1872,
                'industry_broad_id' => 19,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            372 =>
            array (
                'id' => 1873,
                'industry_broad_id' => 19,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            373 =>
            array (
                'id' => 1874,
                'industry_broad_id' => 19,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            374 =>
            array (
                'id' => 1875,
                'industry_broad_id' => 19,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            375 =>
            array (
                'id' => 1876,
                'industry_broad_id' => 19,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            376 =>
            array (
                'id' => 1877,
                'industry_broad_id' => 19,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            377 =>
            array (
                'id' => 1878,
                'industry_broad_id' => 19,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            378 =>
            array (
                'id' => 1879,
                'industry_broad_id' => 19,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            379 =>
            array (
                'id' => 1880,
                'industry_broad_id' => 19,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            380 =>
            array (
                'id' => 1881,
                'industry_broad_id' => 19,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            381 =>
            array (
                'id' => 1882,
                'industry_broad_id' => 20,
                'code' => 'A',
                'name' => '農業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            382 =>
            array (
                'id' => 1883,
                'industry_broad_id' => 20,
                'code' => 'A',
                'name' => '林業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            383 =>
            array (
                'id' => 1884,
                'industry_broad_id' => 20,
                'code' => 'B',
                'name' => '漁業（水産養殖業を除く）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            384 =>
            array (
                'id' => 1885,
                'industry_broad_id' => 20,
                'code' => 'B',
                'name' => '水産養殖業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            385 =>
            array (
                'id' => 1886,
                'industry_broad_id' => 20,
                'code' => 'C',
                'name' => '鉱業，採石業，砂利採取業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            386 =>
            array (
                'id' => 1887,
                'industry_broad_id' => 20,
                'code' => 'D',
                'name' => '総合工事業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            387 =>
            array (
                'id' => 1888,
                'industry_broad_id' => 20,
                'code' => 'D',
            'name' => '職別工事業(設備工事業を除く)',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            388 =>
            array (
                'id' => 1889,
                'industry_broad_id' => 20,
                'code' => 'D',
                'name' => '設備工事業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            389 =>
            array (
                'id' => 1890,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '食料品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            390 =>
            array (
                'id' => 1891,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '飲料・たばこ・飼料製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            391 =>
            array (
                'id' => 1892,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '繊維工業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            392 =>
            array (
                'id' => 1893,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '木材・木製品製造業（家具を除く）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            393 =>
            array (
                'id' => 1894,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '家具・装備品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            394 =>
            array (
                'id' => 1895,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => 'パルプ・紙・紙加工品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            395 =>
            array (
                'id' => 1896,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '印刷・同関連業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            396 =>
            array (
                'id' => 1897,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '化学工業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            397 =>
            array (
                'id' => 1898,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '石油製品・石炭製品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            398 =>
            array (
                'id' => 1899,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => 'プラスチック製品製造業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            399 =>
            array (
                'id' => 1900,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => 'ゴム製品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            400 =>
            array (
                'id' => 1901,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => 'なめし革・同製品・毛皮製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            401 =>
            array (
                'id' => 1902,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '窯業・土石製品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            402 =>
            array (
                'id' => 1903,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '鉄鋼業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            403 =>
            array (
                'id' => 1904,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '非鉄金属製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            404 =>
            array (
                'id' => 1905,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '金属製品製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            405 =>
            array (
                'id' => 1906,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => 'はん用機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            406 =>
            array (
                'id' => 1907,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '生産用機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            407 =>
            array (
                'id' => 1908,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '業務用機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            408 =>
            array (
                'id' => 1909,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '電子部品・デバイス・電子回路製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            409 =>
            array (
                'id' => 1910,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '電気機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            410 =>
            array (
                'id' => 1911,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '情報通信機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            411 =>
            array (
                'id' => 1912,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => '輸送用機械器具製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            412 =>
            array (
                'id' => 1913,
                'industry_broad_id' => 20,
                'code' => 'E',
                'name' => 'その他の製造業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            413 =>
            array (
                'id' => 1914,
                'industry_broad_id' => 20,
                'code' => 'F',
                'name' => '電気業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            414 =>
            array (
                'id' => 1915,
                'industry_broad_id' => 20,
                'code' => 'F',
                'name' => 'ガス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            415 =>
            array (
                'id' => 1916,
                'industry_broad_id' => 20,
                'code' => 'F',
                'name' => '熱供給業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            416 =>
            array (
                'id' => 1917,
                'industry_broad_id' => 20,
                'code' => 'F',
                'name' => '水道業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            417 =>
            array (
                'id' => 1918,
                'industry_broad_id' => 20,
                'code' => 'G',
                'name' => '通信業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            418 =>
            array (
                'id' => 1919,
                'industry_broad_id' => 20,
                'code' => 'G',
                'name' => '放送業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            419 =>
            array (
                'id' => 1920,
                'industry_broad_id' => 20,
                'code' => 'G',
                'name' => '情報サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            420 =>
            array (
                'id' => 1921,
                'industry_broad_id' => 20,
                'code' => 'G',
                'name' => 'インターネット附随サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            421 =>
            array (
                'id' => 1922,
                'industry_broad_id' => 20,
                'code' => 'G',
                'name' => '映像・音声・文字情報制作業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            422 =>
            array (
                'id' => 1923,
                'industry_broad_id' => 20,
                'code' => 'H',
                'name' => '鉄道業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            423 =>
            array (
                'id' => 1924,
                'industry_broad_id' => 20,
                'code' => 'H',
                'name' => '道路旅客運送業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            424 =>
            array (
                'id' => 1925,
                'industry_broad_id' => 20,
                'code' => 'H',
                'name' => '道路貨物運送業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            425 =>
            array (
                'id' => 1926,
                'industry_broad_id' => 20,
                'code' => 'H',
                'name' => '水運業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            426 =>
            array (
                'id' => 1927,
                'industry_broad_id' => 20,
                'code' => 'H',
                'name' => '航空運輸業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            427 =>
            array (
                'id' => 1928,
                'industry_broad_id' => 20,
                'code' => 'H',
                'name' => '倉庫業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            428 =>
            array (
                'id' => 1929,
                'industry_broad_id' => 20,
                'code' => 'H',
                'name' => '運輸に附帯するサービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            429 =>
            array (
                'id' => 1930,
                'industry_broad_id' => 20,
                'code' => 'H',
                'name' => '郵便業（信書便事業を含む）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            430 =>
            array (
                'id' => 1931,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '各種商品卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            431 =>
            array (
                'id' => 1932,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '繊維・衣服等卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            432 =>
            array (
                'id' => 1933,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '飲食料品卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            433 =>
            array (
                'id' => 1934,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '建築材料，鉱物・金属材料等卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            434 =>
            array (
                'id' => 1935,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '機械器具卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            435 =>
            array (
                'id' => 1936,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => 'その他の卸売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            436 =>
            array (
                'id' => 1937,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '各種商品小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            437 =>
            array (
                'id' => 1938,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '織物・衣服・身の回り品小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            438 =>
            array (
                'id' => 1939,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '飲食料品小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            439 =>
            array (
                'id' => 1940,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '機械器具小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            440 =>
            array (
                'id' => 1941,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => 'その他の小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            441 =>
            array (
                'id' => 1942,
                'industry_broad_id' => 20,
                'code' => 'I',
                'name' => '無店舗小売業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            442 =>
            array (
                'id' => 1943,
                'industry_broad_id' => 20,
                'code' => 'J',
                'name' => '銀行業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            443 =>
            array (
                'id' => 1944,
                'industry_broad_id' => 20,
                'code' => 'J',
                'name' => '協同組織金融業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            444 =>
            array (
                'id' => 1945,
                'industry_broad_id' => 20,
                'code' => 'J',
                'name' => '貸金業，クレジットカード業等非預金信用機関',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            445 =>
            array (
                'id' => 1946,
                'industry_broad_id' => 20,
                'code' => 'J',
                'name' => '金融商品取引業，商品先物取引業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            446 =>
            array (
                'id' => 1947,
                'industry_broad_id' => 20,
                'code' => 'J',
                'name' => '補助的金融業等',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            447 =>
            array (
                'id' => 1948,
                'industry_broad_id' => 20,
                'code' => 'J',
                'name' => '保険業（保険媒介代理業，保険サービス業を含む）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            448 =>
            array (
                'id' => 1949,
                'industry_broad_id' => 20,
                'code' => 'K',
                'name' => '不動産取引業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            449 =>
            array (
                'id' => 1950,
                'industry_broad_id' => 20,
                'code' => 'K',
                'name' => '不動産賃貸業・管理業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            450 =>
            array (
                'id' => 1951,
                'industry_broad_id' => 20,
                'code' => 'K',
                'name' => '物品賃貸業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            451 =>
            array (
                'id' => 1952,
                'industry_broad_id' => 20,
                'code' => 'L',
                'name' => '学術・開発研究機関',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            452 =>
            array (
                'id' => 1953,
                'industry_broad_id' => 20,
                'code' => 'L',
                'name' => '専門サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            453 =>
            array (
                'id' => 1954,
                'industry_broad_id' => 20,
                'code' => 'L',
                'name' => '広告業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            454 =>
            array (
                'id' => 1955,
                'industry_broad_id' => 20,
                'code' => 'L',
                'name' => '技術サービス業（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            455 =>
            array (
                'id' => 1956,
                'industry_broad_id' => 20,
                'code' => 'M',
                'name' => '宿泊業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            456 =>
            array (
                'id' => 1957,
                'industry_broad_id' => 20,
                'code' => 'M',
                'name' => '飲食店',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            457 =>
            array (
                'id' => 1958,
                'industry_broad_id' => 20,
                'code' => 'M',
                'name' => '持ち帰り・配達飲食サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            458 =>
            array (
                'id' => 1959,
                'industry_broad_id' => 20,
                'code' => 'N',
                'name' => '洗濯・理容・美容・浴場業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            459 =>
            array (
                'id' => 1960,
                'industry_broad_id' => 20,
                'code' => 'N',
                'name' => 'その他の生活関連サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            460 =>
            array (
                'id' => 1961,
                'industry_broad_id' => 20,
                'code' => 'N',
                'name' => '娯楽業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            461 =>
            array (
                'id' => 1962,
                'industry_broad_id' => 20,
                'code' => 'O',
                'name' => '学校教育',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            462 =>
            array (
                'id' => 1963,
                'industry_broad_id' => 20,
                'code' => 'O',
                'name' => 'その他の教育，学習支援業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            463 =>
            array (
                'id' => 1964,
                'industry_broad_id' => 20,
                'code' => 'P',
                'name' => '医療業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            464 =>
            array (
                'id' => 1965,
                'industry_broad_id' => 20,
                'code' => 'P',
                'name' => '保健衛生',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            465 =>
            array (
                'id' => 1966,
                'industry_broad_id' => 20,
                'code' => 'P',
                'name' => '社会保険・社会福祉・介護事業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            466 =>
            array (
                'id' => 1967,
                'industry_broad_id' => 20,
                'code' => 'Q',
                'name' => '郵便局',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            467 =>
            array (
                'id' => 1968,
                'industry_broad_id' => 20,
                'code' => 'Q',
                'name' => '協同組合（他に分類されないもの）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            468 =>
            array (
                'id' => 1969,
                'industry_broad_id' => 20,
                'code' => 'R',
                'name' => '廃棄物処理業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            469 =>
            array (
                'id' => 1970,
                'industry_broad_id' => 20,
                'code' => 'R',
                'name' => '自動車整備業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            470 =>
            array (
                'id' => 1971,
                'industry_broad_id' => 20,
                'code' => 'R',
                'name' => '機械等修理業（別掲を除く）',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            471 =>
            array (
                'id' => 1972,
                'industry_broad_id' => 20,
                'code' => 'R',
                'name' => '職業紹介・労働者派遣業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            472 =>
            array (
                'id' => 1973,
                'industry_broad_id' => 20,
                'code' => 'R',
                'name' => 'その他の事業サービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            473 =>
            array (
                'id' => 1974,
                'industry_broad_id' => 20,
                'code' => 'R',
                'name' => '政治・経済・文化団体',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            474 =>
            array (
                'id' => 1975,
                'industry_broad_id' => 20,
                'code' => 'R',
                'name' => '宗教',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            475 =>
            array (
                'id' => 1976,
                'industry_broad_id' => 20,
                'code' => 'R',
                'name' => 'その他のサービス業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            476 =>
            array (
                'id' => 1977,
                'industry_broad_id' => 20,
                'code' => 'R',
                'name' => '外国公務',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            477 =>
            array (
                'id' => 1978,
                'industry_broad_id' => 20,
                'code' => 'S',
                'name' => '国家公務',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            478 =>
            array (
                'id' => 1979,
                'industry_broad_id' => 20,
                'code' => 'S',
                'name' => '地方公務',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
            479 =>
            array (
                'id' => 1980,
                'industry_broad_id' => 20,
                'code' => 'T',
                'name' => '分類不能の産業',
                'created_at' => '2022-09-27 16:33:25',
                'updated_at' => '2022-09-27 16:33:25',
                'deleted_at' => NULL,
            ),
        ));


    }
}
