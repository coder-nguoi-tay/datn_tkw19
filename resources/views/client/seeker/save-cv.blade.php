@extends('client.layout.seeker')
@section('seeker')
    <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class="box-title box-cv">
                            <h2 class="box-name"><span style="margin-left: 5px !important">Quản lý CV</span></h2>
                            <a href="{{ route('quan-ly-cv.create') }}" class="box-link"><button
                                    class="btn btn-info btn-create-cv">Tạo
                                    mới</button></a>
                        </div>
                        @if (!$cv->isEmpty())
                            <div class="container">
                                <div class="row justify-content-md-center">
                                    @foreach ($cv as $item)
                                        <div class="col-lg-6 card-body">
                                            <div class="hover hover-2 text-white rounded"><img
                                                    src="{{ asset($item->file_cv) }}" alt="">
                                                <div class="hover-overlay"></div>
                                                <div class="hover-2-content px-5 py-4">
                                                    <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
                                                            class="font-weight-light">dmM </span>Cu đức</h3>
                                                    <div class="hover-2-description ">
                                                        <h6 class="text-left px-3 py-4">Được apdate ngày dm cu đức</h6>
                                                        <a class="btn btn-search">
                                                            <span class="material-symbols-outlined">
                                                                ios_share
                                                            </span></a>
                                                        <a class="btn btn-search" style="margin-left: 5px"><span
                                                                class="material-symbols-outlined">
                                                                google_plus_reshare
                                                            </span></a>
                                                        <a class="btn btn-search" style="margin-left: 5px"><span
                                                                class="material-symbols-outlined">
                                                                file_download
                                                            </span></a>
                                                        <a href="{{ route('quan-ly-cv.destroy', $item->id) }}"
                                                            class="btn btn-search" style="margin-left: 5px"><span
                                                                class="material-symbols-outlined">
                                                                delete
                                                            </span></a>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="container">
                                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                    Bạn chưa có mẫu cv nào được tải lên hãy bấm vào nút tạo cv để có thể up cv của mình
                                    lên!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                            </div>
                            <test></test>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
