<?php

namespace App\Repositories\IndustryBroad;

use App\Http\Controllers\BaseController;
use App\Models\IndustryBroad;
use App\Repositories\IndustryBroad\IndustryBroadInterface;
use Illuminate\Support\Facades\Auth;

class IndustryBroadRepository extends BaseController implements IndustryBroadInterface
{
    private IndustryBroad $industryBroad;

    public function __construct(IndustryBroad $industryBroad)
    {
        $this->industryBroad = $industryBroad;
    }

    public function get()
    {
        return $this->industryBroad->latest()->select('id', 'name as label')
            ->orderBy('id')
            ->get();
    }
}
