<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadCv extends Model
{
    use HasFactory;
    protected $table = 'upload_cv';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'user_id', 'file_cv', 'created_at', 'updated_at'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function proFileUser()
    {
        return $this->hasManyThrough(User::class, Jobseeker::class,  'user_role', 'role_id', 'id', 'id');
    }
    public function getskill()
    {
        return $this->belongsToMany(Skill::class, SeekerSkill::class,  'job-seeker_id', 'skill_id', 'id');
    }
}