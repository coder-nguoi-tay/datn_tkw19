<?php

namespace App\Repositories\User;

use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Repositories\User\UserInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserRepository extends BaseController implements UserInterface
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
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

    public function checkPhone($request)
    {
        return ! $this->user->where(function ($query) use ($request) {
            if (isset($request['id'])) {
                $query->where('id', '!=', $request['id']);
            }
            $query->where('phone_number', $request['phone_number']);
        })->exists();
    }
}
