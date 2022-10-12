@php
$routeName = \Route::currentRouteName();
$routeEvent = ['event.index', 'event.create', 'event.close'];
$routeMyPage = ['my-page.index', 'profile.index'];
@endphp
<footer class="footer">
    <div class="container footer__container">
        <div class="footer__nav">
            <div class="nav__item">
                <a href="" class="nav__link">
                    <p class="nav-ic">
                        <img class="ic-brown" src="{{ asset('assets/img/user/common/ic_search.svg') }}" alt="">
                        <img class="ic-white" src="{{ asset('assets/img/user/common/ic_search_white.svg') }}"
                            alt="">
                    </p>
                    <p class="nav-txt">ホーム</p>
                </a>
            </div>
            <div class="nav__item {{ in_array($routeName, $routeEvent) ? 'active' : '' }}">
                <a href="{{ route('event.index') }}" class="nav__link">
                    <p class="nav-ic">
                        <img class="ic-brown" src="{{ asset('assets/img/user/common/ic_fire.svg') }}" alt="">
                        <img class="ic-white" src="{{ asset('assets/img/user/common/ic_fire_white.svg') }}"
                            alt="">
                    </p>
                    <p class="nav-txt">マイイベント</p>
                </a>
            </div>
            <div class="nav__item">
                <a href="" class="nav__link">
                    <p class="nav-ic">
                        <img class="ic-brown" src="{{ asset('assets/img/user/common/ic_plan.svg') }}" alt="">
                        <img class="ic-white" src="{{ asset('assets/img/user/common/ic_plan_white.svg') }}"
                            alt="">
                    </p>
                    <p class="nav-txt">企画</p>
                </a>
            </div>
            <div class="nav__item">
                <a href="" class="nav__link">
                    <p class="nav-ic">
                        <img class="ic-brown" src="{{ asset('assets/img/user/common/ic_message.svg') }}" alt="">
                        <img class="ic-white" src="{{ asset('assets/img/user/common/ic_message_white.svg') }}"
                            alt="">
                    </p>
                    <p class="nav-txt">通知</p>
                </a>
            </div>
            <div class="nav__item {{ in_array($routeName, $routeMyPage) ? 'active' : '' }}">
                <a href="{{ route('my-page.index') }}" class="nav__link">
                    <p class="nav-ic">
                        <img class="ic-brown" src="{{ asset('assets/img/user/common/ic_bag.svg') }}" alt="">
                        <img class="ic-white" src="{{ asset('assets/img/user/common/ic_bag_white.svg') }}"
                            alt="">
                    </p>
                    <p class="nav-txt">マイページ</p>
                </a>
            </div>
        </div>
    </div>
</footer>
