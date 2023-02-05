<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Accuracy;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

use function GuzzleHttp\Promise\all;

class CompanyController extends BaseController
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

    public function index(Request $request)
    {
        $newSizeLimit = $this->newListLimit($request);
        $company = Accuracy::leftjoin('company', 'company.id', 'accuracy.user_id')
            ->select('company.*', 'accuracy.status as status', 'accuracy.id as idAccuracy', 'accuracy.images as imagesAccuracy')
            ->where(function ($q) use ($request) {
                if (!empty($request['free_word'])) {
                    $q->where($this->escapeLikeSentence('company.name', $request['free_word']));
                }
                if ($request['status'] != null) {
                    $q->where('accuracy.status', $request['status']);
                }
            })
            ->orderBy('accuracy.status', 'ASC');
        $companys = $company->paginate($newSizeLimit);

        return view('admin.company.index', [
            'company' => $companys,
            'request' => $request,
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
        try {
            foreach ($request->company as $item) {
                $company = Accuracy::where('id', $item)->first();
                $acc = Accuracy::where('user_id', $company->id)->first();
                $acc->status = 1;
                $acc->save();
            }
            $this->setFlash(__('Xác thực thành công'));
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->setFlash(__('Đã có một lỗi không xác định xảy ra'), 'error');
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
