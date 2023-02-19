@extends('client.layout.index')
@section('client')
    <main class="main">

        <section class="section-box">
            <div class="breacrumb-cover " style="">
                <div class="container">
                    <div class="row d-grid d-md-flex gap-30 gap-lg-0 align-items-end">
                        <div class="col-lg-6">
                            <h2 class="mb-0">Tin tức</h2>
                            <div class="banner-subtitle font-lg color-text-paragraph-2 mt-10">Cập nhật những thông tin mới nhất đến với người dùng
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <ul class="breadcrumbs list-unstyled">
                                <!-- Breadcrumb NavXT 7.1.0 -->
                                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item"
                                            typeof="WebPage" title="Go to Jobbox."
                                            href="https://jthemes.com/themes/wp/jobbox" class="home home-icon"><span
                                                property="name">ITWork</span></a>
                                        <meta property="position" content="1">
                                    </span></li>
                                <li class="post-root post post-post current-item"><span property="itemListElement"
                                        typeof="ListItem"><span property="name"
                                            class="post-root post post-post current-item">Tin tức</span>
                                        <meta property="url" content="index.html">
                                        <meta property="position" content="2">
                                    </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="trending-news section-box mt-50">
            <div class="container">
                <div class="row">

                    @foreach ($news as $news)
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-5">
                                <div class="card-grid-5 hover-up"
                                    style="background-image: url('{{ $news->new_image }}'); background-position:center center; background-repeat:no-repeat">
                                    <a href="{{ route('detail.blog', $news->id) }}">
                                        <div class="box-cover-img">
                                            <div class="content-bottom">
                                                <h5 class="color-white mb-20">{{ $news->title }}</h5>
                                                
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
