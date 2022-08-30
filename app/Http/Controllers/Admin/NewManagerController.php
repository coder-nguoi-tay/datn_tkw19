<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\NewsManagerRequest;
use App\Repositories\News\NewsInterface;
use Illuminate\Http\Request;

class NewManagerController extends BaseController
{
    private $new;

    public function __construct(NewsInterface $new)
    {
        $this->new = $new;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $breadcrumbs = [
            'お知らせ一覧',
        ];
        $newSizeLimit = $this->newListLimit($request);

        return view('admin.new.index', [
            'title' => 'お知らせ一覧',
            'breadcrumbs' => $breadcrumbs,
            'news' => $this->new->getNews($request),
            'request' => $request,
            'newSizeLimit' => $newSizeLimit,
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
                'url' => route('admin.news.index'),
                'name' => 'お知らせ一覧',
            ],
            '新規お知らせ配信',
        ];

        return view('admin.new.create', [
            'title' => '新規お知らせ配信',
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsManagerRequest $request)
    {
        if ($this->new->store($request)) {
            $this->setFlash(__('お知らせの登録が完了しました。'));

            return redirect(route('admin.news.index'));
        }
        $this->setFlash(__('エラーが発生しました。'), 'error');

        return redirect()->route('admin.news.create');
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
        $breadcrumbs = [
            [
                'url' => route('admin.news.index'),
                'name' => 'お知らせ一覧',
            ],
            'お知らせ編集',
        ];
        $new = $this->new->getById($id);
        if (! $new) {
            return redirect(route('admin.news.index'));
        }

        return view('admin.new.edit', [
            'title' => 'お知らせ編集',
            'breadcrumbs' => $breadcrumbs,
            'new' => $new,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsManagerRequest $request, $id)
    {
        if ($this->new->update($request, $id)) {
            $this->setFlash(__('お知らせの編集が完了しました。'));

            return redirect(route('admin.news.index'));
        }
        $this->setFlash(__('エラーが発生しました。'), 'error');

        return redirect()->route('admin.news.update', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->new->destroy($id)) {
            return response()->json([
                'message' => 'お知らせの削除が完了しました。',
                'status' => StatusCode::OK,
            ], StatusCode::OK);
        }

        return response()->json([
            'message' => 'エラーが発生しました。',
            'status' => StatusCode::OK,
        ], StatusCode::INTERNAL_ERR);
    }
}
