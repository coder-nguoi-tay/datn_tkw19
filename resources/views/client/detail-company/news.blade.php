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
    <section class="middle">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Latest News</h2>
                        <h3 class="ft-bold pt-3">New Updates</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($company as $item)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 hover-div1">
                        <a href="{{ route('detail.company', $item->id) }}">
                            <div class="_blog_wrap">
                                <div class="_blog_thumb mb-2 p-2">
                                    <a href="{{ route('detail.company', $item->id) }}" class="d-block"><img
                                            src="{{ $item->logo }}" class="img-fluid rounded" alt="" /></a>
                                </div>
                                <div class="_blog_caption">
                                    <span class="text-muted"> {{ $item->created_at->format('d-m-Y') }}</span>
                                    <h5 class="bl_title lh-1 maxTextCompany"><a
                                            href="{{ route('detail.company', $item->id) }}">{{ $item->name }}</a></h5>

                                    <div class="maxText">
                                        <p>{!! $item->desceibe !!}</p>
                                    </div>
                                    <a href="{{ route('detail.company', $item->id) }}" class="text-dark fs-sm">Continue
                                        Reading..</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>



        </div>
    </section>
@endsection
