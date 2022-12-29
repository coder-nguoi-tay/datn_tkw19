<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packageoffer extends Model
{
    use HasFactory;
    protected  $table = 'admin_package_offer';
    protected $fillable = [
        'id',
        'name',
        'describe',
        'price',
        'time_offer_id',
    ];
    public function timeofer()
    {
        return $this->hasOne(Timeoffer::class, 'id', 'time_offer_id');
    }
    public function leverPackage()
    {
        return $this->hasOne(leverPackage::class, 'id', 'time_offer_id');
    }
}