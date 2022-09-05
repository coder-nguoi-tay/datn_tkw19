<?php

namespace App\Repositories\name;

interface nameInterface
{
    public function get($request);

    public function getById($id);

    public function store($request);

    public function update($request, $id);

    public function destroy($id);
}
