@extends('client.layout.index')
@section('client')
    <section class="bg-light">
        <div class="container">
            <div class="row">

                <!--  -->

                <!-- Item Wrap Start -->
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 bg-white rounded py-2 mb-4">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0 ft-medium fs-sm">302 New Jobs Found</h6>
                                </div>

                                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                    <div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
                                        <div class="single_fitres mr-2 br-right">
                                            <select class="custom-select simple">
                                                <option value="1" selected="">Default Sorting</option>
                                                <option value="2">Recent jobs</option>
                                                <option value="3">Featured jobs</option>
                                                <option value="4">Trending Jobs</option>
                                                <option value="5">Premium jobs</option>
                                            </select>
                                        </div>
                                        <div class="single_fitres">
                                            <a href="browse-resumes.html" class="simple-button active theme-cl mr-1"><i
                                                    class="ti-layout-grid2"></i></a>
                                            <a href="browse-resumes-list.html" class="simple-button"><i
                                                    class="ti-view-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="row align-items-center">

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left"><button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                </div>
                                <div class="job_grid_thumbmb-2 text-center pt-4 px-3 mb-2">
                                    <a href="candidate-detail.html"
                                        class="d-inline-flex text-center m-auto circle border p-2"><img
                                            src="assets/img/t-8.png" class="img-fluid circle" width="70"
                                            alt="" /></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="candidate-detail.html"
                                            class="text-dark fs-md">John K. Surber</a></h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium bg-danger rounded text-light">+3 More</span></li>
                                    </ul>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <div class="df-1 text-dark ft-medium col-12 mt-3"><a href="candidate-detail.html"
                                            class="btn gray apply-btn rounded full-width">View Candidate<i
                                                class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left"><button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                </div>
                                <div class="job_grid_thumbmb-2 text-center pt-4 px-3 mb-2">
                                    <a href="candidate-detail.html"
                                        class="d-inline-flex text-center m-auto circle border p-2"><img
                                            src="assets/img/t-9.png" class="img-fluid circle" width="70"
                                            alt="" /></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="candidate-detail.html"
                                            class="text-dark fs-md">John K. Surber</a></h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium bg-danger rounded text-light">+3 More</span></li>
                                    </ul>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <div class="df-1 text-dark ft-medium col-12 mt-3"><a href="candidate-detail.html"
                                            class="btn gray apply-btn rounded full-width">View Candidate<i
                                                class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left"><button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                </div>
                                <div class="job_grid_thumbmb-2 text-center pt-4 px-3 mb-2">
                                    <a href="candidate-detail.html"
                                        class="d-inline-flex text-center m-auto circle border p-2"><img
                                            src="assets/img/t-7.png" class="img-fluid circle" width="70"
                                            alt="" /></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="candidate-detail.html"
                                            class="text-dark fs-md">Loretta E. Reyes</a></h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium bg-danger rounded text-light">+3 More</span></li>
                                    </ul>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <div class="df-1 text-dark ft-medium col-12 mt-3"><a href="candidate-detail.html"
                                            class="btn gray apply-btn rounded full-width">View Candidate<i
                                                class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left"><button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                </div>
                                <div class="job_grid_thumbmb-2 text-center pt-4 px-3 mb-2">
                                    <a href="candidate-detail.html"
                                        class="d-inline-flex text-center m-auto circle border p-2"><img
                                            src="assets/img/t-6.png" class="img-fluid circle" width="70"
                                            alt="" /></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="candidate-detail.html"
                                            class="text-dark fs-md">Adam B. Johnston</a></h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium bg-danger rounded text-light">+3 More</span></li>
                                    </ul>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <div class="df-1 text-dark ft-medium col-12 mt-3"><a href="candidate-detail.html"
                                            class="btn gray apply-btn rounded full-width">View Candidate<i
                                                class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left"><button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                </div>
                                <div class="job_grid_thumbmb-2 text-center pt-4 px-3 mb-2">
                                    <a href="candidate-detail.html"
                                        class="d-inline-flex text-center m-auto circle border p-2"><img
                                            src="assets/img/t-5.png" class="img-fluid circle" width="70"
                                            alt="" /></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="candidate-detail.html"
                                            class="text-dark fs-md">Jessica G. Leininger</a></h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium bg-danger rounded text-light">+3 More</span></li>
                                    </ul>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <div class="df-1 text-dark ft-medium col-12 mt-3"><a href="candidate-detail.html"
                                            class="btn gray apply-btn rounded full-width">View Candidate<i
                                                class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left"><button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                </div>
                                <div class="job_grid_thumbmb-2 text-center pt-4 px-3 mb-2">
                                    <a href="candidate-detail.html"
                                        class="d-inline-flex text-center m-auto circle border p-2"><img
                                            src="assets/img/t-4.png" class="img-fluid circle" width="70"
                                            alt="" /></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="candidate-detail.html"
                                            class="text-dark fs-md">Charles T. Gerena</a></h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium bg-danger rounded text-light">+3 More</span></li>
                                    </ul>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <div class="df-1 text-dark ft-medium col-12 mt-3"><a href="candidate-detail.html"
                                            class="btn gray apply-btn rounded full-width">View Candidate<i
                                                class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left"><button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                </div>
                                <div class="job_grid_thumbmb-2 text-center pt-4 px-3 mb-2">
                                    <a href="candidate-detail.html"
                                        class="d-inline-flex text-center m-auto circle border p-2"><img
                                            src="assets/img/t-3.png" class="img-fluid circle" width="70"
                                            alt="" /></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="candidate-detail.html"
                                            class="text-dark fs-md">Julie D. Morales</a></h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium bg-danger rounded text-light">+3 More</span></li>
                                    </ul>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <div class="df-1 text-dark ft-medium col-12 mt-3"><a href="candidate-detail.html"
                                            class="btn gray apply-btn rounded full-width">View Candidate<i
                                                class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left"><button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                </div>
                                <div class="job_grid_thumbmb-2 text-center pt-4 px-3 mb-2">
                                    <a href="candidate-detail.html"
                                        class="d-inline-flex text-center m-auto circle border p-2"><img
                                            src="assets/img/t-2.png" class="img-fluid circle" width="70"
                                            alt="" /></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="candidate-detail.html"
                                            class="text-dark fs-md">Samantha D. Hebert</a></h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium bg-danger rounded text-light">+3 More</span></li>
                                    </ul>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <div class="df-1 text-dark ft-medium col-12 mt-3"><a href="candidate-detail.html"
                                            class="btn gray apply-btn rounded full-width">View Candidate<i
                                                class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left"><button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                </div>
                                <div class="job_grid_thumbmb-2 text-center pt-4 px-3 mb-2">
                                    <a href="candidate-detail.html"
                                        class="d-inline-flex text-center m-auto circle border p-2"><img
                                            src="assets/img/t-1.png" class="img-fluid circle" width="70"
                                            alt="" /></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="candidate-detail.html"
                                            class="text-dark fs-md">Patricia B. North</a></h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium bg-danger rounded text-light">+3 More</span></li>
                                    </ul>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <div class="df-1 text-dark ft-medium col-12 mt-3"><a href="candidate-detail.html"
                                            class="btn gray apply-btn rounded full-width">View Candidate<i
                                                class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- row -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span class="fas fa-arrow-circle-right"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">18</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span class="fas fa-arrow-circle-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
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
