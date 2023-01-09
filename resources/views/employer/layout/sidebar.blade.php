<div class="dashboard-sidebar">
    <div class="dashboard-nav-trigger">
        <div class="dashboard-nav-trigger-btn">
            <i class="la la-bars"></i> {{ Auth::guard('user')->user()->name }}
        </div>
    </div>
    <div class="dashboard-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li class="page-active"><a href="{{ route('employer.index') }}"><i
                            class="la la-dashboard icon-element"></i>
                        Thống kê</a></li>

                <li><a href="{{ route('employer.package.index') }}"><i class="la la-bookmark icon-element"></i>
                        Gói cước</a></li>
                <li>
                    <a href="{{ route('employer.quan-ly-cv.index') }}"><i class="la la-gear icon-element"></i> Quản lý
                        CV
                        <span class="la la-caret-down btn-toggle"></span></a>
                    <ul class="dropdown-menu-item p-2">
                        <li><a href="{{ route('employer.quan-ly-cv.index') }}">CV đã nhận</a></li>
                        <li><a href="{{ route('employer.cv-da-mua.index') }}">CV đã mua</a></li>
                        <li><a href="{{ route('employer.tim-kiem-cv.index') }}">Tìm kiếm CV</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('employer.new.index') }}"><i class="la la-gear icon-element"></i> Đăng tin
                        <span class="la la-caret-down btn-toggle"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="{{ route('employer.new.create') }}">Thêm tin</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="la la-briefcase icon-element"></i> Tài khoản <span
                            class="la la-caret-down btn-toggle"></span></a>
                    <ul class="dropdown-menu-item p-2">
                        <li><a href="{{ route('employer.profile.index') }}">Profile</a></li>
                        <li><a href="/employer/pay-money">nạp tiền</a></li>
                        <li><a href="/employer/change-password">đổi mật khẩu</a></li>
                    </ul>
                </li>
                <li>
                    <div class="section-block margin-top-30px mb-3"></div>
                </li>
                <li><a href=""><i class="la la-user icon-element"></i> View
                        Profile</a>
                </li>
                <li><a href="{{ route('employer.logout') }}"><i class="la la-power-off icon-element"></i> Logout</a>
                </li>
            </ul>
        </div><!-- end side-menu-wrap -->
    </div>
</div><!-- end dashboard-sidebar -->
