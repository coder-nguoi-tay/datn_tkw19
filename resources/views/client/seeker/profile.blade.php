@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
@endphp
@extends('client.layout.seeker')
@section('content')
    <div class="dashboard-content-wrap" style="background: #ffff">
        <div class="container-fluid">
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
                <user-profile
                    :data="{{ json_encode([
                        'lever' => $lever,
                        'experience' => $experience,
                        'wage' => $wage,
                        'skill' => $skill,
                        'timework' => $timework,
                        'profession' => $profession,
                        // 'majors' => $majors,
                        'location' => $location,
                        'workingform' => $workingform,
                        'user' => $user,
                        'urlStore' => route('profile.store'),
                        'urlBack' => route('profile.index'),
                        'getskill' => $getskill ?? '',
                    ]) }}">
                </user-profile>
            </div>
        </div>
    </div>
@endsection
