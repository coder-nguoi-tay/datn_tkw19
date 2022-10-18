@extends('master')
@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://i.pinimg.com/originals/0c/9d/0d/0c9d0de4a11b4ebf167f90d1ab2c2237.gif');">
            <span class="mask  bg-gradient-primary  opacity-1"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n8">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('dist/assets/img/bruce-mars.jpg') }}" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $admin->name }}
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            {{ $admin->role == 1 ? 'Admin' : 'Systum Admin ' }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-3">Thông tin tài khoản</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <form action="{{ route('admin.profile.update', $admin->id) }}" id="formProfile"
                                    role="form" class="text-start" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $admin->email }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        <span class="text-danger" id="errorEmail"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Mật khẩu cũ</label>
                                        <input type="password" name="password" class="form-control" value="">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        <span class="text-danger" id="errorpass"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Mật khẩu mới</label>
                                        <input type="password" name="password_new" class="form-control" value="">
                                        @if ($errors->has('password_new'))
                                            <span class="text-danger">{{ $errors->first('password_new') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nhập lại mật khẩu mới</label>
                                        <input type="password" name="password_new_en" class="form-control" value="">
                                        @if ($errors->has('password_new_en'))
                                            <span class="text-danger">{{ $errors->first('password_new_en') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-60 my-4 mb-2">Lưu
                                            lại</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4" style="width:50%">
                        <div class="card-body p-3">
                            <p class="text-sm">
                                Hi, I’m {{ $admin->name }}, Decisions: If you can’t decide, the answer is no. If two equally
                                difficult paths, choose the one more painful in the short term (pain avoidance is
                                creating an illusion of equality).
                            </p>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                        Name:</strong> &nbsp; {{ $admin->name }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong>
                                    &nbsp; (44) 123 1234 123</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                                    &nbsp; {{ $admin->email }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Location:</strong> &nbsp; USA</li>
                                <li class="list-group-item border-0 ps-0 pb-0">
                                    <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-twitter fa-lg"></i>
                                    </a>
                                    <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-instagram fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        </>

                    </div>

                </div>
            </div>
        </div>
        <br>
    @endsection
