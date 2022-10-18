<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timework extends Model
{
    use HasFactory;
    protected $table = 'time_work';
    protected $fillable = [
        'id',
        'name'
    ];
    public function getjob(){
        return $this->belongsTo(Job::class, 'time_work_id', 'id');
    }
}
