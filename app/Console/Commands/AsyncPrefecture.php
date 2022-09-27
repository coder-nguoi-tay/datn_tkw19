<?php

namespace App\Console\Commands;

use App\Models\Prefecture;
use Illuminate\Console\Command;

class AsyncPrefecture extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:AsyncPrefecture';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://opendata.resas-portal.go.jp/api/v1/prefectures',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'X-API-KEY: '.env('OPEN_DATA_API_KEY'),
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        $data = json_decode($response, true);
        foreach ($data['result'] as $key => $value) {
            $pref = new Prefecture();
            $pref->name = $value['prefName'];
            $pref->order_num = $value['prefCode'];
            $pref->save();
        }
    }
}
