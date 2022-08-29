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

    public function get($request)
    {
        // TODO: Implement get() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
