<?php

namespace App\Repositories\EventCondition;

use App\Models\EventCondition;
use App\Http\Controllers\BaseController;
use App\Repositories\EventCondition\EventConditionInterface;
use Illuminate\Support\Facades\Auth;

class EventConditionRepository extends BaseController implements EventConditionInterface
{
    private EventCondition $eventCondition;
    public function __construct(EventCondition $eventCondition)
    {
        $this->eventCondition = $eventCondition;
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
