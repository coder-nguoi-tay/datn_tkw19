<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected  $table = 'company';
    protected $fillable = [
        'id',
        'name',
        'address',
        'desceibe',
        'number_member',
        'email',
        'logo',
        'number_tax',
    ];
    public function employer()
    {
        return $this->hasOne(Employer::class, 'id_company', 'id');
    }
    public function accuracy()
    {
        return $this->hasOne(Accuracy::class, 'user_id', 'id');
    }
}