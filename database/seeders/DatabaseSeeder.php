<?php

namespace Database\Seeders;

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
        $this->call(AdminSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(PrefecturesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(JobBroadsTableSeeder::class);
        $this->call(JobMiddlesTableSeeder::class);
        $this->call(IndustryBroadsTableSeeder::class);
        $this->call(IndustryMiddlesTableSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
