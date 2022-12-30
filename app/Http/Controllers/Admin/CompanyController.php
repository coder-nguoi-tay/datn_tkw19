<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accuracy;
use App\Models\Company;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public Company $company;
    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function index()
    {
        $company = Company::select('company.*', 'accuracy.id as idAccuracy', 'accuracy.status as status')
            ->leftjoin('employer', 'employer.id_company', 'company.id')
            ->leftjoin('accuracy', 'accuracy.user_id', 'employer.user_id')
            ->whereNotNull('accuracy.user_id')
            ->get();
        return view('admin.company.index', [
            'company' => $company,
            'title' => 'Danh sách công ty'
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
        //
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
    public function dataXt($id)
    {
        $acc = Accuracy::where('id', $id)->first();
        return response()->json([
            'data' => $acc
        ]);
    }
    public function changeStatus(Request $request)
    {
        $acc = Accuracy::where('id', $request['id'])->first();
        $acc->status = 1;
        $acc->save();
        return response()->json([
            'message' => 'Xác nhận thành công'
        ]);
    }
}