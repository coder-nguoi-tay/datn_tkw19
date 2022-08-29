<?php

namespace App\Repositories\UserTmp;

interface UserTmpInterface
{
    public function get($request);

    public function getById($id);

    public function store($request);

    public function update($request, $id);

    public function destroy($id);
}
