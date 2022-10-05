<?php

namespace App\Repositories\Area;

use App\Http\Controllers\BaseController;
use App\Models\Area;
use App\Repositories\Area\AreaInterface;
use Illuminate\Support\Facades\Auth;

class AreaRepository extends BaseController implements AreaInterface
{
    private Area $area;

    public function __construct(Area $area)
    {
        $this->area = $area;
    }

    public function get()
    {
        return $this->area->latest()->select('id', 'name as label')
            ->orderBy('order_num')
            ->get();
    }
}
