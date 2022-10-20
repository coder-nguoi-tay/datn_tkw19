@php
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
                            <label>Tin tuyển dụng</label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="searchFrom pull-right">
                                        <form action="" class="form-inline">
                                            <div>
                                                <input name="search_input" class="form-control" value=""
                                                    autocomplete="off" type="control" id="search_input">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                                    &nbsp; Tìm kiếm</button>
                                            </div>
                                            <a href="{{ route('employer.new.create') }}"
                                                class="btn btn-primary btn-action-create">
                                                <i class="fa fa-plus"></i>Thêm
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12 group-select-page d-flex">
                                    {{-- <limit-page-option :limit-page-option="{{ json_encode([20, 50, 100]) }}"
                                    :new-size-limit="{{ $newSizeLimit }}"></limit-page-option> --}}
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12 group-paginate">
                                    {{-- {{ $news->appends(SearchQueryComponent::alterQuery($request))->links('pagination.admin')
                                }} --}}
                                </div>
                            </div>
                            <div class="row gy-3">
                                @foreach ($job as $items)
                                    <div class="main-new">
                                        <div class="row">
                                            <div class="col-2 border col-img"><img src="{{ $items->logo }}" alt="">
                                            </div>
                                            <div class="col-10 border ">
                                                <div class="row" style="padding: 10px">
                                                    <div class="col-10">
                                                        <div class="title-new">
                                                            <h4>[{{ $items->getlocation->name }}] {{ $items->title }}</h4>
                                                        </div>
                                                        <div class="title-location"><span>Fpt Software</span>|<span><i
                                                                    class="fa-solid fa-location-dot"></i>{{ $items->getlocation->name }}</span>
                                                        </div>
                                                        <div class="title-skill">
                                                            <span><i class="fa fa-code" aria-hidden="true"></i>
                                                                @foreach ($items->getskill as $item)
                                                                    {{ $item->name }},
                                                                @endforeach
                                                            </span><span class="title-crossbar">|</span>
                                                            {{-- {{ dd($job[0]->getWage->name) }} --}}
                                                            <span class="title-number"><i
                                                                    class="fas fa-wallet fa-fw"></i>{{ $items->getWage->name }}</span><span
                                                                class="title-crossbar">|</span>
                                                            <span class="title-number"><i
                                                                    class="far fa-calendar-times"></i>Hạn
                                                                nộp:
                                                                {{ Carbon::parse($items->end_job_time)->format('d/m/Y') }}
                                                            </span>
                                                            <div class="date-new">
                                                                <h5>Thời gian còn lại: 30 ngày</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 text-center" style="margin-top: 25px">
                                                        <div class="title-buttom">
                                                            <a href="{{ route('employer.new.destroy', $items->id) }}"><i
                                                                    class="fas fa-trash btn-delete"></i></a>
                                                            <br>
                                                            <a href=""><i class="fas fa-tools"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="group-paginate">
                                {{-- {{ $news->appends(SearchQueryComponent::alterQuery($request))->links('pagination.admin') }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
