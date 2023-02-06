<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Job::factory(200)->create();
        // $this->call(AdminSeeder::class);
        // $this->call(TimeofferSeeder::class);
        // $this->call(ExperienceSeeder::class);
        // $this->call(LeverSeeder::class);
        // $this->call(ProfessionSeeder::class);
        // $this->call(RoleSeeder::class);
        // $this->call(SkillSeeder::class);
        // $this->call(TimeWorkSeeder::class);
        // $this->call(WageSeeder::class);
        // $this->call(LocationSeeder::class);
        // $this->call(MajorsSeeder::class);
        // $this->call(WorkingFormSeeder::class);
        // $this->call(LeverPackageSeeder::class);
    }
}