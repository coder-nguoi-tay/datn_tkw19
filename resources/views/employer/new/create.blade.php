@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <label>Thêm tin tuyển dụng</label>
                        </div>
                        <div class="card-body">
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
                                    'urlStore' => route('new.store'),
                                    'urlBack' => route('new.index'),
                                ]) }}">
                            </create-new-employer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
