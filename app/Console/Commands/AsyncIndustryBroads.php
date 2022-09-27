<?php

namespace App\Console\Commands;

use App\Models\IndustryBroad;
use Illuminate\Console\Command;

class AsyncIndustryBroads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:AsyncIndustryBroads';

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
            CURLOPT_URL => 'https://opendata.resas-portal.go.jp/api/v1/industries/broad',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'X-API-KEY: fW7IWcEm51W6NPfqEEfSscgKHfWmyEJ1390ubUP6',
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        $data = json_decode($response, true);
        foreach ($data['result'] as $key => $value) {
            $industry = new IndustryBroad();
            $industry->code = $value['sicCode'];
            $industry->name = $value['sicName'];
            $industry->save();
        }
    }
}
