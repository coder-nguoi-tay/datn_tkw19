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
                                Công việc</span> Phù hợp</h3>
                        <div class="font-sm color-text-paragraph-2 mt-10 wow animate__ animate__fadeInUp animated"
                            data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Lorem
                            ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni,<br
                                class="d-none d-xl-block">atque delectus molestias quis</div>

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
