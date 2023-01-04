<?php

namespace App\Http\Controllers\Seeker;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Accuracy;
use App\Models\ProfileUserCv;
use App\Models\UploadCv;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

use function GuzzleHttp\Promise\all;

class ManageUploadController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public UploadCv $upload;
    public ProfileUserCv $profileUserCv;
    public function __construct(UploadCv $upload, ProfileUserCv $profileUserCv)
    {
        $this->upload = $upload;
        $this->profileUserCv = $profileUserCv;
    }
    public function index()
    {
        $breadcrumbs = [
            'Quản lý cv '
        ];
        $cv = $this->upload->where('user_id', Auth::guard('user')->user()->id)->get();
        return view('client.seeker.save-cv', [
            'breadcrumbs' => $breadcrumbs,
            'cv' => $cv,
            'title' => '123'
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

    public function createFormCV()
    {
        return view('client.seeker.create_form_cv', [
            'title' => 'Tạo mới CV',
            'user' => $this->profileUserCv->where('user_id', Auth::guard('user')->user()->id)->first(),
            'user_name' => User::where('id', Auth::guard('user')->user()->id)->first()->name,
        ]);
    }
    public function storeFormCV(Request $request)
    {
        dd($request->all());
        $user = $this->profileUserCv->where('user_id', Auth::guard('user')->user()->id)->first();
        if ($user) {
            $profileUserCv = $this->profileUserCv->where('user_id', Auth::guard('user')->user()->id)->first();
        } else {
            $profileUserCv = new $this->profileUserCv();
        }
        try {
            if ($request->status_profile) {
                $profileUserCv->status_profile = 1;
            } else {
                $profileUserCv->status_profile = 0;
            }
            $profileUserCv->email = $request->email;
            if ($request->hasFile('images')) {
                $profileUserCv->images = $request->images->storeAs('images/cv', $request->images->hashName());
            }
            $profileUserCv->majors = $request->majors;
            $profileUserCv->link_fb = $request->link_fb;
            $profileUserCv->user_id = Auth::guard('user')->user()->id;
            $profileUserCv->address = $request->address;
            $profileUserCv->phone = $request->phone;
            $profileUserCv->skill = $request->skill;
            $profileUserCv->certificate = $request->certificate;
            $profileUserCv->target = $request->target;
            $profileUserCv->work = $request->work;
            $profileUserCv->work_detail = $request->work_detail;
            $profileUserCv->project = $request->project;
            $profileUserCv->project_detail = $request->project_detail;
            $profileUserCv->save();
            $this->setFlash(__('Cập nhật thành công !'));
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollback();
            $this->setFlash(__('đã có một lỗi không xác định đã xảy ra, kiểm tra lại thông tin của bạn'), 'error');
            return redirect()->back();
        }
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

    // tao va tai xuomh cv
    public function downloadPdf()
    {
        $pdf = PDF::loadView('client.seeker.pdf')->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream();
    }
}