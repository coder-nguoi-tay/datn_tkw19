<?php

namespace App\Repositories\Admin;

use App\Http\Controllers\BaseController;
use App\Mail\ForgotPassComplete;
use App\Mail\ForgotPassword;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Nette\Utils\Paginator;

class AdminRepository extends BaseController implements AdminInterface
{
    private $user;

    public function __construct(Admin $user)
    {
        $this->user = $user;
    }

    public function getUsers($request)
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

    public function destroy($id)
    {
        $userInfo = $this->user->where('id', $id)->first();
        if (! $userInfo) {
            return false;
        }
        if ($userInfo->delete()) {
            return true;
        }

        return false;
    }

    public function checkEmail($request)
    {
        return ! $this->user->where(function ($query) use ($request) {
            if (isset($request['id'])) {
                $query->where('id', '!=', $request['id']);
            }
            $query->where(['email' => $request['value']]);
        })->exists();
    }

    public function store($request)
    {
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = Hash::make($request->password);

        return $this->user->save();
    }

    public function getById($id)
    {
        return $this->user->where('id', $id)->first();
    }

    public function update($request, $id)
    {
        $userInfo = $this->user->where('id', $id)->first();
        if (! $userInfo) {
            return false;
        }
        $userInfo->name = $request->name;
        $userInfo->email = $request->email;
        if ($request->password) {
            $userInfo->password = Hash::make($request->password);
        }

        return $userInfo->save();
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

    public function getByEmail($request)
    {
        return $this->user->where('email', $request->email)->first();
    }

    public function generalResetPass($request)
    {
        $account = $this->user->where('email', $request->email)->first();
        if (! $account) {
            return false;
        }
        $account->reset_password_token = md5($request->email.random_bytes(25).Carbon::now());
        $account->reset_password_token_expire = Carbon::now()->addMinutes(env('EXPIRE_TOKEN', 30));
        if (! $account->save()) {
            return false;
        }
        $mailContents = [
            'data' => [
                'name' => $account->name,
                'link' => route('admin.password_reset.show', $account->reset_password_token),
            ],
        ];
        Mail::to($account->email)->send(new ForgotPassword($mailContents));

        return true;
    }

    public function getUserByEmail($email)
    {
        return $this->user->where('email', $email)->first();
    }

    public function getUserByToken($token)
    {
        return $this->user->where([
            ['reset_password_token', $token],
            ['reset_password_token_expire', '>=', Carbon::now()],
        ])->first();
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
}
