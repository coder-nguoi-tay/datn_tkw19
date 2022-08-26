<?php

namespace App\Repositories\New;

use App\Models\New;
use App\Http\Controllers\BaseController;
use App\Repositories\New\NewInterface;
use Illuminate\Support\Facades\Auth;

class NewRepository extends BaseController implements NewInterface
{
    private New $new;
    public function __construct(New $new)
    {
        $this->new = $new;
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
