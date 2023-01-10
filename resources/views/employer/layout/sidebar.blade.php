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
                            class="fas fa-chart-line icon-element"></i>
                        Thống kê</a></li>

                <li><a href="{{ route('employer.package.index') }}"><i class="fas fa-box-open icon-element"></i>
                        Gói cước</a>
                </li>
                <li><a href="{{ route('employer.quan-ly-cv.index') }}"><i class="fas fa-file icon-element"></i>
                        Hồ sơ đã nhận</a>
                </li>
                <li><a href="{{ route('employer.cv-da-mua.index') }}"><i
                            class="fas fa-shopping-basket icon-element"></i>
                        Hồ sơ đã mua</a>
                </li>
                <li><a href="{{ route('employer.tim-kiem-cv.index') }}"><i class="fas fa-search icon-element"></i></i>
                        Tìm kiếm
                        hồ sơ</a>
                </li>
                {{-- <li>
                    <a href="{{ route('employer.quan-ly-cv.index') }}"><i class="la la-gear icon-element"></i> Quản lý
                        CV
                </li>
                <li>
                    <a href="{{ route('employer.cv-da-mua.index') }}"><i class="la la-gear icon-element"></i> CV đã mua
                </li> --}}
                {{-- <li>
                    <a href="{{ route('employer.tim-kiem-cv.index') }}"><i class="la la-gear icon-element"></i> Tìm kiếm
                        CV
                </li> --}}
                <li>
                    <a href="{{ route('employer.new.index') }}"><i class="fas fa-upload icon-element"></i> Đăng tin</a>

                </li>
                <li>
                    <div class="section-block margin-top-30px ml-2"></div>
                </li>
                <li><a href="{{ route('employer.profile.index') }}"><i class="fas fa-user icon-element"></i>Thông tin cá
                        nhân</a>
                </li>
                <li><a href="/employer/business-license"><i class="fas fa-file icon-element"></i> Giấy phép kinh
                        Doanh</a>
                </li>
                <li><a href="/employer/pay-money"><i class="fas fa-money-check-alt icon-element"></i></i> Nạp tiền</a>
                </li>
                <li><a href="{{ route('employer.profile.history') }}"><i class="fas fa-history  icon-element"></i>Lịch
                        sử
                        giao dịch</a>
                </li>
                <li><a href="/employer/profile-employer"><i class="fas fa-building icon-element"></i> Công ty</a>
                </li>
                <li><a href="/employer/change-password"><i class="fas fa-lock icon-element"></i> Đổi mật khẩu</a>
                </li>
                <li><a href="{{ route('employer.logout') }}"><i class="la la-power-off icon-element"></i> Logout</a>
                </li>
            </ul>
        </div><!-- end side-menu-wrap -->
    </div>
</div><!-- end dashboard-sidebar -->
