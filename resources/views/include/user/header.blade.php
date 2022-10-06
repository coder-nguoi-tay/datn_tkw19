<header class="header">
    <div class="container header__container">
        <div class="header__wrapper">
            <a href="" class="btn-back">
                <img class="ic-back" src="{{ asset('assets/img/user/common/ic_back.svg') }}" alt="">
            </a>
            <p class="header-title">開催済み一覧</p>
            @if (request()->is('event'))
                <a href="#" class="h-btn-close">終了済みイベント</a>
            @endif
        </div>
    </div>
</header>
