<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User  extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected  $table = 'users';
    protected $fillable = [
        'email',
        'password',
        'name',
        'role_id',
        'status'
    ];
    protected $hidden = [
        'password',
        'token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    public function getProfile()
    {
        return $this->hasOne(Employer::class, 'user_id', 'id');
    }
    public function getProfileUse()
    {
        return $this->hasOne(Jobseeker::class, 'user_role', 'id');
    }
    public function getskill()
    {
        return $this->belongsToMany(Skill::class, SeekerSkill::class,  'job-seeker_id', 'skill_id', 'id');
    }
    public function getploadCv()
    {
        return $this->hasMany(UploadCv::class, 'user_id', 'id');
    }
    public function getCheckUser()
    {
        return $this->hasOne(ProfileUserCv::class, 'user_id', 'id');
    }
}