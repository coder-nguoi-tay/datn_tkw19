@php
use App\Components\SearchQueryComponent;
use App\Enums\PublishStatus;
use Carbon\Carbon;
@endphp
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <label>お知らせ一覧</label>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="searchFrom pull-right">
                                    <form action="{{ route('admin.news.index') }}" class="form-inline">
                                        <div>
                                            <input name="search_input" class="form-control" placeholder="検索"
                                                value="{{ $request->search_input }}" autocomplete="off" type="control"
                                                id="search_input">
                                            <button type="submit" class="btn btn-primary w-100"><i
                                                    class="fa fa-search"></i> &nbsp; 検索</button>
                                        </div>
                                        <a href="{{ route('admin.news.create') }}"
                                            class="btn btn-primary btn-action-create">
                                            <i class="fa fa-plus"></i>新規登録
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @if (!$news->isEmpty())
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 group-select-page d-flex">
                                <limit-page-option :limit-page-option="{{ json_encode([20, 50, 100]) }}"
                                    :new-size-limit="{{ $newSizeLimit }}"></limit-page-option>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 group-paginate">
                                {{ $news->appends(SearchQueryComponent::alterQuery($request))->links('pagination.admin')
                                }}
                            </div>
                        </div>
                        <table class="table table-responsive-sm table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        @sortablelink('news_title', 'タイトル')
                                    </th>
                                    <th class="w-150">
                                        @sortablelink('news_publish_start_datetime', '公開を開始')
                                    </th>
                                    <th class="w-150">
                                        @sortablelink('news_publish_end_datetime', '公開終了')
                                    </th>
                                    <th class="w-100">
                                        @sortablelink('news_publish_status', '公開設定')
                                    </th>
                                    <th class="w-100">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $new)
                                <tr>
                                    <td>
                                        {{ $new->title }}
                                    </td>
                                    <td>
                                        {{ $new->publish_start_date_format }}
                                    </td>
                                    <td>
                                        {{ $new->publish_end_date_format }}
                                    </td>
                                    <td>
                                        {{ PublishStatus::getDescription($new->publish_status) }}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" id="action" type="button"
                                                data-coreui-toggle="dropdown" aria-expanded="false">操作選択</button>
                                            <ul class="dropdown-menu" aria-labelledby="action">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.news.edit', $new->id) }}"
                                                        class="dropdown-item">
                                                        <i class="fa fa-eye"></i>確認・編集
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <btn-delete-confirm
                                                        :message-confirm="{{ json_encode('このお知らせを削除しますか？') }}"
                                                        :delete-action="{{ json_encode(route('admin.news.destroy', $new->id)) }}">
                                                    </btn-delete-confirm>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="group-paginate">
                            {{ $news->appends(SearchQueryComponent::alterQuery($request))->links('pagination.admin') }}
                        </div>
                        @else
                        <data-empty></data-empty>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection