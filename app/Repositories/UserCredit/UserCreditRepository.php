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

    public function store($data)
    {
        $this->userCredit->where([
            ['user_id', Auth::guard('user')->user()->id],
            ['using_flag', 1],
        ])->update(['using_flag' => 0]);
        $credit = new $this->userCredit();
        $credit->user_id = Auth::guard('user')->user()->id;
        $credit->card_id = $data->id;
        $credit->brand = $data->brand;
        $credit->last4 = $data->last4;
        $credit->exp_month = $data->exp_month;
        $credit->exp_year = $data->exp_year;
        $credit->using_flag = 1;

        return $credit->save();
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
            ->select(['id', 'brand', 'last4', 'exp_month', 'exp_year'])
            ->first();
    }
}
