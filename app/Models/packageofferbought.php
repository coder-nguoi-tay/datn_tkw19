<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packageofferbought extends Model
{
    use HasFactory;
    protected $table = 'package_offer_bought';
    protected $fillable = [
        'id',
        'company_id',
        'package_offer_id',
        'status'
    ];
}