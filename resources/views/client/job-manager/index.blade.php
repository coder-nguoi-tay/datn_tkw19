@extends('client.layout.index')
@section('client')
    <div class=" py-5">
        <div class="ht-30"></div>
        <div class="container" style="background: white">
            <section class="section-box-2">
                <div class="banner-hero banner-single banner-single-bg" data-settings-id="banner-job">
                    <div class="block-banner text-center">
                        <h3 class="wow animate__ animate__fadeInUp animated"
                            style="visibility: visible; animation-name: fadeInUp;"><span
                                class="color-brand-2">{{ count($job) }}
                                Công việc</span> Tìm thấy</h3>
                    </div>
                </div>
            </section>

        </div>
        <div class="ht-30"></div>
    </div>
    <job-manager :data="{{ json_encode([
        'job' => $job,
        'total' => $total,
    ]) }}">
    </job-manager>
@endsection
