<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wage extends Model
{
    use HasFactory;
    protected $table = 'wage';
    protected $fillable = [
        'id',
        'name'
    ];
    public function getjob(){
        return $this->belongsTo(Job::class, 'Wage_id', 'id');
    }
}
