<?php

namespace App\Http\Controllers\User;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\PhoneNumberRequest;
use App\Http\Requests\UserRegister;
use App\Repositories\City\CityInterface;
use App\Repositories\Prefecture\PrefectureInterface;
use App\Repositories\User\UserInterface;
use App\Repositories\UserTmp\UserTmpInterface;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class RegisterController extends BaseController
{
    private $user;

    private $userTmp;

    private $prefecture;

    private $city;

    public function __construct(UserInterface $user, UserTmpInterface $userTmp, CityInterface $city, PrefectureInterface $prefecture)
    {
        $this->user = $user;
        $this->userTmp = $userTmp;
        $this->prefecture = $prefecture;
        $this->city = $city;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.register.index', [
            'title' => '会員登録',
            'prefectures' => $this->prefecture->get(),
            'cities' => $this->city->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRegister $request)
    {
        if (! $this->userTmp->verifyCode($request)) {
            return response()->json(['message' => 'code expired'], StatusCode::INTERNAL_ERR);
        }
        if ($this->user->register($request)) {
            return response()->json([
                'status' => StatusCode::OK,
            ], StatusCode::OK);
        }

        return response()->json([
            'message' => 'エラーが発生しました。',
        ], StatusCode::INTERNAL_ERR);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sendCode(PhoneNumberRequest $request)
    {
        if (! $this->user->checkPhone($request)) {
            return response()->json([
                'message' => 'この電話番号は既に利用されています。SMSが利用可能な別の電話番号をご使用ください。',
            ], StatusCode::BAD_REQUEST);
        }
        if ($this->userTmp->checkLock($request)) {
            return response()->json([
                'message' => '連続で3回以上の送信はできません。しばらく時間を空けて再度お試しください。',
            ], StatusCode::TOO_MANY_REQUEST);
        }
        $code = random_int(100000, 999999);
        $request->code = $code;
        if (! $this->userTmp->store($request)) {
            return response()->json([
                'message' => 'error save data',
            ], StatusCode::INTERNAL_ERR);
        }
        $client = new Client(getenv('TWILIO_SID'), getenv('TWILIO_AUTH_TOKEN'));
        try {
            $client->messages->create(
                (env('VN_MODE') ? '+84' : '+81').$request->phone_number,
                [
                    'from' => getenv('TWILIO_NUMBER'),
                    'body' => 'your code: '.$code,
                ]);

            return response()->json([], StatusCode::OK);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], StatusCode::NOT_FOUND);
        }
    }

    public function verifyCode(PhoneNumberRequest $request)
    {
        if (! $this->userTmp->verifyCode($request)) {
            return response()->json(['message' => 'code expired'], StatusCode::NOT_FOUND);
        }

        return response()->json([], StatusCode::OK);
    }

    public function checkPhone(Request $request)
    {
        return response()->json([
            'valid' => $this->user->checkPhone($request),
        ], StatusCode::OK);
    }
}
