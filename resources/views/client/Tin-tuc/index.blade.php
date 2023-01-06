@extends('client.layout.index')
@section('client')
    <section>

        <div class="container">

            <!-- row Start -->
            <div class="row">

                <!-- Blog Detail -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="article_detail_wrapss single_article_wrap format-standard">
                        <div class="article_body_wrap">

                            <div class="article_featured_image">
                                <img class="img-fluid" src="{{ $tinTuc->new_image }}" alt="">
                            </div>

                            <div class="article_top_info">
                                <ul class="article_middle_info">
                                    <li><a href="#"><span class="icons"><i class="ti-user"></i></span>ADMIN</a></li>
                                    <li><a href="#"><span class="icons"><i class="ti-comment-alt"></i></span>45
                                            Comments</a></li>
                                </ul>
                            </div>
                            <h2 class="post-title">{{ $tinTuc->title }}</h2>
                            <p>{{ $tinTuc->describe }}</p>
                            <blockquote>
                                <span class="icon"><i class="fas fa-quote-left"></i></span>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tem
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris
                                    nisi ut aliquip ex ea commodo onsequat.</p>
                                <h5 class="name">- Rosalina Pong</h5>
                            </blockquote>


                        </div>
                    </div>

                    <!-- Author Detail -->
                    <div class="article_detail_wrapss single_article_wrap format-standard">

                        <div class="article_posts_thumb">
                            <span class="img"><img class="img-fluid" src="{{ $tinTuc->new_image }}"
                                    alt=""></span>
                            <h3 class="pa-name">Rosalina William</h3>
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <p class="pa-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                        </div>

                    </div>





                </div>




            </div>


        </div>

    </section>
@endsection
