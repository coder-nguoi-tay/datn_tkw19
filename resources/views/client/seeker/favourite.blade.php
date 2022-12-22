@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.seeker')
@section('seeker')
    <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="data-responsive">
                    @foreach ($job as $item)
                        <div class="dashed-list-wrap bg-white rounded mb-3">
                            <div class="dashed-list-full bg-white rounded p-3 mb-3">
                                <div class="dashed-list-short d-flex align-items-center">
                                    <div class="dashed-list-short-first">
                                        <div class="dashed-avater">
                                            <img src="" class="img-fluid circle" width="70" alt="" />
                                        </div>
                                    </div>
                                    <div class="dashed-list-short-last">
                                        <div class="cats-box-caption px-2">
                                            <h4 class="fs-lg mb-0 ft-medium theme-cl">{{ $item->title }}</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <span><i
                                                        class="lni lni-map-marker mr-1"></i>{{ $item->getlocation->name }}</span>
                                                <span class="ml-2"><i
                                                        class="lni lni-briefcase mr-1"></i>{{ $item->getMajors->name }}</span>
                                            </div>
                                            <div class="ico-content">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="
                                                                    px-2
                                                                    py-1
                                                                    medium
                                                                    bg-light-success
                                                                    rounded
                                                                    text-success
                                                                    "><i
                                                                class="far fa-money-bill-alt mr-1"></i>{{ $item->getWage->name }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#message"
                                                            class="px-2 py-1 medium bg-light-info rounded text-info"><i
                                                                class="lni lni-envelope mr-1"></i>Message</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashed-list-last">
                                    <div class="text-left">
                                        <form action="{{ route('delete.favourite', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button data-toggle="modal" data-target="#edit"
                                                class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i
                                                    class="lni lni-trash-can mr-2"></i>Bỏ lưu</button>
                                        </form>

                                    </div>
                                    <div class="ico-content" style="top: 10px">
                                        <ul>
                                            <li>
                                                <span><i class="lni lni-calendar mr-1"></i>
                                                    {{ Carbon::parse($item->end_job_time)->format('d/m/Y') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
