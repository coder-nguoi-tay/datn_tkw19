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
        return $this->hasOne(Employer::class, 'role_id', 'id');
    }
}
