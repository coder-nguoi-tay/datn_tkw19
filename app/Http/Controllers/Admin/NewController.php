<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\CreateNewRequest;
use App\Http\Requests\PackageRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Enums\StatusCode;

class NewController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public News $new;
    public function __construct(News $new)
    {
        $this->new = $new;
    }
    public function index()
    {
        $News = News::select('id', 'title', 'new_image', 'describe', 'created_at')->get();
        return view('admin.new.index', [
            'News' => $News,
            'title' => 'Quản Lý Tin Tức'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.new.create', [
            'title' => 'Thêm Tin Tức Mới'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewRequest $request) //
    {


        $new = new $this->new();
        $new->title = $request->title;
        $new->describe = $request->describe;
        if ($request->hasFile('new_image')) {
            $avatar = $request->new_image;
            $avatarName = $avatar->hashName();
            $avatarName = $request->name . '_' . $avatarName;
            $new->new_image = $avatar->storeAs('images/new', $avatarName);
        }
        $new->save();
        if ($new) {
            $this->setFlash(__('Thêm gói thành công'));
            return redirect()->route('admin.new.index');
        }
        $this->setFlash(__('Thêm gói thất bại'));
        return redirect()->route('admin.new.index');


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
        return view('admin.new.edit', [
            'new' => $this->new->where('id', $id)->first(),
            'title' => 'Cập nhật tin tức'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $new)
    {
        // $this->new->find($id)->update($request->all());
        $new->fill($request->all());
        if ($request->hasFile('new_image')) {
            $avatar = $request->new_image;
            $avatarName = $avatar->hashName();
            $avatarName = $request->name . '_' . $avatarName;
            $new->new_image = $avatar->storeAs('images/new', $avatarName);
        }
        $new->save();
        $this->setFlash(__('Sửa tin tức thành công'));
        return redirect(route('admin.new.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (News::destroy($id)) {
            return response()->json([
                'message' => 'Xóa tin tức thành công',
                'status' => StatusCode::OK,
            ], StatusCode::OK);
        }
        return response()->json([
            'message' => 'một lỗi đã xảy ra',
            'status' => StatusCode::OK,
        ], StatusCode::INTERNAL_ERR);
    }
}
