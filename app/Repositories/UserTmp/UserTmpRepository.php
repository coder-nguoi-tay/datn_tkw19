<?php

namespace App\Repositories\UserTmp;

use App\Http\Controllers\BaseController;
use App\Models\UserTmp;
use App\Repositories\UserTmp\UserTmpInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserTmpRepository extends BaseController implements UserTmpInterface
{
    private UserTmp $userTmp;

    public function __construct(UserTmp $userTmp)
    {
        $this->userTmp = $userTmp;
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
        $user = $this->userTmp->where('phone_number', $request->phone_number)->first();
        if (! $user) {
            $user = new $this->userTmp();
        }
        $user->phone_number = $request->phone_number;
        $user->sms_confirm_flag = 0;
        $user->sms_code = Hash::make($request->code);
        $user->sms_expried_datetime = Carbon::now()->addMinutes(env('SMS_CODE_EXPIRE'));
        if ($user->last_register && Carbon::parse($user->last_register)->format('Y/m/d') == Carbon::now()->format('Y/m/d')) {
            $user->sms_not_confirm_count++;
        } else {
            $user->sms_not_confirm_count = 1;
        }
        $user->last_register = Carbon::now();
        if ($user->sms_not_confirm_count >= env('MAX_SEND_CODE_ON_DAY')) {
            $user->block_expried_time = Carbon::now()->addDays(1)->format('Y/m/d');
        }

        return $user->save();
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function checkBlock($request)
    {
        $user = $this->userTmp->where('phone_number', $request->phone_number)->first();
        if (! $user) {
            return false;
        }
        if (Carbon::parse($user->block_expried_time) > Carbon::now()) {
            return true;
        }
        if ($user->sms_not_confirm_count >= env('MAX_SEND_CODE_ON_DAY') && Carbon::parse($user->last_register)->format('Y/m/d') == Carbon::now()->format('Y/m/d')) {
            return true;
        }

        return false;
    }
}
