@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <header class="header header-sticky">
                                <div class="container-fluid">
                                    <label class="">Thêm Tin Tuyển Dụng</label>
                                </div>
                            </header>
                        </div>
                        <create-new-employer
                            :data="{{ json_encode([
                                'lever' => $lever,
                                'experience' => $experience,
                                'wage' => $wage,
                                'skill' => $skill,
                                'timework' => $timework,
                                'profession' => $profession,
                                'majors' => $majors,
                                'location' => $location,
                                'workingform' => $workingform,
                                'user' => $user,
                                'urlStore' => route('employer.new.store'),
                                'urlBack' => route('employer.new.index'),
                            ]) }}">
                        </create-new-employer>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
