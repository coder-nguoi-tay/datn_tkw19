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
                                <fieldset><button class="main-button" data-toggle="modal"
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
                    <li><a href="#">Lĩnh vực</a>
                        <ul class="nav-dropdown nav-submenu">
                            {{-- @foreach ($majors as $item)
                                <li><a href="tim-viec-lam?majors={{ $item->id }}">{{ $item->name }}</a>
                                </li>
                            @endforeach --}}
                        </ul>
                    </li>

                    <li><a href="{{ route('home.search') }}">Việc làm</a>
                    </li>
                    <li><a href="{{ route('company') }}">Công ty</a>
                    </li>

                    <li><a href="javascript:void(0);">Phỏng vấn</a>
                    </li>

                    <li><a href="javascript:void(0);">Hồ sơ</a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="browse-employers.html">Quản lý hồ sơ</a></li>
                            <li><a href="browse-employers-list.html">Quản lý cv</a></li>
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
