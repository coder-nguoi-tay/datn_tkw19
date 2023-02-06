<?php

namespace Database\Factories;

use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Job::class;
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'quatity' => 10,
            'sex' => 0,
            'describe' => $this->faker->text(),
            'level_id' => rand(1, 3),
            'experience_id' => rand(1, 3),
            'wage_id' => rand(1, 3),
            'benefit' => $this->faker->text(),
            'profession_id' => rand(1, 3),
            'location_id' => rand(1, 3),
            'address' => $this->faker->text(),
            'majors_id' => rand(1, 3),
            'wk_form_id' => rand(1, 3),
            'job_time' => Carbon::parse(Carbon::now())->format('Y-m-d'),
            'end_job_time' => Carbon::now()->addDay(20),
            'time_work_id' => rand(1, 3),
            'candidate_requirements' => $this->faker->text(),
            'employer_id' => rand(1, 23),
            'status' => 1,
        ];
    }
}