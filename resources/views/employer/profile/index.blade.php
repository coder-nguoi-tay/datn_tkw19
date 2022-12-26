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
                            <header class="header header-sticky">
                                <div class="container-fluid">
                                    <label class=" px-md-0 me-md-3">Profile</label>
                                    <ul class="header-nav ms-3 d-flex">
                                        <form action="{{ route('employer.quan-ly-cv.index') }}" class="d-flex"
                                            method="get">
                                            <input name="free_word" class="custom-input" placeholder="Tìm Kiếm...."
                                                value="" autocomplete="off" id="free_word">
                                            <button class="nav-link py-0 btn-next-step"
                                                href="{{ route('employer.quan-ly-cv.create') }}">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                        <a class="nav-link py-0 btn-next-step"
                                            href="{{ route('employer.quan-ly-cv.create') }}">
                                            Thêm tin
                                        </a>
                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">
                            <update-profile-employer
                                :data="{{ json_encode([
                                    'employer' => $employer,
                                    'email' => Auth::guard('user')->user()->email,
                                    'urlStore' => route('employer.new.store'),
                                ]) }}">
                            </update-profile-employer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
