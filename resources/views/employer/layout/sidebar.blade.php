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
                        Gói cước</a>
                </li>
                <li><a href="{{ route('employer.package.index') }}"><i class="la la-gear icon-element"></i>
                        Quản lý
                        CV</a>
                </li>
                <li><a href="{{ route('employer.package.index') }}"><i class="la la-gear icon-element"></i>
                        CV đã mua</a>
                </li>
                <li><a href="{{ route('employer.package.index') }}"><i class="la la-gear icon-element"></i>
                        Tìm kiếm
                        CV</a>
                </li>
                <li>
                    <a href="{{ route('employer.new.index') }}"><i class="la la-gear icon-element"></i> Đăng tin</a>
                </li>
                <li>
                    <div class="section-block margin-top-30px mb-3 p-2 ml-2"></div>
                </li>
                <li><a href="{{ route('employer.profile.index') }}"><i class="la la-user icon-element"></i>Thông tin cá
                        nhân</a>
                </li>
                <li><a href="/employer/business-license"><i class="la la-user icon-element"></i> Giấy phép kinh
                        Doanh</a>
                </li>
                <li><a href="/employer/pay-money"><i class="la la-user icon-element"></i> Nạp tiền</a>
                </li>
                <li><a href="/employer/profile-employer"><i class="la la-user icon-element"></i> Công ty</a>
                </li>
                <li><a href="/employer/change-password"><i class="la la-user icon-element"></i> Đổi mật khẩu</a>
                </li>
                <li><a href="{{ route('employer.logout') }}"><i class="la la-power-off icon-element"></i> Logout</a>
                </li>
            </ul>
        </div><!-- end side-menu-wrap -->
    </div>
</div><!-- end dashboard-sidebar -->
