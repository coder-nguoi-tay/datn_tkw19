<?php

namespace App\Repositories\Event;

interface EventInterface
{
    public function get();

    public function close();

    public function getById($id);

    public function eventOfUser($id);

    public function tmp($id);

    public function store($request, $userCardId);

    public function update($request, $id, $userCardId);

    public function destroy($id);
}
