@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <header class="header header-sticky">
                                <div class="container-fluid">
                                    <label class="">Đổi mật khẩu</label>
                                </div>
                            </header>
                        </div>
                        <change-password-employer
                            :data="{{ json_encode([
                                'urlStore' => route('employer.employer.changePasswordSucsses'),
                            ]) }}">
                        </change-password-employer>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
