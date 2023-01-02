<?php

namespace App\Models;

use App\Enums\LeverPackage;
use App\Enums\LeverPackageCompany;
use App\Enums\StatusPackage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class packageofferbought extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'package_offer_bought';
    protected $fillable = [
        'id',
        'company_id',
        'package_offer_id',
        'status',
        'start_time',
        'end_time',
        'lever',
    ];
    protected $appends = [
        'lever_package', 'status_package',
    ];
    public function getLeverPackageAttribute()
    {
        return LeverPackageCompany::getDescription($this->lever);
    }
    public function getStatusPackageAttribute()
    {
        return StatusPackage::getDescription($this->status);
    }
}