<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected  $table = 'employer';
    protected $fillable = [
        'id',
        'name',
        'phone',
        'sex',
        'namecompany',
        'workplace',
        'address',
        'id_company',
        'user_id',
        'prioritize',
        'position',
        'amount_job'
    ];
    public function getCompany()
    {
        return $this->hasOne(Company::class, 'id', 'id_company');
    }
    public function getUser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function job()
    {
        return $this->hasMany(Job::class, 'employer_id', 'id');
    }
}