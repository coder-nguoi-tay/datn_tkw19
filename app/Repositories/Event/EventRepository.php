<?php

namespace App\Repositories\Event;

use App\Models\Event;
use App\Http\Controllers\BaseController;
use App\Repositories\Event\EventInterface;
use Illuminate\Support\Facades\Auth;

class EventRepository extends BaseController implements EventInterface
{
    private Event $event;
    public function __construct(Event $event)
    {
        $this->event = $event;
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
