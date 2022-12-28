@extends('client.layout.seeker')
@section('seeker')
    <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">


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
    </div>
@endsection
