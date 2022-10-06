<?php

namespace App\Repositories\User;

use App\Enums\DisplayInfoFlag;
use App\Enums\UserType;
use App\Http\Controllers\BaseController;
use App\Mail\ForgotPassComplete;
use App\Mail\ForgotPassword;
use App\Models\User;
use App\Models\UserTmp;
use App\Repositories\User\UserInterface;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Twilio\Rest\Client;

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
        $newSizeLimit = $this->newListLimit($request);
        $userBuilder = $this->user;
        if (isset($request['search_input'])) {
            $userBuilder = $userBuilder->where(function ($q) use ($request) {
                $q->orWhere($this->escapeLikeSentence('name', $request['search_input']));
                $q->orWhere($this->escapeLikeSentence('email', $request['search_input']));
            });
        }
        $users = $userBuilder->sortable(['created_at' => 'desc', 'status' => 'desc'])->paginate($newSizeLimit);
        if ($this->checkPaginatorList($users)) {
            Paginator::currentPageResolver(function () {
                return 1;
            });
            $users = $userBuilder->paginate($newSizeLimit);
        }

        return $users;
    }

    public function getById($id)
    {
        return $this->user->where('id', $id)->first();
    }

    public function store($request)
    {
        try {
            DB::beginTransaction();
            $user = new $this->user;
            $user->show_name = $request->show_name;
            $user->phone_number = (env('VN_MODE') ? '+84' : '+81').$request->phone_number;
            $user->email = $request->email ? $request->email : '';
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
            if (isset($userTmp)) {
                if (! $userTmp->delete()) {
                    DB::rollBack();

                    return false;
                }
            }

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return false;
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        try {
            DB::beginTransaction();
            $userInfo = $this->user->where('id', $id)->first();
            if (! $userInfo) {
                DB::rollBack();

                return false;
            }
            $userInfo->show_name = $request->show_name;
            $userInfo->phone_number = (env('VN_MODE') ? '+84' : '+81').$request->phone_number;
            $userInfo->email = $request->email ? $request->email : '';
            $userInfo->password = $request->password ? Hash::make($request->password) : $userInfo->password;
            $userInfo->type = $request->type;
            $userInfo->prefecture_id = $request->prefecture_id;
            $userInfo->city_id = $request->city_id;
            $userInfo->job_type = $request->job_type;
            if ($request->type == UserType::PERSON) {
                $userInfo->birthday = $request->birthday;
                $userInfo->gender = $request->gender;
            } else {
                $userInfo->name = $request->name;
                $userInfo->name_kana = $request->name_kana;
                $userInfo->representative_name = $request->representative_name;
                $userInfo->address_building = $request->address_building;
                $userInfo->job_descriptions = $request->job_descriptions;
            }
            if (! $userInfo->save()) {
                DB::rollBack();

                return false;
            }
            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return false;
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $userInfo = $this->user->where('id', $id)->first();
        if (! $userInfo) {
            return false;
        }
        if ($userInfo->delete()) {
            return true;
        }

        return false;
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
            if ($request->type == UserType::PERSON) {
                $user->birthday = $request->birthday;
                $user->gender = $request->gender;
                $user->job_type = $request->job_type;
                $user->currently_member = $request->currently_member;
                $user->university_of = $request->university_of;
                $user->born_in_college = $request->born_in_college;
                $user->born_in_middle_schoole = $request->born_in_middle_schoole;
            } else {
                $user->name = $request->name;
                $user->name_kana = $request->name_kana;
                $user->representative_name = $request->representative_name;
                $user->address_building = $request->address_building;
                $user->industry_id = $request->industry_id;
                $user->industry_content = $request->industry_content;
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

    public function checkEmail($request)
    {
        if ($request['value'] != '') {
            return ! $this->user->where(function ($query) use ($request) {
                if (isset($request['id'])) {
                    $query->where('id', '!=', $request['id']);
                }
                $query->where(['email' => $request['value']]);
            })->exists();
        }

        return true;
    }

    public function updateProfile($request, $id)
    {
        try {
            DB::beginTransaction();
            $userInfo = $this->user->where('id', $id)->first();
            if (! $userInfo) {
                DB::rollBack();

                return false;
            }
            $userInfo->show_name = $request->show_name;
            $userInfo->gender = $request->gender;
            $userInfo->birthday = $request->birthday;
            $userInfo->prefecture_id = $request->prefecture_id;
            $userInfo->city_id = $request->city_id;
            if ($request['address_building']) {
                $userInfo->address_building = $request->address_building;
            }
            if (! $userInfo->save()) {
                DB::rollBack();

                return false;
            }
            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return false;
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

    public function updateSettingNotification($request, $id)
    {
        $currentUser = $this->user->where('id', $id)->first();

        $currentUser->deal_noti_flag = $request->deal_noti_flag == 1 ? 1 : 0;
        $currentUser->public_chat_noti = $request->public_chat_noti == 1 ? 1 : 0;
        $currentUser->join_event_noti = $request->join_event_noti == 1 ? 1 : 0;
        $currentUser->receiving_noti_flag = $request->receiving_noti_flag == 1 ? 1 : 0;

        $currentUser->save();

        return $currentUser;
    }

    public function getByEmail($email)
    {
        return $this->user->where('email', $email)->first();
    }

    public function generalResetPass($request, $isEmail)
    {
        $account = $this->user->where($isEmail ? 'email' : 'phone_number', $isEmail ? $request->email : ((env('VN_MODE') ? '+84' : '+81').$request->email))->first();
        if (! $account) {
            return false;
        }
        $account->reset_password_token = md5($request->email.random_bytes(25).Carbon::now());
        $account->reset_password_token_expire = Carbon::now()->addMinutes(env('EXPIRE_TOKEN', 30));
        if (! $account->save()) {
            return false;
        }

        if ($isEmail) {
            $mailContents = [
                'data' => [
                    'name' => $account->name,
                    'link' => route('password_reset.show', $account->reset_password_token),
                ],
            ];
            Mail::to($account->email)->send(new ForgotPassword($mailContents));

            return true;
        }

        $client = new Client(getenv('TWILIO_SID'), getenv('TWILIO_AUTH_TOKEN'));
        try {
            $client->messages->create(
                (env('VN_MODE') ? '+84' : '+81').$request->email,
                [
                    'from' => getenv('TWILIO_NUMBER'),
                    'body' => route('password_reset.show', $account->reset_password_token),
                ]
            );
        } catch (\Throwable $th) {
            return false;
        }

        return true;
    }

    public function updatePasswordByToken($request, $token)
    {
        $account = $this->getUserByToken($token);
        if (! $account) {
            return false;
        }
        $account->password = Hash::make($request->password);
        $account->reset_password_token = null;
        $account->reset_password_token_expire = null;
        if (! $account->save()) {
            return false;
        }
        $mailContents = [
            'name' => $account->name,
            'mail' => $account->email,
        ];
        Mail::to($account->email)->send(new ForgotPassComplete($mailContents));

        return true;
    }

    public function getUserByToken($token)
    {
        return $this->user->where([
            ['reset_password_token', $token],
            ['reset_password_token_expire', '>=', Carbon::now()],
        ])->first();
    }

    public function getUserByPhoneNumber($info)
    {
        return $this->user->where('phone_number', $info)->first();
    }
}
