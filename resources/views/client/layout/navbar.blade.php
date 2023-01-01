<div class="collapse" id="MobNav">
    <div class="dashboard-nav">
        <div class="dashboard-inner">
            <ul data-submenu-title="Main Navigation">
                <li><a href="{{ route('user.favourite') }}"><i class="lni lni-files mr-2"></i>Công việc đã yêu thích</a>
                </li>
                <li><a href="{{ route('quan-ly-cv.index') }}"><i class="lni lni-add-files mr-2"></i>Quản lý CV</a></li>
                <li><a href="{{ route('xem-ho-so.index') }}"><i class="lni lni-briefcase mr-2"></i>Nhà tuyển dụng xem hồ
                        sơ</a></li>
                <li><a href=""><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a>
                </li>
            </ul>
            <ul data-submenu-title="Tài khoản">
                <li><a href="{{ route('profile.index') }}"><i class="lni lni-user mr-2"></i>My Profile </a>
                </li>
                <li><a href="{{ route('user.changepass') }}"><i class="lni lni-lock-alt mr-2"></i>Đổi mật khẩu</a></li>
                </li>
                <li><a href="{{ route('user.logout') }}"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
            </ul>
        </div>
    </div>
</div>
