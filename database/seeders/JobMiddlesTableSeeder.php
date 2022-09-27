<?php

namespace Database\Seeders;

use App\Models\JobMiddle;
use Illuminate\Database\Seeder;

class JobMiddlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        JobMiddle::query()->truncate();

        \DB::table('job_middles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'job_broad_id' => 1,
                'code' => '01',
                'name' => '管理的公務員',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'job_broad_id' => 1,
                'code' => '02',
                'name' => '法人・団体役員',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'job_broad_id' => 1,
                'code' => '03',
                'name' => '法人・団体管理職員',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'job_broad_id' => 1,
                'code' => '04',
                'name' => 'その他の管理的職業従事者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'job_broad_id' => 2,
                'code' => '05',
                'name' => '研究者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'job_broad_id' => 2,
                'code' => '06',
                'name' => '農林水産技術者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'job_broad_id' => 2,
                'code' => '07',
                'name' => '製造技術者（開発）',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'job_broad_id' => 2,
                'code' => '08',
                'name' => '製造技術者（開発を除く）',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'job_broad_id' => 2,
                'code' => '09',
                'name' => '建築・土木・測量技術者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'job_broad_id' => 2,
                'code' => '10',
                'name' => '情報処理・通信技術者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'job_broad_id' => 2,
                'code' => '11',
                'name' => 'その他の技術者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'job_broad_id' => 2,
                'code' => '12',
                'name' => '医師，歯科医師，獣医師，薬剤師',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'job_broad_id' => 2,
                'code' => '13',
                'name' => '保健師，助産師，看護師',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'job_broad_id' => 2,
                'code' => '14',
                'name' => '医療技術者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'job_broad_id' => 2,
                'code' => '15',
                'name' => 'その他の保健医療従事者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'job_broad_id' => 2,
                'code' => '16',
                'name' => '社会福祉専門職業従事者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'job_broad_id' => 2,
                'code' => '17',
                'name' => '法務従事者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'job_broad_id' => 2,
                'code' => '18',
                'name' => '経営・金融・保険専門職業従事者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'job_broad_id' => 2,
                'code' => '19',
                'name' => '教員',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'job_broad_id' => 2,
                'code' => '20',
                'name' => '宗教家',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'job_broad_id' => 2,
                'code' => '21',
                'name' => '著述家，記者，編集者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'job_broad_id' => 2,
                'code' => '22',
                'name' => '美術家，デザイナー，写真家，映像撮影者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'job_broad_id' => 2,
                'code' => '23',
                'name' => '音楽家，舞台芸術家',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'job_broad_id' => 2,
                'code' => '24',
                'name' => 'その他の専門的職業従事者',
                'created_at' => '2022-09-27 16:23:02',
                'updated_at' => '2022-09-27 16:23:02',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'job_broad_id' => 3,
                'code' => '25',
                'name' => '一般事務従事者',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'job_broad_id' => 3,
                'code' => '26',
                'name' => '会計事務従事者',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'job_broad_id' => 3,
                'code' => '27',
                'name' => '生産関連事務従事者',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'job_broad_id' => 3,
                'code' => '28',
                'name' => '営業・販売事務従事者',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'job_broad_id' => 3,
                'code' => '29',
                'name' => '外勤事務従事者',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'job_broad_id' => 3,
                'code' => '30',
                'name' => '運輸・郵便事務従事者',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'job_broad_id' => 3,
                'code' => '31',
                'name' => '事務用機器操作員',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'job_broad_id' => 4,
                'code' => '32',
                'name' => '商品販売従事者',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'job_broad_id' => 4,
                'code' => '33',
                'name' => '販売類似職業従事者',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'job_broad_id' => 4,
                'code' => '34',
                'name' => '営業職業従事者',
                'created_at' => '2022-09-27 16:23:03',
                'updated_at' => '2022-09-27 16:23:03',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'job_broad_id' => 5,
                'code' => '35',
                'name' => '家庭生活支援サービス職業従事者',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'job_broad_id' => 5,
                'code' => '36',
                'name' => '介護サービス職業従事者',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'job_broad_id' => 5,
                'code' => '37',
                'name' => '保健医療サービス職業従事者',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'job_broad_id' => 5,
                'code' => '38',
                'name' => '生活衛生サービス職業従事者',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'job_broad_id' => 5,
                'code' => '39',
                'name' => '飲食物調理従事者',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'job_broad_id' => 5,
                'code' => '40',
                'name' => '接客・給仕職業従事者',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'job_broad_id' => 5,
                'code' => '41',
                'name' => '居住施設・ビル等管理人',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'job_broad_id' => 5,
                'code' => '42',
                'name' => 'その他のサービス職業従事者',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'job_broad_id' => 6,
                'code' => '43',
                'name' => '自衛官',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'job_broad_id' => 6,
                'code' => '44',
                'name' => '司法警察職員',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'job_broad_id' => 6,
                'code' => '45',
                'name' => 'その他の保安職業従事者',
                'created_at' => '2022-09-27 16:23:04',
                'updated_at' => '2022-09-27 16:23:04',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'job_broad_id' => 7,
                'code' => '46',
                'name' => '農業従事者',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'job_broad_id' => 7,
                'code' => '47',
                'name' => '林業従事者',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'job_broad_id' => 7,
                'code' => '48',
                'name' => '漁業従事者',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'job_broad_id' => 8,
                'code' => '49',
                'name' => '生産設備制御・監視従事者（金属製品）',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'job_broad_id' => 8,
                'code' => '50',
                'name' => '生産設備制御・監視従事者（金属製品を除く）',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            50 =>
            array (
                'id' => 51,
                'job_broad_id' => 8,
                'code' => '51',
                'name' => '機械組立設備制御・監視従事者',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            51 =>
            array (
                'id' => 52,
                'job_broad_id' => 8,
                'code' => '52',
                'name' => '製品製造・加工処理従事者（金属製品）',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            52 =>
            array (
                'id' => 53,
                'job_broad_id' => 8,
                'code' => '53',
                'name' => '製品製造・加工処理従事者（金属製品を除く）',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'job_broad_id' => 8,
                'code' => '54',
                'name' => '機械組立従事者',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'job_broad_id' => 8,
                'code' => '55',
                'name' => '機械整備・修理従事者',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'job_broad_id' => 8,
                'code' => '56',
                'name' => '製品検査従事者（金属製品）',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            56 =>
            array (
                'id' => 57,
                'job_broad_id' => 8,
                'code' => '57',
                'name' => '製品検査従事者（金属製品を除く）',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            57 =>
            array (
                'id' => 58,
                'job_broad_id' => 8,
                'code' => '58',
                'name' => '機械検査従事者',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            58 =>
            array (
                'id' => 59,
                'job_broad_id' => 8,
                'code' => '59',
                'name' => '生産関連・生産類似作業従事者',
                'created_at' => '2022-09-27 16:23:05',
                'updated_at' => '2022-09-27 16:23:05',
                'deleted_at' => NULL,
            ),
            59 =>
            array (
                'id' => 60,
                'job_broad_id' => 9,
                'code' => '60',
                'name' => '鉄道運転従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            60 =>
            array (
                'id' => 61,
                'job_broad_id' => 9,
                'code' => '61',
                'name' => '自動車運転従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            61 =>
            array (
                'id' => 62,
                'job_broad_id' => 9,
                'code' => '62',
                'name' => '船舶・航空機運転従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            62 =>
            array (
                'id' => 63,
                'job_broad_id' => 9,
                'code' => '63',
                'name' => 'その他の輸送従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            63 =>
            array (
                'id' => 64,
                'job_broad_id' => 9,
                'code' => '64',
                'name' => '定置・建設機械運転従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            64 =>
            array (
                'id' => 65,
                'job_broad_id' => 10,
                'code' => '65',
                'name' => '建設躯体工事従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            65 =>
            array (
                'id' => 66,
                'job_broad_id' => 10,
                'code' => '66',
                'name' => '建設従事者（建設躯体工事従事者を除く）',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            66 =>
            array (
                'id' => 67,
                'job_broad_id' => 10,
                'code' => '67',
                'name' => '電気工事従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            67 =>
            array (
                'id' => 68,
                'job_broad_id' => 10,
                'code' => '68',
                'name' => '土木作業従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            68 =>
            array (
                'id' => 69,
                'job_broad_id' => 10,
                'code' => '69',
                'name' => '採掘従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            69 =>
            array (
                'id' => 70,
                'job_broad_id' => 11,
                'code' => '70',
                'name' => '運搬従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            70 =>
            array (
                'id' => 71,
                'job_broad_id' => 11,
                'code' => '71',
                'name' => '清掃従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            71 =>
            array (
                'id' => 72,
                'job_broad_id' => 11,
                'code' => '72',
                'name' => '包装従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            72 =>
            array (
                'id' => 73,
                'job_broad_id' => 11,
                'code' => '73',
                'name' => 'その他の運搬・清掃・包装等従事者',
                'created_at' => '2022-09-27 16:23:06',
                'updated_at' => '2022-09-27 16:23:06',
                'deleted_at' => NULL,
            ),
            73 =>
            array (
                'id' => 74,
                'job_broad_id' => 12,
                'code' => '99',
                'name' => '分類不能の職業',
                'created_at' => '2022-09-27 16:23:07',
                'updated_at' => '2022-09-27 16:23:07',
                'deleted_at' => NULL,
            ),
        ));


    }
}
