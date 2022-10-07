<?php

namespace App\Repositories\UserCredit;

interface UserCreditInterface
{
    public function get($request);

    public function getById($id);

    public function store($data);

    public function update($request, $id);

    public function destroy($id);

    public function getLastUsing();
}
