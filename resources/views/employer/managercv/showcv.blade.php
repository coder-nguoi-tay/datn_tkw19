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
                                    <label class=" px-md-0 me-md-3">{{ $cv->user_name }}</label>
                                    <ul class="header-nav ms-3 d-flex">
                                        <button class="nav-link py-0 btn-next-step" data-coreui-toggle="modal"
                                            data-coreui-target="#exampleModalSeacrhSpeed">
                                            Mở khóa
                                        </button>
                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
