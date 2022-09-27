<?php

namespace Database\Seeders;

use App\Models\Prefecture;
use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Prefecture::query()->truncate();
        \DB::table('Prefectures')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => '北海道',
                'order_num' => 1,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => '青森県',
                'order_num' => 2,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => '岩手県',
                'order_num' => 3,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => '宮城県',
                'order_num' => 4,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => '秋田県',
                'order_num' => 5,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => '山形県',
                'order_num' => 6,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => '福島県',
                'order_num' => 7,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => '茨城県',
                'order_num' => 8,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => '栃木県',
                'order_num' => 9,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'name' => '群馬県',
                'order_num' => 10,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'name' => '埼玉県',
                'order_num' => 11,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'name' => '千葉県',
                'order_num' => 12,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'name' => '東京都',
                'order_num' => 13,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'name' => '神奈川県',
                'order_num' => 14,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'name' => '新潟県',
                'order_num' => 15,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'name' => '富山県',
                'order_num' => 16,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'name' => '石川県',
                'order_num' => 17,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'name' => '福井県',
                'order_num' => 18,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'name' => '山梨県',
                'order_num' => 19,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'name' => '長野県',
                'order_num' => 20,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'name' => '岐阜県',
                'order_num' => 21,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'name' => '静岡県',
                'order_num' => 22,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'name' => '愛知県',
                'order_num' => 23,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'name' => '三重県',
                'order_num' => 24,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'name' => '滋賀県',
                'order_num' => 25,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'name' => '京都府',
                'order_num' => 26,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'name' => '大阪府',
                'order_num' => 27,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'name' => '兵庫県',
                'order_num' => 28,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'name' => '奈良県',
                'order_num' => 29,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'name' => '和歌山県',
                'order_num' => 30,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'name' => '鳥取県',
                'order_num' => 31,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'name' => '島根県',
                'order_num' => 32,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'name' => '岡山県',
                'order_num' => 33,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'name' => '広島県',
                'order_num' => 34,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'name' => '山口県',
                'order_num' => 35,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'name' => '徳島県',
                'order_num' => 36,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'name' => '香川県',
                'order_num' => 37,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'name' => '愛媛県',
                'order_num' => 38,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'name' => '高知県',
                'order_num' => 39,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'name' => '福岡県',
                'order_num' => 40,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'name' => '佐賀県',
                'order_num' => 41,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'name' => '長崎県',
                'order_num' => 42,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'name' => '熊本県',
                'order_num' => 43,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'name' => '大分県',
                'order_num' => 44,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'name' => '宮崎県',
                'order_num' => 45,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'name' => '鹿児島県',
                'order_num' => 46,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'name' => '沖縄県',
                'order_num' => 47,
                'created_at' => '2022-09-27 15:51:03',
                'updated_at' => '2022-09-27 15:51:03',
                'deleted_at' => NULL,
            ),
        ));


    }
}
