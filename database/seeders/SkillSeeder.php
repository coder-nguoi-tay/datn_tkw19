<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::query()->truncate();
        $arr = [
            'PHP',
            'C/C++',
            'C#',
            'Python',
            'Java',
            'Html/Css/JavaScript',
            'Swift',
            'Ruby',
            'Pascal',
            'Objective-C',
            'SQL (Structured Query Language)',
            'Agile',
            'Android',
            'Angular',
            'AngularJS',
            'ASP.NET',
            'AWS',
            'Azure',
            'Blockchain',
            'Bridge Engineer',
            'Business Analyst',
            'C language',
            'Cloud',
            'Cocos',
            'Flutter',
            'Golang',
            'iOS',
            'J2EE',
            'JQuery',
            'Kotlin',
            'Laravel',
            'Magento',
            'Manager',
            'ReactJS',
            'React Native',
            'VueJS',
            'TypeScript',
        ];
        foreach ($arr as $value) {
            $system = new Skill();
            $system->name = $value;
            $system->save();
        }
    }
}