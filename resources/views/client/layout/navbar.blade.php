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

                <li class="{{ request()->is('*favourite*') ? 'active' : '' }}"><a href="{{ route('user.favourite') }}"><i
                            class="fas fa-heart icon-element"></i>
                        Công việc đã yêu thích</a></li>
                <li class="{{ request()->is('*xem-ho-so*') ? 'active' : '' }}">
                    <a href="{{ route('xem-ho-so.index') }}"><i class="fas fa-address-card icon-element"></i>Những công
                        việc đã nộp</a>
                </li>
                <li class="{{ request()->is('*company*') ? 'active' : '' }}">
                    <a href="{{ route('xem-ho-so.index') }}"><i class="fas fa-bookmark icon-element"></i>Công ty đã
                        theo dõi</a>
                </li>
                <li class="{{ request()->is('*profile*') ? 'active' : '' }}">
                    <a href="{{ route('profile.index') }}"><i class="fas fa-user icon-element"></i>Quản lý hồ sơ</a>
                </li>
                <li class="{{ request()->is('*goi-y-viec-lam*') ? 'active' : '' }}">
                    <a href="{{ route('goi-y-viec-lam.index') }}"><i class="fas fa-user icon-element"></i>Gợi ý việc
                        làm</a>
                </li>
                <li class="{{ request()->is('*change-password*') ? 'active' : '' }}">
                    <a href="{{ route('user.changepass') }}"><i class="fas fa-lock icon-element"></i> Đổi mật
                        khẩu</a>
                </li>

                <li><a href="{{ route('user.logout') }}"><i class="la la-power-off icon-element"></i> Logout</a>
                </li>
            </ul>
        </div><!-- end side-menu-wrap -->
    </div>
</div><!-- end dashboard-sidebar -->
