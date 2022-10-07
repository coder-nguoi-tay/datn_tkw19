<?php

namespace App\Repositories\UserCredit;

use App\Http\Controllers\BaseController;
use App\Models\UserCredit;
use App\Repositories\UserCredit\UserCreditInterface;
use Illuminate\Support\Facades\Auth;

class UserCreditRepository extends BaseController implements UserCreditInterface
{
    private UserCredit $userCredit;

    public function __construct(UserCredit $userCredit)
    {
        $this->userCredit = $userCredit;
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

    public function getLastUsing()
    {
        return $this->userCredit->where([
            ['user_id', Auth::guard('user')->user()->id],
            ['using_flag', 1],
        ])
            ->select(['id', 'branch', 'last4', 'exp_month', 'exp_year'])
            ->first();
    }
}
