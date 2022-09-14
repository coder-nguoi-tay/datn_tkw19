<?php

namespace App\Repositories\Admin;

interface AdminInterface
{
    public function getUsers($request);

    public function destroy($id);

    public function checkEmail($request);

    public function store($request);

    public function getById($id);

    public function update($request, $id);

    public function updateLastLogin($id);

    public function getByEmail($request);
}
