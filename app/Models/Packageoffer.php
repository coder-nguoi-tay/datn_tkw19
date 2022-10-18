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
    public function timeofer(){
        return $this->belongsTo(Timeoffer::class, 'time_offer_id', 'id');
    }
}
