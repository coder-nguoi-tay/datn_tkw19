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
        'Address',
        'Phone',
        'Images',
        'user_role',
        'skill_id',
        'experience_id',
        'lever_id',
        'wage_id',
        'profession_id',
        'time_work_id'
    ];
}
