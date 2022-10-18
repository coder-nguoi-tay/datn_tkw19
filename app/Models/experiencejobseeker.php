<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experiencejobseeker extends Model
{
    use HasFactory;
    protected $table = 'experience_job-seeker';
    protected $fillable = [
        'id',
        'job_seeker_id',
        'experience_id',
        'profession_id'
    ];
}
