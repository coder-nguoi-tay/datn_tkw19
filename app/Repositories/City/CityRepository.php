<?php

namespace App\Repositories\City;

use App\Http\Controllers\BaseController;
use App\Models\City;
use App\Repositories\City\CityInterface;
use Illuminate\Support\Facades\Auth;

class CityRepository extends BaseController implements CityInterface
{
    private City $city;

    public function __construct(City $city)
    {
        $this->city = $city;
    }

    public function get()
    {
        return $this->city->select('id', 'name as label', 'prefecture_id')
            ->orderBy('order_num')
            ->get();
    }
}
