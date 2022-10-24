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
                            {{-- <div class="accordion">
                                <div class="card recuitment-card">
                                    <div class="card-header recuitment-card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <span class="btn btn-block text-left recuitment-header">
                                                Đăng tin tuyển dụng
                                            </span>
                                        </h2>
                                    </div>
                                    <form action="{{ route('employer.new.update', $job->id) }}" method="POST">
                                        @csrf
                                        <div id="collapseOne" class="collapse  show">
                                            <div class="card-body recuitment-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Tiêu đề<span
                                                            class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <input name="title" value="{{ $job->title }}" type="text"
                                                            class="form-control" placeholder="Tiêu đề" />
                                                        <span class="error" name="title">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Số lượng cần
                                                        tuyển</label>
                                                    <div class="col-sm-9">
                                                        <input name="quatity" value="{{ $job->quatity }}" type="number"
                                                            class="form-control" placeholder="Số lượng cần tuyển" />
                                                        <span class="error" name="quatity">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Giới tính<span
                                                            class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <select name="sex" id="" as='select'
                                                            class="form-control">
                                                            <option value disabled selected>Chọn giới tinh</option>
                                                            <option value="0">Không yêu cầu</option>
                                                            <option value="Nam">Nam</option>
                                                            <option value="Nữ">Nữ</option>
                                                        </select>
                                                        <span class="error" name="sex">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Mô tả công
                                                        việc<span class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <input name="describe" type="text" value="{{ $job->describe }}"
                                                            class="form-control" placeholder="Mô tả công việc" />
                                                        <span class="error" name="describe">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Yêu cầu công
                                                        việc<span class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <input name="candidate_requirements"
                                                            value="{{ $job->candidate_requirements }}" type="text"
                                                            class="form-control" placeholder="Yêu cầu công việc" />
                                                        <span class="error" name="candidate_requirements">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Chuyên
                                                        Ngành<span class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <select name="majors_id" id="" as='select'
                                                            class="form-control">
                                                            <option value disabled>Chọn chuyên ngành</option>
                                                            @foreach ($majors as $item)
                                                                <option value="{{ $item->id = $job->majors_id }}">
                                                                    {{ $item->label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error" name="majors_id">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Trình độ<span
                                                            class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <select name="level_id" as="select" class="form-control">
                                                            <option value disabled>Chọn Trình độ học vẫn</option>
                                                            @foreach ($lever as $item)
                                                                <option value="{{ $item->id = $job->lever_id }}">
                                                                    {{ $item->label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error" name="level_id">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Kinh nghiệm<span
                                                            class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <select name="experience_id" as="select" class="form-control">
                                                            <option value disabled>Chọn Kinh nghiệm</option>
                                                            @foreach ($experience as $item)
                                                                <option value="{{ $item->id = $job->experience_id }}">
                                                                    {{ $item->label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error" name="experience_id">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Mức lương<span
                                                            class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <select name="wage_id" as="select" class="form-control">
                                                            <option value disabled>Chọn Mức lương</option>
                                                            @foreach ($wage as $item)
                                                                <option value="{{ $item->id = $job->wage_id }}">
                                                                    {{ $item->label }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <br>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Hình thức làm
                                                        việc<span class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <select name="wk_form_id" as="select" class="form-control">
                                                            <option value disabled>Chọn Hình thức làm việc</option>
                                                            @foreach ($workingform as $item)
                                                                <option value="{{ $item->id = $job->wk_form_id }}">
                                                                    {{ $item->label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error" name="wk_form_id">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Thời gian làm
                                                        việc<span class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <select name="time_work_id" as="select" class="form-control">
                                                            <option value disabled>Chọn Yêu cầu thời gian làm việc
                                                            </option>
                                                            @foreach ($timework as $item)
                                                                <option value="{{ $item->id = $job->time_work_id }}">
                                                                    {{ $item->label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error" name="time_work_id">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Quyền lợi<span
                                                            class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <input name="benefit" value="{{ $job->benefit }}" type="text"
                                                            class="form-control" placeholder="Quyền lợi" />
                                                        <span class="error" name="benefit">
                                                    </div>
                                                </div> --}}
                            {{-- <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Vị trí ứng
                                                        tuyển</label>
                                                    <div class="col-sm-9">
                                                        <select name="profession_id" as="select" class="form-control">
                                                            <option value disabled>Chọn vị trí</option>
                                                            @foreach ($profession as $item)
                                                                <option value="{{ $item->id = $job->profession_id }}">
                                                                    {{ $item->label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error" name="profession_id">
                                                    </div>
                                                </div> --}}
                            {{-- đang làm --}}
                            {{-- <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Kỹ năng</label>
                                                    <div class="col-sm-9">
                                                        <select name="skill_id[]" class="form-select select2"
                                                            aria-label="Default select example">
                                                            @foreach ($skill as $item)
                                                                @foreach ($job->getskill as $value)
                                                                    <option value="{{ $item->id = $value->id }}">
                                                                        {{ $item->label }}</option>
                                                                @endforeach
                                                            @endforeach
                                                        </select>
                                                        <span class="error" name="">
                                                    </div>
                                                </div> --}}
                            {{-- het --}}
                            {{-- <br>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Nơi làm
                                                        việc</label>
                                                    <div class="col-sm-9">

                                                        <select name="location_id" as="select" class="form-control">
                                                            <option value disabled selected>Nơi làm việc</option>
                                                            @foreach ($location as $item)
                                                                <option value="{{ $item->id }}">{{ $item->label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error" name="location_id">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Địa chỉ cụ
                                                        thể</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="address" class="form-control"
                                                            placeholder="Nhập địa chỉ" />
                                                        <span class="error" name="address">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label text-right label">Hạn nộp hồ
                                                        sơ<span class="pl-2">*</span></label>
                                                    <div class="col-sm-9">
                                                        <picker-new-employer name="end_job_time" class="date-time">
                                                        </picker-new-employer>
                                                        <span class="error" name="end_job_time">
                                                    </div>
                                                </div>
                                            </div> --}}
                            {{-- {{ dd($company[0]) }} --}}
                            {{-- employrer --}}
                            {{-- <div class="card recuitment-card">
                                                <div class="card-header recuitment-card-header" id="headingThree">
                                                    <h2 class="mb-0">
                                                        <span class="btn btn-block text-left recuitment-header">
                                                            Thông Tin Liên Hệ
                                                        </span>
                                                    </h2>
                                                </div>
                                                <div id="collapseThree" class="collapse show"
                                                    aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body recuitment-body">

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-right label">Tên
                                                                người liên hệ</label>
                                                            <div class="col-sm-9">

                                                                <input type="text" name="nameEmployer"
                                                                    value="{{ $user[0]->name }}" class="form-control" />
                                                                <span class="error" name="nameEmployer">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-sm-3 col-form-label text-right label">Email</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="email" class="form-control"
                                                                    value="{{ $user[0]->email }}" />
                                                                <span class="error" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-right label">Điện
                                                                thoại</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" name="phoneEmployer"
                                                                    class="form-control" value="{{ $user[0]->phone }}" />
                                                                <span class="error" name="phone">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-right label">Địa
                                                                chỉ</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="addressEmployer"
                                                                    class="form-control"
                                                                    value="{{ $user[0]->address }}" />
                                                                <span class="error" name="addressEmployer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                            {{-- end employer --}}
                            {{-- company --}}
                            {{-- <div class="card recuitment-card">
                                                <div class="card-header recuitment-card-header" id="heading4">
                                                    <h2 class="mb-0">
                                                        <span class="btn btn-block text-left recuitment-header">
                                                            Thông Tin Công Ty
                                                        </span>
                                                    </h2>
                                                </div> --}}

                            {{-- <div id="collapse4" class="collapse show" aria-labelledby="heading4"
                                                    data-parent="#collapse4">
                                                    <div class="card-body recuitment-body">
                                                        <input type="hidden" name="id"
                                                            value="{{ $company[0]->id ?? '' }}" />
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-right label">Tên
                                                                công ty<span class="pl-2">*</span></label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="nameCompany"
                                                                    class="form-control"
                                                                    value="{{ $company[0]->name ?? '' }}"
                                                                    placeholder="Tên công ty" />
                                                                <span class="error" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-right label">Địa
                                                                chỉ<span class="pl-2">*</span></label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="addressCompany"
                                                                    class="form-control"
                                                                    value="{{ $company[0]->address ?? '' }}"
                                                                    placeholder="địa
                                                                    chỉ" />
                                                                <span class="error" name="addressCompany">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label
                                                                class="col-sm-3 col-form-label text-right label">Email<span
                                                                    class="pl-2">*</span></label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="emailCompany"
                                                                    class="form-control"
                                                                    value="{{ $company[0]->email ?? '' }}"
                                                                    placeholder="Email" />
                                                                <span class="error" name="emailCompany">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-right label">Quy mô
                                                                nhân sự<span class="pl-2">*</span></label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="number_member"
                                                                    class="form-control"
                                                                    value="{{ $company[0]->number_member ?? '' }}"
                                                                    placeholder="số lượng nhân viên" />
                                                                <span class="error" name="number_member">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-sm-3 col-form-label text-right label">Logo</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="logo"
                                                                    value="{{ $company[0]->logo ?? '' }}"
                                                                    class="form-control" placeholder="logo" />
                                                                <span class="error" name="logo">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label text-right label">Sơ lược
                                                                về công ty<span class="pl-2">*</span></label>
                                                            <div class="col-sm-9">
                                                                <textarea name="desceibeCompany" value="{{ $company[0]->Desceibe ?? '' }}" id="" cols="10"
                                                                    rows="5" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                            {{-- end company --}}
                            {{-- <div class="rec-submit">
                                                    <button type="submit" class="btn-submit-recuitment">
                                                        <i class="fa fa-floppy-o pr-2 icon-save">Lưu Tin
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </div> --}}
                            {{-- {{ dd($job) }} --}}
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
                                    'user' => $user,
                                    'company' => $company,
                                    'job' => $job[0],
                                    'urlStore' => route('employer.new.update', $job[0]->id),
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
    </div>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                multiple: 4,
            })
        })
    </script>
@endsection
