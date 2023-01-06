<div class="sidebar sidebar-dark sidebar-fixed sidebar-lg-show" id="sidebar">
    <ul class="sidebar-nav dashboard-nav" data-coreui="navigation" data-simplebar="init">
        <div class="dashboard-inner">
            <ul data-submenu-title="{{ Auth::guard('user')->user()->name }}">
                <li>
                    <a href="{{ route('employer.index') }}"><i class="fa fa-area-chart" aria-hidden="true"></i>Thông
                        Kê</a>
                </li>
                <li>
                    <a href="{{ route('employer.new.index') }}"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Quản
                        lý tin</a>
                </li>
                <li>
                    <a href="{{ route('employer.package.index') }}"><i class="fa fa-tasks" aria-hidden="true"></i>Quản
                        lý gói
                        cước</a>
                </li>
                <li>
                    <a href="{{ route('employer.quan-ly-cv.index') }}">
                        <i class="fa fa-address-card" aria-hidden="true"></i>Quản lý
                        CV
                    </a>
                </li>
                <li>
                    <a href="{{ route('employer.tim-kiem-cv.index') }}">
                        <i class="fa fa-address-card" aria-hidden="true"></i>Tìm Kiếm CV
                    </a>
                </li>
                <li>
                    <a href="{{ route('employer.cv-da-mua.index') }}">
                        <i class="fa fa-address-card" aria-hidden="true"></i>CV Đã Mua
                    </a>
                </li>
            </ul>
            <ul data-submenu-title="Tài khoản">
                <li><a href="{{ route('employer.profile.index') }}"><i class="fa fa-user-circle"
                            aria-hidden="true"></i>My Profile </a>
                </li>
                <li><a href="/employer/pay-money"><i class="fa fa-user-circle" aria-hidden="true"></i>Nạp tiền</a>
                </li>
                <li><a href="/employer/change-password"><i class="fa fa-cogs" aria-hidden="true"></i>Đổi mật khẩu</a>
                </li>
                <li><a href="{{ route('employer.logout') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                            <path fill-rule="evenodd"
                                d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                        </svg>Logout</a></li>
            </ul>
        </div>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
{{-- <div class="sidebar sidebar-dark sidebar-fixed sidebar-lg-show" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <img class="sidebar-brand-full" src="{{ url('images/logo.png') }}" width="55" height="46">
        <img class="sidebar-brand-narrow" src="{{ url('images/logo.png') }}" width="55" height="46">
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset">
                    <div class="simplebar-content-wrapper">
                        <div class="simplebar-content">
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="nav-icon fa fa-home" aria-hidden="true"></i>
                                    Admin
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset">
                    <div class="simplebar-content-wrapper">
                        <div class="simplebar-content">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.new.index') }}">
                                    <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                                    Tin tuyển dụng
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset">
                    <div class="simplebar-content-wrapper">
                        <div class="simplebar-content">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.package.index') }}">
                                    <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                                    Gói cước
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset">
                    <div class="simplebar-content-wrapper">
                        <div class="simplebar-content">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.quan-ly-cv.index') }}">
                                    <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                                    Quản lý cv
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div> --}}
