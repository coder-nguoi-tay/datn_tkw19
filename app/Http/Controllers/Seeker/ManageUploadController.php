<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\UploadCv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManageUploadController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public UploadCv $upload;
    public function __construct(UploadCv $upload)
    {
        $this->upload = $upload;
    }
    public function index()
    {
        $breadcrumbs = [
            'Quản lý cv'
        ];
        $cv = $this->upload->get();
        return view('client.seeker.save-cv', [
            'breadcrumbs' => $breadcrumbs,
            'cv' => $cv,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumbs = [
            [
                'url' => route('quan-ly-cv.index'),
                'name' => 'Quản lý cv'
            ],
            'Thêm CV'
        ];
        return view('client.seeker.create-cv', [
            'breadcrumbs' => $breadcrumbs,
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
        try {
            $upload = new $this->upload();
            $upload->user_id = Auth::guard('user')->user()->id;
            $upload->title = 'Triệu Việt Đức';
            if ($request->hasFile('file_cv')) {
                $upload->file_cv = $request->file_cv->storeAs('images/cv', $request->file_cv->hashName());
            }
            $upload->save();
            $this->setFlash(__('Thêm cv mới thành công'));
            return redirect()->route('quan-ly-cv.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->setFlash(__('đã có một lỗi không rõ nguyên nhân xảy ra'), 'error');
            return redirect()->route('quan-ly-cv.index');
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
        $this->upload->destroy($id);
        $this->setFlash(__('Xóa cv thành công'));
        return redirect()->route('quan-ly-cv.index');
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
        $this->upload->destroy($id);
        $this->setFlash(__('Xóa cv thành công'));
        return redirect()->route('quan-ly-cv.index');
    }
}
