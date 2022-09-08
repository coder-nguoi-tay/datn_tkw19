<?php

namespace App\Repositories\User;

use App\Enums\DisplayInfoFlag;
use App\Enums\UserType;
use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Models\UserTmp;
use App\Repositories\User\UserInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseController implements UserInterface
{
    private User $user;

    private UserTmp $userTmp;

    public function __construct(User $user, UserTmp $userTmp)
    {
        $this->user = $user;
        $this->userTmp = $userTmp;
    }

    public function get($request)
    {
        // TODO: Implement get() method.
    }

    public function getById($request)
    {
        return $this->user
            ->where('id', Auth::guard('user')->user()->id)
            ->first();
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

    public function register($request)
    {
        try {
            DB::beginTransaction();
            // UserType
            $user = new $this->user;
            $user->show_name = $request->show_name;
            $user->phone_number = (env('VN_MODE') ? '+84' : '+81').$request->phone_number;
            $user->password = Hash::make($request->password);
            $user->type = $request->type;
            $user->prefecture_id = $request->prefecture_id;
            $user->city_id = $request->city_id;
            $user->job_type = $request->job_type;
            if ($request->type == UserType::PERSON) {
                $user->birthday = $request->birthday;
                $user->gender = $request->gender;
            } else {
                $user->name = $request->name;
                $user->name_kana = $request->name_kana;
                $user->representative_name = $request->representative_name;
                $user->address_building = $request->address_building;
                $user->job_descriptions = $request->job_descriptions;
            }
            if (! $user->save()) {
                DB::rollBack();

                return false;
            }
            $userTmp = $this->userTmp->where('phone_number', $request->phone_number)->first();
            if (! Hash::check($request->code, $userTmp->sms_code)) {
                DB::rollBack();

                return false;
            }
            $userTmp->delete();
            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return false;
    }

    public function updateLastLogin($id)
    {
        $currentUser = $this->user->where('id', $id)->first();
        if (! $currentUser) {
            return false;
        }
        $currentUser->last_login_at = Carbon::now();

        return $currentUser->save();
    }

    public function changeName($request)
    {
        $userInfo = $this->user
            ->where('id', Auth::guard('user')->user()->id)
            ->first();
        if (! $userInfo) {
            return false;
        }
        $userInfo->show_name = $request->show_name;
        $userInfo->memo = $request->memo;
        $userInfo->display_info_flag = $request->display_info_flag ? DisplayInfoFlag::SHOWFLAG : DisplayInfoFlag::DEFAULT;

        return $userInfo->save();
    }
}
