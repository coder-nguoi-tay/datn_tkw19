<div class="sidebar sidebar-dark sidebar-fixed sidebar-lg-show" id="sidebar">
    <ul class="sidebar-nav dashboard-nav" data-coreui="navigation" data-simplebar="init">
        <div class="dashboard-inner">
            <ul data-submenu-title="{{ Auth::guard('user')->user()->email }}">
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
            </ul>
        </div>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
