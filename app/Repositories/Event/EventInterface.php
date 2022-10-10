<?php

namespace App\Repositories\Event;

interface EventInterface
{
    public function get();

    public function getById($id);

    public function tmp($id);

    public function store($request, $userCardId);

    public function update($request, $id);

    public function destroy($id);
}
