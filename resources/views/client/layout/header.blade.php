@php
    use App\Models\Majors;
    $majors = Majors::all();
@endphp
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo">
                    <a class="d-flex" href="{{ route('index') }}">
                        <img alt="ITWORK" src="../../wp-content/themes/jobbox/assets/imgs/template/logoIT.png">
                    </a>
                </div>
            </div>
            <div class="header-nav">
                <nav class="primary-menu-container nav-main-menu">
                    <ul id="primary-menu-list" class="menu-wrapper main-menu list-unstyled mb-0">
                        <li id="menu-item-145"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-145 ">
                            <a href="{{ route('index') }}">Việc làm</a>

                        </li>
                        <li id="menu-item-134"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-134 has-children">
                            <a href="#">Lĩnh vực</a>
                            <ul class="dropdown-menu-item">
                                @foreach ($majors as $item)
                                    <li><a href="{{ route('searchMajors', $item->id) }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li id="menu-item-139"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-139 ">
                            <a href="{{ route('CongTy') }}">Công ty</a>

                        </li>
                        <li id="menu-item-96"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-96">
                            <a href="{{ route('blog') }}">Bài viết</a>
                        </li>
                        <li id="menu-item-96"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-96">
                            <a href="/faqs">Câu hỏi thường gặp</a>
                        </li>
                    </ul>
                </nav>
                <div class="burger-icon burger-icon-white" data-bs-toggle="offcanvas" href="#offcanvasMenu"
                    role="button" aria-controls="offcanvasMenu">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>

            @if (!Auth::guard('user')->check())
                <div class="header-right">
                    <div class="block-signin d-flex align-items-center gap-2">
                        <a class="text-link-bd-btom hover-up" href="{{ route('register') }}">Đăng ký</a>
                        <a class="btn btn-default btn-shadow ml-30 hover-up" href="{{ route('login.index') }}">Đăng
                            nhập</a>
                        <a href="{{ route('register.employer') }}" class="btn btn-default btn-shadow ml-30 hover-up">
                            Đăng tuyển & tìm hồ sơ
                        </a>
                    </div>
                </div>
            @else
                <div class="btn-group">
                    <button type="button" style="border-radius: 20px;padding: 4px 8px 4px 0"
                        class="btn btn-default btn-shadow ml-30 hover-up dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset(Auth::guard('user')->user()->images) }}"
                            style="width: 35px;height: 35px;margin : 0 20px 0 4px" class="rounded-circle img-fluid">
                        <p class="d-inline text-white">{{ Auth::guard('user')->user()->name }}</p>
                    </button>
                    <ul class="dropdown-menu">

                        <li class="{{ request()->is('*profile*') ? 'active' : '' }}"> <a class="dropdown-item"
                                href="{{ route('profile.index') }} ">Thông tin cá nhân</a></li>
                        <li class="{{ request()->is('*goi-y-viec-lam*') ? 'active' : '' }}"> <a class="dropdown-item"
                                href="{{ route('goi-y-viec-lam.index') }}">Cài đặt gợi ý việc
                                làm</a></li>
                        <li> <a class="dropdown-item" href="{{ route('user.favourite') }}">Công việc đã yêu thích</a>
                        </li>
                        <li class="{{ request()->is('*xem-ho-so*') ? 'active' : '' }}"> <a class="dropdown-item"
                                href="{{ route('xem-ho-so.index') }}">Những công
                                việc đã nộp</a></li>
                        <li class="{{ request()->is('*change-password*') ? 'active' : '' }}"> <a class="dropdown-item"
                                href="{{ route('user.changepass') }}">Đổi mật khẩu</a></li>
                        <li> <a class="dropdown-item" href="{{ route('user.logout') }}">Đăng xuất</a></li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar offcanvas offcanvas-end" tabindex="-1"
    id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header justify-content-end">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="mobile-header-wrapper-inner offcanvas-body">
        <div class="mobile-header-content-area">
            <div class="perfect-scroll">
                <div class="mobile-search mobile-header-border mb-30">
                    <form role="search" method="get" action="https://jthemes.com/themes/wp/jobbox/">
                        <input type="search" placeholder="Search.." value="" name="s" /><i
                            class="fi-rr-search"></i>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start-->
                    <nav class="primary-menu-container">
                        <ul id="primary-mobile-menu-list" class="menu-wrapper mobile-menu font-heading list-unstyled">
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-93 has-children">
                                <a href="{{ route('index') }}" class="active">Trang chủ</a>

                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-145 ">
                                <a href="{{ route('home.search') }}">Việc làm</a>

                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-134 has-children">
                                <a href="#">Lĩnh vực</a>
                                <ul class="dropdown-menu-item">
                                    @foreach ($majors as $item)
                                        <li><a href="{{ route('searchMajors', $item->id) }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-139 has-children">
                                <a href="../candidates/index.html">Candidates</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
                                        <a href="../candidates/index.html">Candidates</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-ctrljm_candidate menu-item-141">
                                        <a href="../candidate/jacob-jones/index.html">Candidate Details</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-ctrljm_candidate menu-item-1445">
                                        <a href="../candidate/cody-fisher/index.html">Candidate with Video</a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-96 has-children">
                                <a href="{{ route('blog') }}">Blog</a>
                                {{-- <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-851">
                                        <a href="">Blog Grid</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-850">
                                        <a href="../how-to-write-an-application-letter-with-examples-2/index.html">Blog
                                            Single</a>
                                    </li>
                                </ul> --}}
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-123 has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124">
                                        <a href="../about-us/index.html">About Us</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                        <a href="../contact-us/index.html">Contact</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-131">
                                        <a href="../pricing-plan/index.html">Pricing Plan</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1410">
                                        <a href="../shop/index.html">Shop Page</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="mobile-account">
                    <h6 class="mb-10">Tài khoản của bạn</h6>
                    <div class="header-right">
                        <div class="block-signin d-flex align-items-center gap-2">
                            <a class="text-link-bd-btom hover-up" href="#controlJobManagerRegister"
                                data-bs-toggle="modal">Đăng ký</a>
                            <a class="btn btn-default btn-shadow ml-30 hover-up" href="#controlJobManagerLogin"
                                data-bs-toggle="modal">Đăng nhập</a>

                        </div>
                    </div>
                </div>
                <div class="site-copyright pt-2 border-top">
                    Copyright 2023 &copy; ITWORK.
                </div>
            </div>
        </div>
    </div>
</div>
