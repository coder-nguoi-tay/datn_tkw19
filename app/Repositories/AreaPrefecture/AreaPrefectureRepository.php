<?php

namespace App\Repositories\AreaPrefecture;

use App\Models\AreaPrefecture;
use App\Http\Controllers\BaseController;
use App\Repositories\AreaPrefecture\AreaPrefectureInterface;
use Illuminate\Support\Facades\Auth;

class AreaPrefectureRepository extends BaseController implements AreaPrefectureInterface
{
    private AreaPrefecture $areaPrefecture;
    public function __construct(AreaPrefecture $areaPrefecture)
    {
        $this->areaPrefecture = $areaPrefecture;
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
