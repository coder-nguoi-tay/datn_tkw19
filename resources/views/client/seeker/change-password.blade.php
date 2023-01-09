@extends('client.layout.seeker')
@section('content')
    <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class="_dashboard__header_flex">
                            <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>Đổi mật khẩu
                            </h4>
                            <change-password
                                :data="{{ json_encode([
                                    'urlStore' => route('user.changePasswordSucsses'),
                                ]) }}">
                            </change-password>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
