<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeoffer extends Model
{
    use HasFactory;
    protected  $table = 'time_offer';
    protected $fillable = [
        'id',
        'name',
    ];
}