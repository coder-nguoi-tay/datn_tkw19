<?php

namespace App\Models;

use App\Enums\LeverPackage;
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
    protected $appends = [
        'package',
    ];
    public function leverpackage()
    {
        return $this->hasOne(leverpackage::class, 'id', 'lever_package');
    }
    public function getPackageAttribute()
    {
        return LeverPackage::getDescription($this->lever_package);
    }
}