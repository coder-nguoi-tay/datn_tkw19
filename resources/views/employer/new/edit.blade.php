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
                                    <label class="">Sửa Tin Tuyển Dụng</label>
                                </div>
                            </header>
                        </div>
                        <edit-new-employer
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
                                'job' => $job,
                                'urlStore' => route('employer.new.update', $job->id),
                                'urlBack' => route('employer.new.index'),
                            ]) }}">
                            <edit-new-employer>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                multiple: 4,
            })
        })
    </script>
@endsection
