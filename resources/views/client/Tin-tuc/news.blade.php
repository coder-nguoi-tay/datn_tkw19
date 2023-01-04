@extends('client.layout.index')
@section('client')
    <div class="bg-title py-5" data-overlay="0">
        <div class="ht-30"></div>
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Giới thiệu về các công ty nổi bật</h1>

                </div>
            </div>
        </div>
        <div class="ht-30"></div>
    </div>
    <div class="featured-companies p-5">
        <div class="company-header text-center">
            <h2 class="title">DANH SÁCH CÁC CÔNG TY NỔI BẬT</h2>
        </div>
        <div class="container p-3">
            <div class="row">
                @foreach ($company as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="box-company item-hover">
                            <div class="company-banner">
                                <a href="{{ route('detailNew', $item->id) }}">
                                    <div class="cover-wraper">
                                        <img src="{{ $item->logo }}" alt="{{ $item->name }}" class="img-fluid f-5">
                                    </div>
                                </a>

                            </div>
                            <div class="company-info p-2">
                                <h3>
                                    <a href="#" class="company-name" target="_blank">{{ $item->name }}</a>
                                </h3>
                                <div class="company-description maxText">
                                    <p>{!! $item->desceibe !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach







            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
@endsection
