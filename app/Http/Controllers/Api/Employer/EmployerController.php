<?php

namespace App\Http\Controllers\Api\Employer;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\Packageoffer;
use App\Models\packageofferbought;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JWTAuth;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public Employer $employer;
    public packageofferbought $packageofferbought;
    public Packageoffer $packageoffer;

    public function __construct(Employer $employer, packageofferbought $packageofferbought, Packageoffer $packageoffer)
    {
        $this->employer = $employer;
        $this->packageofferbought = $packageofferbought;
        $this->packageoffer = $packageoffer;
    }
    public function index()
    {
        return response()->json([
            'employer' => $this->employer->where('id', JWTAuth::parseToken()->authenticate()->id)->get()
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
    public function employerPackage()
    {
        $package = $this->packageofferbought
            ->where('company_id', Auth::guard('user')->user()->id)
            ->join('admin_package_offer', 'admin_package_offer.id', '=', 'package_offer_bought.package_offer_id')
            ->join('time_offer', 'time_offer.id', '=', 'admin_package_offer.time_offer_id')
            ->select('*', 'time_offer.name as name_time')
            ->Orderby('created_at', 'DESC')
            ->get();
        return response()->json([
            'package' => $package
        ]);
    }
    public function allPackage()
    {
        return response()->json([
            'package' => $this->packageoffer->select('id', 'name', 'describe', 'price', 'time_offer_id')
                ->Orderby('created_at', 'DESC')
                ->get()
        ]);
    }
    public function buyPackage(Request $request)
    {
        $this->packageofferbought->create([
            'company_id' => Auth::guard('user')->user()->id,
            'package_offer_id' => $request->id,
        ])->save();
        return response()->json([
            'msg' => 'Mua Gói Cước Thành Công'
        ]);
    }
}
