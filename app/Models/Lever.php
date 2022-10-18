<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lever extends Model
{
    use HasFactory;
    protected $table = 'lever';
    protected $fillable = [
        'id',
        'name'
    ];
   
}
