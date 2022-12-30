<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobAttractive extends Model
{
    use HasFactory;
    protected  $table = 'job_attractive';
    protected $fillable = [
        'id',
        'name',
        'describe',
        'price',
        'lever_package',
        
    ];
    public function leverpackage()
    {
        return $this->hasOne(leverpackage::class, 'id', 'lever_package');
    }
}
