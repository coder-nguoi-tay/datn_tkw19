<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingForm extends Model
{
    use HasFactory;
    protected $table = 'working_form';
    protected $fillable = [
        'id',
        'name'
    ];
    public function getjob(){
        return $this->belongsTo(Job::class, 'wk_form_id', 'id');
    }
}
