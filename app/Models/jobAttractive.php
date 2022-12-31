<?php

namespace App\Models;

use App\Enums\LeverPackageCompany;
use App\Models\LeverPackage;
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
        return $this->hasOne(LeverPackage::class, 'id', 'lever_package');
    }
    public function getPackageAttribute()
    {
        return LeverPackageCompany::getDescription($this->lever_package);
    }
}