<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Job extends Authenticatable
{
    use HasFactory;
    protected $table = 'job';
    protected $fillable = [
        'title',
        'quatity',
        'sex',
        'describe',
        'level_id',
        'experience_id',
        'wage_id',
        'skill_id',
        'benefit',
        'profession_id',
        'location_id',
        'address',
        'majors_id',
        'wk_form_id',
        'job_time',
        'end_job_time',
        'time_work_id',
        'candidate_requirements',
        'employer_id',
    ];
    public function getLevel()
    {
        return $this->belongsTo(Lever::class, 'level_id', 'id');
    }
    public function getExperience()
    {
        return $this->belongsTo(Experience::class, 'experience_id', 'id');
    }
    public function getWage()
    {
        return $this->belongsTo(Wage::class, 'wage_id', 'id');
    }
    public function getprofession()
    {
        return $this->belongsTo(Profession::class, 'profession_id', 'id');
    }
    public function getlocation()
    {
        return $this->belongsTo(location::class, 'location_id', 'id');
    }
    public function getMajors()
    {
        return $this->belongsTo(Majors::class, 'majors_id', 'id');
    }
    public function getwk_form()
    {
        return $this->belongsTo(WorkingForm::class, 'wk_form_id', 'id');
    }
    public function getTime_work()
    {
        return $this->belongsTo(Timework::class, 'time_work_id', 'id');
    }
    public function getEndTimeJob()
    {
        return $this->belongsTo(Timework::class, 'time_work_id', 'id');
    }
    public function getskill()
    {
        return $this->belongsToMany(Skill::class, Jobskill::class, 'job_id', 'skill_id', 'id');
    }
}