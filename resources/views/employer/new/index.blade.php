@extends('layouts.admin')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <label>料金プラン</label>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="searchFrom pull-right">
                                    {{-- <form action="" class="form-inline">
                                            <div>
                                                <input name="search_input" class="form-control" placeholder="検索"
                                                    value="{{ $request->search_input }}">
                                                <button type="submit" class="btn btn-dark-green w-100">
                                                    <i class="fa fa-search"></i> &nbsp; 検索
                                                </button>
                                            </div> --}}
                                    <button class="btn btn-dark-green btn-action-create" data-coreui-toggle="modal"
                                        data-coreui-target="#staticBackdrop">
                                        <i class="fa fa-plus"></i>新規登録
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table class="table table-responsive-sm table-striped text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th class="w-120 th-dark-green">
                                        ID
                                    </th>
                                    <th class="w-165 th-dark-green">
                                        タイプ
                                    </th>
                                    <th class="w-120 th-dark-green">
                                        名前
                                    </th>
                                    <th class="w-120 th-dark-green">
                                        金額
                                    </th>
                                    <th class="w-120 th-dark-green">
                                        購入ページ
                                    </th>
                                    <th class="w-120 th-dark-green">

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 0001</td>
                                    <td>フリー</td>
                                    <td> 無料</td>
                                    <td> 0円</td>
                                    <td> URL</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-dark-green dropdown-toggle" id="action"
                                                type="button" data-coreui-toggle="dropdown"
                                                aria-expanded="false">操作選択</button>
                                            <ul class="dropdown-menu" aria-labelledby="action">
                                                <li>
                                                    <a class="dropdown-item" href="#" class="dropdown-item">
                                                        <i class="fa fa-eye"></i>確認・編集
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    {{-- <btn-delete-confirm
                                                            :message-confirm="{{ json_encode('この案件を削除しますか？') }}"
                                                            :delete-action="{{ json_encode() }}">
                                                        </btn-delete-confirm> --}}
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0002</td>
                                    <td>サブスクリプション</td>
                                    <td>月払い</td>
                                    <td>30,000円/月</td>
                                    <td>URL</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-dark-green dropdown-toggle" id="action"
                                                type="button" data-coreui-toggle="dropdown"
                                                aria-expanded="false">操作選択</button>
                                            <ul class="dropdown-menu" aria-labelledby="action">
                                                <li>
                                                    <a class="dropdown-item" href="#" class="dropdown-item">
                                                        <i class="fa fa-eye"></i>確認・編集
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    {{-- <btn-delete-confirm
                                                            :message-confirm="{{ json_encode('この案件を削除しますか？') }}"
                                                            :delete-action="{{ json_encode() }}">
                                                        </btn-delete-confirm> --}}
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
@endsection
