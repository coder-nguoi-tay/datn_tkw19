<?php

namespace Database\Factories;

use App\Models\FeedbackCv;
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
    protected $model = FeedbackCv::class;
    public function definition()
    {
        return [
            'employer_id' => rand(1, 24),
            'profile_cv_id' => rand(1, 11),
            'comment' => rand('Cách thiết kế hồ sơ rất đẹp, và kỹ năng đã kiểm trứng', 'kỹ năng trong hồ sơ không đúng với thực tại'),
            'feedback_id' => rand(1, 3),
        ];
    }
}
