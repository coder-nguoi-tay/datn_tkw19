@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
@endphp
@extends('client.layout.seeker')
@section('content')
    <div class="dashboard-content-wrap" style="background: #ffff">
        <div class="container-fluid  mt-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <ul class="list-items d-flex align-items-center">
                            @if (isset($breadcrumbs))
                                @foreach ($breadcrumbs as $key => $breadcrumb)
                                    @if ($key != count($breadcrumbs) - 1)
                                        <li class="active__list-item">
                                            <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                                        </li>
                                    @else
                                        <li class="active__list-item active">{{ $breadcrumb }}</li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                {{-- {{ dd($user) }} --}}
                </change-status-new>
                <user-profile
                    :data="{{ json_encode([
                        'cv' => $cv,
                        'user' => $user,
                        'checkProfile' => $user->getProfileUse ?? null,
                        'getCheckUser' => $user->getCheckUser ?? null,
                        'urlStore' => route('profile.store'),
                        'urlBack' => route('profile.index'),
                        'urlUpdateAvatar' => route('profile.updateAvatar'),
                        'changeStatusProfile' => route('profile.updateStatusProfile'),
                    ]) }}">
                </user-profile>
            </div>
        </div>
    </div>
@endsection
