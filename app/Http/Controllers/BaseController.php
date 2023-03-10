<?php

namespace App\Http\Controllers;

use App\Enums\OperationType;
use App\Mail\ForgotPassComplete;
use App\Models\OperationLog;

use App\Repositories\Packageoffer\PackageInterface;
use App\Mail\ForgotPassword;
use App\Models\Job;
use App\Models\PaymentHistoryEmployer;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    public function setFlash($message, $mode = 'success', $urlRedirect = '')
    {
        session()->forget('Message.flash');
        session()->push('Message.flash', [
            'message' => $message,
            'mode' => $mode,
            'urlRedirect' => $urlRedirect,

        ]);
    }

    public static function newListLimit($query)
    {
        $newSizeLimit = 10;
        $arrPageSize = [10, 50, 100];
        if (isset($query['limit_page'])) {
            $newSizeLimit = (($query['limit_page'] === '') || !in_array($query['limit_page'], $arrPageSize)) ? $newSizeLimit : $query['limit_page'];
        }
        if (((isset($query['limit_page']))) && (!empty($query->query('limit_page')))) {
            $newSizeLimit = (!in_array($query->query('limit_page'), $arrPageSize)) ? $newSizeLimit : $query->query('limit_page');
        }

        return $newSizeLimit;
    }

    /**
     * [escapeLikeSentence description]
     * @param  [type]  $str    :search conditions
     * @param  bool $before : add % before
     * @param  bool $after  : add % after
     * @return [type]          [description]
     */
    public function escapeLikeSentence($column, $str, $before = true, $after = true)
    {
        $result = str_replace('\\', '[\]', $this->mbTrim($str)); // \ -> \\
        $result = str_replace('%', '\%', $result); // % -> \%
        $result = str_replace('_', '\_', $result); // _ -> \_

        return [[$column, 'LIKE', (($before) ? '%' : '') . $result . (($after) ? '%' : '')]];
    }

    public function handleSearchQuery($str, $before = true, $after = true)
    {
        $result = str_replace('\\', '[\]', $this->mbTrim($str)); // \ -> \\
        $result = str_replace('%', '\%', $result); // % -> \%
        $result = str_replace('_', '\_', $result); // _ -> \_

        return (($before) ? '%' : '') . $result . (($after) ? '%' : '');
    }

    public function checkPaginatorList($query)
    {
        if ($query->currentPage() > $query->lastPage()) {
            return true;
        }

        return false;
    }

    public function mbTrim($string)
    {
        $whitespace = '[\s\0\x0b\p{Zs}\p{Zl}\p{Zp}]';
        $ret = preg_replace(sprintf('/(^%s+|%s+$)/u', $whitespace, $whitespace), '', $string);

        return $ret;
    }

    /**
     * ???????????????????????????trim
     *
     * ????????????????????????????????????????????????????????????
     *
     * @param  string  ????????????????????????????????????
     * @return  string
     */
    public function checkRfidCode($rfidCode)
    {
        return preg_match('/^[a-zA-Z0-9][a-zA-Z0-9]*$/i', $rfidCode);
    }

    public function checkReturnCsvContent($column)
    {
        $ret = 0;
        if ($column == '') {
            $ret = 1; // Blank OR NULL
        } elseif (!$this->checkRfidCode($column)) {
            $ret = 2; // Error formart
        }

        return $ret;
    }
    public function checkMail($request)
    {
        if ($request['email'] != '') {
            return !$this->admin->where(function ($query) use ($request) {
                if (isset($request['id'])) {
                    $query->where('id', '!=', $request['id']);
                }
                $query->where(['email' => $request['email']]);
            })->exists();
        }
        return true;
    }
    public function checkMailUser($request)
    {
        if ($request['email'] != '') {
            return !$this->user->where(function ($query) use ($request) {
                if (isset($request['id'])) {
                    $query->where('id', '!=', $request['id']);
                }
                $query->where(['email' => $request['email']]);
            })->exists();
        }
        return true;
    }
    public function generalResetPass($request)
    {
        $account = $this->admin->where('email', $request->email)->first();
        if (!$account) {
            return false;
        }
        $account->reset_password_token = md5($request->email . random_bytes(25) . Carbon::now());
        $account->reset_password_token_expire = Carbon::now()->addMinutes(env('EXPIRE_TOKEN', 30));
        if (!$account->save()) {
            return false;
        }
        $mailContents = [
            'data' => [
                'name' => $account->name,
                'link' => route('resset_pass.show', $account->reset_password_token),
            ],
        ];
        Mail::to($account->email)->send(new ForgotPassword($mailContents));

        return true;
    }
    public function getUserByToken($token)
    {
        return $this->admin->where([
            ['reset_password_token', $token],
            ['reset_password_token_expire', '>=', Carbon::now()],
        ])->first();
    }
    public function updatePasswordByToken($request, $token)
    {
        $account = $this->getUserByToken($token);
        if (!$account) {
            return false;
        }
        $account->password = Hash::make($request->password);
        $account->reset_password_token = null;
        $account->reset_password_token_expire = null;
        if (!$account->save()) {
            return false;
        }
        $mailContents = [
            'name' => $account->name,
            'mail' => $account->email,
        ];
        Mail::to($account->email)->send(new ForgotPassComplete($mailContents));

        return true;
    }
    public function generalResetPassUser($request)
    {
        $account = $this->user->where('email', $request->email)->first();
        if (!$account) {
            return false;
        }
        $account->reset_password_token = md5($request->email . random_bytes(25) . Carbon::now());
        $account->reset_password_token_expire = Carbon::now()->addMinutes(env('EXPIRE_TOKEN', 30));
        if (!$account->save()) {
            return false;
        }
        $mailContents = [
            'data' => [
                'name' => $account->name,
                'link' => route('changePassword', $account->reset_password_token),
            ],
        ];
        Mail::to($account->email)->send(new ForgotPassword($mailContents));

        return true;
    }
    public function getUserToken($token)
    {
        return $this->user->where([
            ['reset_password_token', $token],
            ['reset_password_token_expire', '>=', Carbon::now()],
        ])->first();
    }
    public function updatePasswordToken($request, $token)
    {
        $account = $this->getUserToken($token);
        if (!$account) {
            return false;
        }
        $account->password = Hash::make($request->password);
        $account->reset_password_token = null;
        $account->reset_password_token_expire = null;
        if (!$account->save()) {
            return false;
        }
        $mailContents = [
            'name' => $account->name,
            'mail' => $account->email,
        ];
        Mail::to($account->email)->send(new ForgotPassComplete($mailContents));

        return true;
    }
    public function gettimeoffer()
    {
        return $this->timeoffer->latest()->select('id', 'name as label')->get();
    }
    public function getlever()
    {
        return $this->lever->latest()->select('id', 'name as label')
            ->get();
    }
    public function getexperience()
    {
        return $this->experience->latest()->select('id', 'name as label')
            ->get();
    }
    public function getwage()
    {
        return $this->wage->latest()->select('id', 'name as label')
            ->get();
    }
    public function getskill()
    {
        return $this->skill->latest()->select('id', 'name as label')
            ->get();
    }
    public function gettimework()
    {
        return $this->timework->latest()->select('id', 'name as label')
            ->get();
    }
    public function getprofession()
    {
        return $this->profession->latest()->select('id', 'name as label')
            ->get();
    }
    public function getmajors()
    {
        return $this->majors->latest()->select('id', 'name as label')
            ->get();
    }
    public function getlocation()
    {
        return $this->location->latest()->select('id', 'name as label')
            ->get();
    }
    public function getworkingform()
    {
        return $this->workingform->latest()->select('id', 'name as label')
            ->get();
    }
    function convert_name($str)
    {
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'a', $str);
        $str = preg_replace("/(??|??|???|???|???|??|???|???|???|???|???)/", 'e', $str);
        $str = preg_replace("/(??|??|???|???|??)/", 'i', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'o', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???)/", 'u', $str);
        $str = preg_replace("/(???|??|???|???|???)/", 'y', $str);
        $str = preg_replace("/(??)/", 'd', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'A', $str);
        $str = preg_replace("/(??|??|???|???|???|??|???|???|???|???|???)/", 'E', $str);
        $str = preg_replace("/(??|??|???|???|??)/", 'I', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/", 'O', $str);
        $str = preg_replace("/(??|??|???|???|??|??|???|???|???|???|???)/", 'U', $str);
        $str = preg_replace("/(???|??|???|???|???)/", 'Y', $str);
        $str = preg_replace("/(??)/", 'D', $str);
        $str = preg_replace("/(\???|\???|\???|\???|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
        $str = preg_replace("/( )/", '-', $str);
        return $str;
    }
    public function getDataMouth($request, $employer, $year)
    {
        $date = $year['date'] ?? Carbon::parse(Carbon::now())->format('Y');
        return $this->savecv
            ->join('job', 'job.id', '=', 'save_cv.id_job')
            ->join('employer', 'employer.id', '=', 'job.employer_id')
            ->where('job.employer_id', $employer)
            ->where(function ($q) use ($request, $date) {
                $q->whereMonth('save_cv.created_at', $request)
                    ->whereYear('save_cv.created_at', $date);
            })
            ->count();
    }
    public function getDataYear($request)
    {
        return PaymentHistoryEmployer::where(function ($q) use ($request) {
            $q->where('user_id', Auth::guard('user')->user()->id)
                ->whereMonth('created_at', $request)
                ->whereYear('created_at', Carbon::parse(Carbon::now())->format('Y'));
        })->pluck('price')->sum();
    }
    public function getPaymentMouth($request, $year)
    {
        $date = $year ?? Carbon::parse(Carbon::now())->format('Y');
        return PaymentHistoryEmployer::where(function ($q) use ($request, $date) {
            $q->whereMonth('created_at', $request)
                ->whereYear('created_at', $date);
        })->first();
    }
    public function getNewMouth($request, $year)
    {
        $date = $year ?? Carbon::parse(Carbon::now())->format('Y');
        return Job::where(function ($q) use ($request, $date) {
            $q->whereMonth('created_at', $request)
                ->whereYear('created_at', $date);
        })->count();
    }
}
