@extends('client.layout.seeker')
@section('seeker')
    <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class=" _dashboard_cv">
                            <div class="box-title box-cv">
                                <h2 class="box-name"><span style="margin-left: 5px !important">Thêm Cv</span></h2>
                            </div>
                            <user-uploadcv
                                :data="{{ json_encode([
                                    'urlStore' => route('quan-ly-cv.store'),
                                    'urlBack' => route('quan-ly-cv.index'),
                                ]) }}">
                            </user-uploadcv>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
