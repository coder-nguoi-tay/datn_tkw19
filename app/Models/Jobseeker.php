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
        return $this->hasOne(User::class, 'user_role', 'id');
    }
    public function getskill()
    {
        return $this->belongsToMany(Skill::class, SeekerSkill::class,  'job-seeker_id', 'skill_id', 'id');
    }
}