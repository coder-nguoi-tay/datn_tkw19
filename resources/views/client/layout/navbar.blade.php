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
                <li class="page-active"><a href="{{ route('user.favourite') }}"><i
                            class="la la-dashboard icon-element"></i>
                        Công việc đã yêu thích</a></li>
                <li>
                    <a href="{{ route('quan-ly-cv.index') }}"><i class="la la-gear icon-element"></i> Quản lý
                        CV</a>
                </li>
                <li>
                    <a href="{{ route('xem-ho-so.index') }}"><i class="la la-gear icon-element"></i> Xem hồ sơ</a>
                </li>
                <li>
                    <a href="#"><i class="la la-briefcase icon-element"></i> Tài khoản</a>
                </li>
                <li>
                    <a href="{{ route('profile.index') }}"><i class="la la-briefcase icon-element"></i> Profile</a>
                </li>
                <li>
                    <a href="{{ route('user.changepass') }}"><i class="la la-briefcase icon-element"></i> Đổi mật
                        khẩu</a>
                </li>
                <li><a href="{{ route('user.logout') }}"><i class="la la-power-off icon-element"></i> Logout</a>
                </li>
            </ul>
        </div><!-- end side-menu-wrap -->
    </div>
</div><!-- end dashboard-sidebar -->
