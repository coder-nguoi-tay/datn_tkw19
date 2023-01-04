<?php

namespace App\Models;

use App\Enums\ImageMajors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
    use HasFactory;
    protected $table = 'majors';
    protected $fillable = [
        'id',
        'name'
    ];
    protected $appends = [
        'image_majors',
    ];
    public function getImageMajorsAttribute()
    {
        return ImageMajors::getDescription($this->id);
    }
}
