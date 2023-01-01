@php
    use Carbon\Carbon;
@endphp
<div class="header header-light dark-text">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{ route('index') }}">
                    <img src="assets/img/logo.png" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        @if (!Auth::guard('user')->check())
                            <li>
                                <fieldset><button class="main-button btn border" data-toggle="modal"
                                        data-target="#exampleModallogin">
                                        <i class="lni lni-user"></i>Đăng
                                        nhập</button></fieldset>
                            </li>
                            <li>
                                <a href="dashboard-post-job.html" class="main-button">
                                    <span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Đăng tuyển & Tìm
                                        hồ sơ</span>
                                </a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::guard('user')->user()->name }}
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('profile.index') }} ">Profile</a>
                                    <a class="dropdown-item" href="#">Quản lý CV</a>
                                    <a class="dropdown-item" href="#">Bài tuyển dụng đã yêu thích</a>
                                    <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    <li><a href="#">Home</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="home-2.html">Home 2</a></li>
                            <li><a href="home-3.html">Home 3</a></li>
                            <li><a href="home-4.html">Home 4</a></li>
                            <li><a href="home-5.html">Home 5</a></li>
                            <li><a href="home-6.html">Home 6</a></li>
                            <li><a href="home-7.html">Home 7</a></li>
                            <li><a href="home-8.html">Home 8</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);">Find Job</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="job-search-v1.html">Job Search V1</a></li>
                            <li><a href="job-search-v2.html">Job Search V2</a></li>
                            <li><a href="job-search-v3.html">Job Search V3</a></li>
                            <li><a href="job-list-v1.html">Job Search V4</a></li>
                            <li><a href="job-list-v2.html">Job Search V5</a></li>
                            <li><a href="job-list-v3.html">Job Search V6</a></li>
                            <li><a href="javascript:void(0);">Map Styles</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="job-half-map.html">Search On Map V1</a></li>
                                    <li><a href="job-half-map-v2.html">Search On Map V2</a></li>
                                    <li><a href="job-search-map-v1.html">Search On Map V3</a></li>
                                    <li><a href="job-search-map-v2.html">Search On Map V4</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);">Single Job</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="single-job-1.html">Single Job V1</a></li>
                                    <li><a href="single-job-2.html">Single Job V2</a></li>
                                    <li><a href="single-job-3.html">Single Job V3</a></li>
                                    <li><a href="single-job-4.html">Single Job V4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);">Candidates</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="browse-jobs.html">Browse Jobs</a></li>
                            <li><a href="browse-resumes.html">Browse Resumes</a></li>
                            <li><a href="browse-category.html">Browse Categories</a></li>
                            <li><a href="candidate-detail.html">Candidate Detail</a></li>
                            <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);">Employers</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="browse-employers.html">Browse Employers V1</a></li>
                            <li><a href="browse-employers-list.html">Browse Employers V2</a></li>
                            <li><a href="employer-detail.html">Employer Detail</a></li>
                            <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);">Pages</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="blog.html">Blog Style</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="docs.html">Docs</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav-menu nav-menu-social align-to-right">

                    @if (!Auth::guard('user')->check())
                        <li>
                            <fieldset>
                                <button style="background-color: #a4aec0; color: #fff" class="main-button btn border"
                                    data-toggle="modal" data-target="#exampleModallogin">
                                    <i class="lni lni-user"></i>Đăng
                                    nhập</button>
                            </fieldset>
                        </li>

                        <li class="add-listing" style="background-color: rgb(37, 191, 37)">
                            <a href="{{ route('register.employer') }}">
                                Đăng tuyển & tìm hồ sơ
                            </a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                {{ Auth::guard('user')->user()->name }}
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('profile.index') }} ">Profile</a>
                                <a class="dropdown-item" href="#">Quản lý CV</a>
                                <a class="dropdown-item" href="#">Bài tuyển dụng đã yêu thích</a>
                                <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
