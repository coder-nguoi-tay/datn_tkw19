<?php

namespace App\Repositories\Prefecture;

use App\Models\Prefecture;
use App\Http\Controllers\BaseController;
use App\Repositories\Prefecture\PrefectureInterface;
use Illuminate\Support\Facades\Auth;

class PrefectureRepository extends BaseController implements PrefectureInterface
{
    private Prefecture $prefecture;
    public function __construct(Prefecture $prefecture)
    {
        $this->prefecture = $prefecture;
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
