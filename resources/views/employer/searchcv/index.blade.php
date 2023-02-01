@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
@endphp
@extends('employer.layout.index')
@section('content')
    <div class="dashboard-content-wrap">
        <div class="container-fluid mt-4">
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
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="billing-form-item p-3">
                        {{-- <div style="float: right !important">
                            <search-find-cv :url="{{ json_encode(route('employer.tim-kiem-cv.index')) }}"
                                :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}">
                            </search-find-cv>
                        </div> --}}
                        <div class="billing-content">
                            <div class="contact-form-action">
                                <form method="post" class="MultiFile-intercepted">
                                    <div class="row">
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Job Title</label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" type="text" name="text"
                                                        placeholder="Enter job title">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Username</label>
                                                <div class="form-group">
                                                    <span class="la la-pencil-square-o form-icon"></span>
                                                    <input class="form-control" type="text" name="text"
                                                        placeholder="Username">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Career Level</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;">
                                                        <option value="">Choose One</option>
                                                        <option value="1">Manager</option>
                                                        <option value="2">Officer</option>
                                                        <option value="3">Mobile Designer</option>
                                                        <option value="4">Web Designer</option>
                                                        <option value="5">Product Designer</option>
                                                        <option value="6">Creative Director</option>
                                                        <option value="7">Art Director</option>
                                                        <option value="8">Interaction Designer</option>
                                                        <option value="9">Motion Designer</option>
                                                        <option value="10">Illustrator</option>
                                                        <option value="11">Animator</option>
                                                        <option value="12">Student</option>
                                                        <option value="13">Executive</option>
                                                        <option value="14">Brand Designer</option>
                                                        <option value="15">Mobile Developer</option>
                                                        <option value="16">Front-end Developer</option>
                                                        <option value="17">Content Writer</option>
                                                        <option value="18">Other</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-single"
                                                        style="width: 321px;" title=""><a class="chosen-single"
                                                            tabindex="-1"><span>Choose One</span>
                                                            <div><b></b></div>
                                                        </a>
                                                        <div class="chosen-drop">
                                                            <div class="chosen-search"><input type="text"
                                                                    autocomplete="off"></div>
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">category</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;">
                                                        <option value="">Select a category</option>
                                                        <option value="1">All Category</option>
                                                        <option value="2">Accounting / Finance</option>
                                                        <option value="3">Education</option>
                                                        <option value="4">Design &amp; Creative</option>
                                                        <option value="5">Health Care</option>
                                                        <option value="6">Engineer &amp; Architects</option>
                                                        <option value="7">Marketing &amp; Sales</option>
                                                        <option value="8">Garments / Textile</option>
                                                        <option value="9">Customer Support</option>
                                                        <option value="10">Digital Media</option>
                                                        <option value="11">Telecommunication</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-single"
                                                        style="width: 321px;" title=""><a class="chosen-single"
                                                            tabindex="-1"><span>Select a category</span>
                                                            <div><b></b></div>
                                                        </a>
                                                        <div class="chosen-drop">
                                                            <div class="chosen-search"><input type="text"
                                                                    autocomplete="off"></div>
                                                            <ul class="chosen-results">
                                                                <li class="active-result result-selected"
                                                                    data-option-array-index="0" style="">Select a
                                                                    category</li>
                                                                <li class="active-result" data-option-array-index="1"
                                                                    style="">All Category</li>
                                                                <li class="active-result" data-option-array-index="2"
                                                                    style="">Accounting / Finance</li>
                                                                <li class="active-result" data-option-array-index="3"
                                                                    style="">Education</li>
                                                                <li class="active-result" data-option-array-index="4"
                                                                    style="">Design &amp; Creative</li>
                                                                <li class="active-result" data-option-array-index="5"
                                                                    style="">Health Care</li>
                                                                <li class="active-result" data-option-array-index="6"
                                                                    style="">Engineer &amp; Architects</li>
                                                                <li class="active-result" data-option-array-index="7"
                                                                    style="">Marketing &amp; Sales</li>
                                                                <li class="active-result" data-option-array-index="8"
                                                                    style="">Garments / Textile</li>
                                                                <li class="active-result" data-option-array-index="9"
                                                                    style="">Customer Support</li>
                                                                <li class="active-result" data-option-array-index="10"
                                                                    style="">Digital Media</li>
                                                                <li class="active-result" data-option-array-index="11"
                                                                    style="">Telecommunication</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Offered Salary</label>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <span class="la la-dollar-sign form-icon"></span>
                                                            <input class="form-control" type="number" placeholder="Min">
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <span class="la la-dollar-sign form-icon"></span>
                                                            <input class="form-control" type="number" placeholder="Max">
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                </div><!-- end row -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Experience</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;">
                                                        <option value="">Choose Experience</option>
                                                        <option value="1">No Experience</option>
                                                        <option value="2">Less than 1 Year</option>
                                                        <option value="3">1 to 2 Year(s)</option>
                                                        <option value="4">2 to 4 Year(s)</option>
                                                        <option value="5">3 to 5 Year(s)</option>
                                                        <option value="3">2 Years</option>
                                                        <option value="4">3 Years</option>
                                                        <option value="5">4 Years</option>
                                                        <option value="6">Over 5 Years</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-single"
                                                        style="width: 321px;" title=""><a class="chosen-single"
                                                            tabindex="-1"><span>Choose Experience</span>
                                                            <div><b></b></div>
                                                        </a>
                                                        <div class="chosen-drop">
                                                            <div class="chosen-search"><input type="text"
                                                                    autocomplete="off"></div>
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Qualification</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;">
                                                        <option value="">Choose Qualification</option>
                                                        <option value="1">No Experience</option>
                                                        <option value="2">Matriculation</option>
                                                        <option value="3">Intermediate</option>
                                                        <option value="4">Diploma</option>
                                                        <option value="5">Graduate</option>
                                                        <option value="6">Certificate</option>
                                                        <option value="7">Associate Degree</option>
                                                        <option value="8">Bachelor's Degree</option>
                                                        <option value="9">Master's Degree</option>
                                                        <option value="10">Doctorate Degree</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-single"
                                                        style="width: 321px;" title=""><a class="chosen-single"
                                                            tabindex="-1"><span>Choose Qualification</span>
                                                            <div><b></b></div>
                                                        </a>
                                                        <div class="chosen-drop">
                                                            <div class="chosen-search"><input type="text"
                                                                    autocomplete="off"></div>
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Gender</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;">
                                                        <option value="">Choose Gender</option>
                                                        <option value="1">Male or Female</option>
                                                        <option value="2">Male</option>
                                                        <option value="3">Female</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-single"
                                                        style="width: 321px;" title=""><a class="chosen-single"
                                                            tabindex="-1"><span>Choose Gender</span>
                                                            <div><b></b></div>
                                                        </a>
                                                        <div class="chosen-drop">
                                                            <div class="chosen-search"><input type="text"
                                                                    autocomplete="off"></div>
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Industry</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;">
                                                        <option value="">Select industry</option>
                                                        <option value="1">IT Contractor</option>
                                                        <option value="2">Accountancy</option>
                                                        <option value="3">Banking</option>
                                                        <option value="4">Charity &amp; Voluntary</option>
                                                        <option value="5">Digital &amp; Creative</option>
                                                        <option value="6">Legal jobs</option>
                                                        <option value="7">Leisure &amp; Tourism</option>
                                                        <option value="8">Media</option>
                                                        <option value="9">Marketing &amp; PR</option>
                                                        <option value="0">Motoring &amp; Automotive</option>
                                                        <option value="10">Retail</option>
                                                        <option value="11">Sales &amp; Marketing</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-single"
                                                        style="width: 321px;" title=""><a class="chosen-single"
                                                            tabindex="-1"><span>Select industry</span>
                                                            <div><b></b></div>
                                                        </a>
                                                        <div class="chosen-drop">
                                                            <div class="chosen-search"><input type="text"
                                                                    autocomplete="off"></div>
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text d-flex align-items-center ">Job Tags<span
                                                        class="text-muted ml-1">(optional)</span>
                                                    <i class="la la-question tip ml-1" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Comma separate tags, such as required skills or technologies, for this job. Maximum of 5 keywords"></i>
                                                </label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" multiple=""
                                                        style="display: none;">
                                                        <option>UI &amp; UX Design</option>
                                                        <option>iOS</option>
                                                        <option>Android</option>
                                                        <option>PHP</option>
                                                        <option>Development</option>
                                                        <option>Laravel</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-multi"
                                                        style="width: 321px;" title="">
                                                        <ul class="chosen-choices">
                                                            <li class="search-field"><input type="text"
                                                                    value="Select Some Options" class="default"
                                                                    autocomplete="off" style="width: 165.913px;"></li>
                                                        </ul>
                                                        <div class="chosen-drop">
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Skill Requirements</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" multiple=""
                                                        style="display: none;">
                                                        <option>HTML5</option>
                                                        <option>CSS3</option>
                                                        <option>PHP</option>
                                                        <option>Javascript</option>
                                                        <option>Laravel</option>
                                                        <option>Photoshop</option>
                                                        <option>WordPress</option>
                                                        <option>Vuejs</option>
                                                        <option>React</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-multi"
                                                        style="width: 321px;" title="">
                                                        <ul class="chosen-choices">
                                                            <li class="search-field"><input type="text"
                                                                    value="Select Some Options" class="default"
                                                                    autocomplete="off" style="width: 165.913px;"></li>
                                                        </ul>
                                                        <div class="chosen-drop">
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">No. Of Vacancy</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" multiple=""
                                                        style="display: none;">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-multi"
                                                        style="width: 321px;" title="">
                                                        <ul class="chosen-choices">
                                                            <li class="search-field"><input type="text"
                                                                    value="Select Some Options" class="default"
                                                                    autocomplete="off" style="width: 165.913px;"></li>
                                                        </ul>
                                                        <div class="chosen-drop">
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Application Deadline Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange" value="2/25/2020">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end contact-form-action -->
                        </div>
                        <br>
                        @foreach ($cv as $item)
                            <div class="billing-content pb-0 mt-4">
                                <div class="manage-candidate-wrap d-flex align-items-center justify-content-between pb-4">
                                    <div class="bread-details d-flex">
                                        <div class="bread-img flex-shrink-0">
                                            <a href="{{ route('employer.quan-ly-cv.show', $item->id) }}" class="d-block">
                                                <img src="{{ asset($item->images) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="manage-candidate-content">
                                            <h2 class="widget-title pb-2"><a
                                                    href="{{ route('employer.quan-ly-cv.show', $item->id) }}"
                                                    class="color-text-2">{{ $item->user->name }}</a></h2>
                                            <p class="font-size-15">
                                                <span class="mr-2">{{ $item->majors }}</span>
                                            </p>
                                            <p class="mt-2 font-size-15">
                                                <span class="mr-2"><i
                                                        class="la la-map-marker mr-1"></i>{{ $item->address }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bread-action">
                                        <ul class="info-list">
                                            <li class="d-inline-block mb-0"><a
                                                    href="{{ route('employer.quan-ly-cv.show', $item->id) }}"><i
                                                        class="la la-eye" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="View"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end manage-candidate-wrap -->
                                <div class="section-block"></div>
                            </div><!-- end billing-content -->
                        @endforeach

                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-navigation-wrap mt-4">
                        <div class="page-navigation mx-auto">
                            <a href="#" class="page-go page-prev">
                                <i class="la la-arrow-left"></i>
                            </a>
                            <ul class="page-navigation-nav">
                                <li><a href="#" class="page-go-link">1</a></li>
                                <li class="active"><a href="#" class="page-go-link">2</a></li>
                                <li><a href="#" class="page-go-link">3</a></li>
                                <li><a href="#" class="page-go-link">4</a></li>
                                <li><a href="#" class="page-go-link">5</a></li>
                            </ul>
                            <a href="#" class="page-go page-next">
                                <i class="la la-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- end page-navigation-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>
@endsection
