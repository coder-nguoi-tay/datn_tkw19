<?php

namespace App\Console\Commands;

use App\Models\Job;
use App\Models\packageofferbought;
use App\Notifications\NotifyTimePackage;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ChangePackage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
        $inactive_user = packageofferbought::where('end_time', '<', Carbon::parse(Carbon::now()))->get();
        $job = Job::where('end_job_time', '<', Carbon::now())->get();
        foreach ($inactive_user as $user) {
            $user->status = 2;
            $user->save();
            $user->notify(new NotifyTimePackage());
        }
        foreach ($job as $item) {
            $item->expired = 1;
            $item->save();
        }
    }
}