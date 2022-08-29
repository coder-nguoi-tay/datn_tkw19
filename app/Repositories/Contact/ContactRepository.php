<?php

namespace App\Repositories\Contact;

use App\Http\Controllers\BaseController;
use App\Models\Contact;
use App\Repositories\Contact\ContactInterface;
use Illuminate\Support\Facades\Auth;

class ContactRepository extends BaseController implements ContactInterface
{
    private Contact $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
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
