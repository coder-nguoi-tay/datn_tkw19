@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
@endphp
@extends('employer.layout.index')
@section('content')
    <div class="dashboard-content-wrap">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        @if (!$cv->employerPayment->count())
                            <btn-payment-employer :message-confirm="{{ json_encode('Bạn có chắc muốn mua CV không ?') }}"
                                :delete-action="{{ json_encode(route('employer.changecAcount', $cv->id)) }}"
                                :count-getskill="{{ json_encode([
                                    'accPayment' => $accPayment,
                                    'total' => count(json_decode($cv->skill)) + count(json_decode($cv->project)),
                                ]) }}">
                            </btn-payment-employer>
                            {{-- @endif --}}
                        @endif
                        <button type="button" style="margin-top: -65px; margin-left: 1330px"
                            class="btn btn-info font-weight-medium color-text-2 mr-1 text-white" data-coreui-toggle="modal"
                            data-coreui-target="#exampleModal">({{ count($feedback_cv) }}) Feedback
                        </button>
                        @if ($cv->employerPayment->count())
                            @if ($employer->id == $cv->employerPayment[0]->employer_id)
                                <button type="button" style="margin-top: -114px; margin-left: 1470px"
                                    class="btn btn-info font-weight-medium color-text-2 mr-1 text-white"
                                    data-coreui-toggle="modal" data-coreui-target="#exampleModal1">Góp ý
                                </button>
                            @endif
                        @endif
                        <show-cv
                            :data="{{ json_encode([
                                'cv' => $cv,
                                'CheckUser' => $employer->id,
                            ]) }}">
                        </show-cv>
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <section>
                        <div class="container border mt-4">
                            <div class="row">
                                <h1>Tất cả nhận xét về hồ sơ</h1>
                                <span class="mb-2">Có tổng ({{ count($feedback_cv) }}) lượt
                                    Feedback</span>
                                @foreach ($feedback_cv as $item)
                                    <div class="border mb-3">
                                        <div class="col-sm-5 col-md-12 col-12 mt-4">
                                            <div class="comment text-justify float-left">
                                                <img src="{{ asset($item->employer->getCompany->logo) }}" alt=""
                                                    class="rounded-circle" width="40" height="40">
                                            </div>
                                            <h4 style="margin-left: 50px !important">
                                                {{ $item->employer->getCompany->name }}</h4>
                                        </div>
                                        <p>{{ $item->comment }}</p>
                                        <p>Mức độ hồ sơ: {{ $item->feedback->name }}</p>
                                        <div class="mb-2"> <span>{{ $item->created_at }}</span></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <section>
                        <div class="container border mt-4">
                            <div class="col-lg-12 col-md-5 col-sm-12 col-12 mt-4">
                                <form id="algin-form" action="{{ route('employer.feedback.cv', $cv->id) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <h4>Feedback của nhà tuyển dụng</h4>
                                        <label for="message">Góp ý để cải thiện</label>
                                        <textarea name="comment" id=""msg cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">chất lượng hồ sơ</label>
                                        <select name="feedback_id" id="" class="form-select">
                                            @foreach ($feedback as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="post"
                                            class="btn btn-info font-weight-medium color-text-2 mr-1 text-white">Gửi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
