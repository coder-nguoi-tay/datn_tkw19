<header class="header header-sticky mb-2">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb border-0 m-0">
                <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
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
