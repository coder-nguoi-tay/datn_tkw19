<header class="header header-sticky mb-2">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <i class="icon icon-lg fa fa-bars" aria-hidden="true"></i>
        </button>
        <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md">
                        <img class="avatar-img" src="{{ url('/assets/img/avatars/6.jpeg') }}">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Account</div>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="icon me-2 fa fa-pencil-square-o" aria-hidden="true"></i>
                        Updates
                        <span class="badge badge-sm bg-info ms-2">42</span>
                    </a>
                    <a class="dropdown-item" href="{{route('logout')}}">
                        <i class="icon me-2 fa fa-sign-out" aria-hidden="true"></i>
                        ログアウト
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb border-0 m-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">ホーム</a></li>
                @if (isset($breadcrumbs))
                    @foreach ($breadcrumbs as $key => $breadcrumb)
                        @if ($key != count($breadcrumbs) - 1)
                            <li class="breadcrumb-item">
                                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                            </li>
                        @else
                            <li class="breadcrumb-item active">{{ $breadcrumb }}</li>
                        @endif
                    @endforeach
                @endif
            </ol>
        </nav>
    </div>
</header>
