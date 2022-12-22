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
        'user_id'
    ];
    public function getCompany()
    {
        return $this->hasOne(Company::class, 'id', 'id_company');
    }
}