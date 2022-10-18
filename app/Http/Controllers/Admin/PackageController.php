<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;

use App\Http\Requests\PackageRequest;
use App\Models\Packageoffer;
use App\Models\Timeoffer;

class PackageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private Packageoffer $package;
    public Timeoffer $timeoffer;

    public function __construct(Packageoffer $package, Timeoffer $timeoffer)
    {

        $this->package = $package; 
        $this->timeoffer = $timeoffer;
    }
    public function index()
    {
        return view('admin.package.index', [
            'title' => 'Các gói ưu đãi',
            'package' => $this->package->select('*')->with('timeofer')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create', [
            'timeoffer' => $this->gettimeoffer(),
            'title'=>'Thêm Gói Ưu Đãi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        
        $package = $this->package->create($request->all())->save();
        if ($package) {
            $this->setFlash(__('Thêm gói thành công'));
            return redirect()->route('admin.package.index');
        }
        $this->setFlash(__('Thêm gói thất bại'));
        return redirect()->route('admin.package.index');
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
        return view('admin.package.edit', [
            'package' => $this->package->where('id',$id)->first(),
            'timeoff' => $this->gettimeoffer(),
            'title' => 'Cập nhật gói cước'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequest $request, $id)
    {
        $this->package->find($id)->update($request->all()); 
        $this->setFlash(__('Sửa gói cước thành công'));
        return redirect(route('admin.package.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Packageoffer::destroy($id);
        //Packageoffer::find($id)->delete();
        if ($this->package->destroy($id)) {
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
