<?php

namespace App\Repositories\name;

use App\Models\name;
use App\Http\Controllers\BaseController;
use App\Repositories\name\nameInterface;
use Illuminate\Support\Facades\Auth;

class nameRepository extends BaseController implements nameInterface
{
    private name $name;
    public function __construct(name $name)
    {
        $this->name = $name;
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
