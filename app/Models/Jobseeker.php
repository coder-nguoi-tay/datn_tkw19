<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    use HasFactory;
    protected $table = 'job-seeker';
    protected $fillable = [
        'id',
        'address',
        'phone',
        'images',
        'user_role',
        'skill_id',
        'experience_id',
        'lever_id',
        'wage_id',
        'profession_id',
        'time_work_id'
    ];
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_role');
    }
    public function getskill()
    {
        return $this->belongsToMany(Skill::class, SeekerSkill::class,  'job-seeker_id', 'skill_id', 'id');
    }
    public function getLevel()
    {
        return $this->hasOne(Lever::class, 'id', 'level_id');
    }
    public function getExperience()
    {
        return $this->hasOne(Experience::class, 'id', 'experience_id');
    }
    public function getWage()
    {
        return $this->hasOne(Wage::class, 'id', 'wage_id');
    }
    public function getprofession()
    {
        return $this->hasOne(Profession::class, 'id', 'profession_id');
    }
    public function getlocation()
    {
        return $this->hasOne(location::class, 'id', 'location_id');
    }
    public function getMajors()
    {
        return $this->hasOne(Majors::class, 'id', 'majors_id');
    }
    public function getwk_form()
    {
        return $this->hasOne(WorkingForm::class, 'id', 'wk_form_id');
    }
    public function getTime_work()
    {
        return $this->hasOne(Timework::class, 'id', 'time_work_id');
    }
    public function getEndTimeJob()
    {
        return $this->hasOne(Timework::class, 'id', 'time_work_id');
    }
}