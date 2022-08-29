<?php

namespace App\Repositories\UserTmp;

use App\Http\Controllers\BaseController;
use App\Models\UserTmp;
use App\Repositories\UserTmp\UserTmpInterface;
use Illuminate\Support\Facades\Auth;

class UserTmpRepository extends BaseController implements UserTmpInterface
{
    private UserTmp $userTmp;

    public function __construct(UserTmp $userTmp)
    {
        $this->userTmp = $userTmp;
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
