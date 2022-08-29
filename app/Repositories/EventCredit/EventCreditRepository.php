<?php

namespace App\Repositories\EventCredit;

use App\Models\EventCredit;
use App\Http\Controllers\BaseController;
use App\Repositories\EventCredit\EventCreditInterface;
use Illuminate\Support\Facades\Auth;

class EventCreditRepository extends BaseController implements EventCreditInterface
{
    private EventCredit $eventCredit;
    public function __construct(EventCredit $eventCredit)
    {
        $this->eventCredit = $eventCredit;
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
