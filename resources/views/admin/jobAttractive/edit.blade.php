@extends('master')
@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">
                                @if (isset($title))
                                    <span>{{ $title }}</span>
                                @endif
                            </h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach

                            </div>
                        @endif
                       <edit-job-attractive
                       :data="{{ json_encode([
                        'jobattractive' =>$jobattractive,
                        'leverpackage' =>$leverpackage,
                        'urlUpdate' => route('admin.jobAttractive.update',$jobattractive->id),
                        'urlBack' => route('admin.jobAttractive.index'),
                    ]) }}"></edit-job-attractive>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
