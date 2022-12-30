<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterCompanyController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Company $company;
    public Employer $employer;
    public function __construct(Company $company, Employer $employer)
    {
        $this->company = $company;
        $this->employer = $employer;
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
        try {
            $employer = $this->employer->where('user_id', Auth::guard('user')->user()->id)->first();
            $Checkompany = Company::where('id', $employer->id_company)->first();
            if ($Checkompany) {
                $company = $Checkompany;
            } else {
                $company = new $this->company();
            }
            $company->name = $request->nameCompany;
            $company->number_tax = $request->number_tax;
            $company->address = $request->address;
            $company->desceibe = $request->desceibe;
            $company->number_member = $request->number_member;
            $company->email = $request->email;
            if ($request->hasFile('logo')) {
                $company->logo = $request->logo->storeAs('images/cv', $request->logo->hashName());
            }
            $company->save();
            $employer->id_company = $company->id;
            $employer->save();
            $this->setFlash(__('Thêm công ty thành công'));
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->setFlash(__('Đã có một lỗi không các định xảy ra'), 'error');
            return redirect()->back();
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
}