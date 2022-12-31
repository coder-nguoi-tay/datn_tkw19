<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Models\jobAttractive;
use App\Models\LeverPackage;
use App\Models\Packageoffer;
use App\Models\Timeoffer;
use Illuminate\Http\Request;

class JobAttractiveController extends BaseController
{
    public jobAttractive $jobattractive;

    public Timeoffer $timeoffer;
    public LeverPackage $leverpackage;
    public function __construct(jobAttractive $jobattractive, Timeoffer $timeoffer, LeverPackage $leverpackage)
    {
        $this->jobattractive = $jobattractive;
        $this->timeoffer = $timeoffer;
        $this->leverpackage = $leverpackage;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $jobattractive1 = jobAttractive::get();
        // dd($this->jobattractive->select('*')->with('leverpackage')->get());
        return view('admin.jobAttractive.index', [
            'title' => 'Gói Ưu Đãi Hấp Dẫn',
            'jobAttractives' => $this->jobattractive->select('*')->with('leverpackage')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.jobAttractive.create', [
            'title' => 'Thêm Gói Ưu Đãi Hấp Dẫn',
            'leverpackage'  => $this->leverpackage->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $jobattractive = $this->jobattractive->create($request->all())->save();
        if ($jobattractive) {
            $this->setFlash(__('Thêm gói thành công'));
            return redirect()->route('admin.jobAttractive.index');
        }
        $this->setFlash(__('Thêm gói thất bại'));
        return redirect()->route('admin.jobAttractive.index');
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
        return view('admin.jobAttractive.edit', [

            'leverpackage'  => $this->leverpackage->get(),
            'jobattractive' => $this->jobattractive->where('id', $id)->first(),
            'title' => 'Cập Nhật Gói Ưu Đãi Hấp Dẫn'
        ]);
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
        $this->jobattractive->find($id)->update($request->all());
        $this->setFlash(__('Sửa gói cước thành công'));
        return redirect(route('admin.jobAttractive.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->jobattractive->destroy($id)) {
            return response()->json([
                'message' => 'Xóa gói cước thành công',
                'status' => StatusCode::OK,
            ], StatusCode::OK);
        }
        return response()->json([
            'message' => 'một lỗi đã xảy ra',
            'status' => StatusCode::OK,
        ], StatusCode::INTERNAL_ERR);
    }
}