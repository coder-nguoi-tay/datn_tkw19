<?php

namespace App\Http\Controllers\Api\User;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\CheckLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Facades\JWTAuth as FacadesJWTAuth;

class RegisterController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public User $user;
    public Employer $employer;
    public function __construct(User $user, Employer $employer)
    {
        $this->user = $user; //nó là thằng model users
        $this->employer = $employer; //nó là thằng model company

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CheckLoginRequest $request)
    {
        try {
            $credentials = $request->only('email', 'password');
            $token = FacadesJWTAuth::attempt($credentials);
            if (!$token) {
                return response()->json([
                    'message' => 'Tên người dùng và mật khẩu không phù hợp.',
                    'status_code' => StatusCode::FORBIDDEN,
                ], StatusCode::OK);
            }
        } catch (JWTAuthException $e) {
            return response()->json([
                'message' => 'Không tạo được mã thông báo',
                'status_code' => StatusCode::BAD_REQUEST,
            ], StatusCode::OK);
        }

        return response()->json([
            'data' => [
                'token' => $token,
                'name' => JWTAuth::user()->name,
                'email' => JWTAuth::user()->email,
                'role_id' => JWTAuth::user()->role_id,
            ],
            'status_code' => StatusCode::OK,
        ], StatusCode::OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRegisterRequest $request)
    {
        if ($request->id == 1) {
            if ($this->checkMailUser($request)) {
                $user = new $this->user();
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->name = $request->fullName;
                $user->role_id = 2;
                $user->status = 1;
                $user->save();
                return response()->json([
                    'message' => 'Đăng ký thành công'
                ]);
            }
            return response()->json([
                'message' => 'Email đã tồn tại'
            ]);
        } else if ($request->id == 2) {
            if ($this->checkMailUser($request)) {
                $user = new $this->user();
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->name = $request->fullName;
                $user->role_id = 2;
                $user->status = 1;
                $user->save();

                $checkCompany = new $this->employer();
                $checkCompany->name = $request->fullName;
                $checkCompany->phone = $request->phone;
                $checkCompany->sex = 0;
                $checkCompany->namecompany = $request->namecompany;
                $checkCompany->workplace = $request->workplace;
                $checkCompany->address = $request->address;
                $checkCompany->role_id = $user->id;
                $checkCompany->email = $request->email;
                $checkCompany->save();
                return response()->json([
                    'message' => 'Đăng ký thành công'
                ]);
            }
            return response()->json([
                'message' => 'Email đã tồn tại',
            ]);
        } else {
            return response()->json([
                'message' => 'đăng ký không thành công'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logout()
    {
        auth()->logout(true);
        return response()->json(['message' => 'đăng xuất thành công', 'status_code' => StatusCode::OK], StatusCode::OK);
    }
    public function getUserInfo()
    {
        $user = JWTAuth::parseToken()->authenticate()->getProfile()->get();
        if ($user == []) {
            return null;
        }
        return [
            $user
        ];
    }
}
