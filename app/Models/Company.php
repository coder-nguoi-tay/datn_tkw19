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
        'Introduce',
        'Desceibe',
        'number_member',
        'email',
        'logo',
    ];
}