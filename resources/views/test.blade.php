@extends('employer.layout.index')
@section('content')
    <section class="dashboard-area">
        <div class="dashboard-content-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                            <div class="section-heading">
                                <h2 class="sec__title">Post a Job</h2>
                            </div><!-- end section-heading -->
                            <ul class="list-items d-flex align-items-center">
                                <li class="active__list-item"><a href="index.html">Home</a></li>
                                <li class="active__list-item">Dashboard</li>
                                <li>Post a Job</li>
                            </ul>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">General Information</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box company-logo-wrap">
                                                    <label class="label-text">Company Logo</label>
                                                    <div class="form-group">
                                                        <div class="file-upload-wrap file-upload-wrap-2">
                                                            <input type="file" name="files[]"
                                                                class="multi file-upload-input with-preview w-100" multiple
                                                                maxlength="1">
                                                            <span class="file-upload-text"><i
                                                                    class="la la-photo mr-2"></i>Upload a Photo</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
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
                                                    <label class="label-text">Job Type</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select">
                                                            <option value>Select Job Type</option>
                                                            <option value="1">Full Time</option>
                                                            <option value="2">Part Time</option>
                                                            <option value="3">Temporary</option>
                                                            <option value="4">Internship</option>
                                                            <option value="5">Permanent</option>
                                                            <option value="6">Freelance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Career Level</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select">
                                                            <option value>Choose One</option>
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
                                                    </div><!-- end form-group -->
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">category</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select">
                                                            <option value>Select a category</option>
                                                            <option value="1">All Category</option>
                                                            <option value="2">Accounting / Finance</option>
                                                            <option value="3">Education</option>
                                                            <option value="4">Design & Creative</option>
                                                            <option value="5">Health Care</option>
                                                            <option value="6">Engineer & Architects</option>
                                                            <option value="7">Marketing & Sales</option>
                                                            <option value="8">Garments / Textile</option>
                                                            <option value="9">Customer Support</option>
                                                            <option value="10">Digital Media</option>
                                                            <option value="11">Telecommunication</option>
                                                        </select>
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
                                                                <input class="form-control" type="number"
                                                                    placeholder="Min">
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <span class="la la-dollar-sign form-icon"></span>
                                                                <input class="form-control" type="number"
                                                                    placeholder="Max">
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                    </div><!-- end row -->
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Experience</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select">
                                                            <option value>Choose Experience</option>
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
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Qualification</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select">
                                                            <option value>Choose Qualification</option>
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
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Gender</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select">
                                                            <option value>Choose Gender</option>
                                                            <option value="1">Male or Female</option>
                                                            <option value="2">Male</option>
                                                            <option value="3">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Industry</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select">
                                                            <option value>Select industry</option>
                                                            <option value="1">IT Contractor</option>
                                                            <option value="2">Accountancy</option>
                                                            <option value="3">Banking</option>
                                                            <option value="4">Charity & Voluntary</option>
                                                            <option value="5">Digital & Creative</option>
                                                            <option value="6">Legal jobs</option>
                                                            <option value="7">Leisure & Tourism</option>
                                                            <option value="8">Media</option>
                                                            <option value="9">Marketing & PR</option>
                                                            <option value="0">Motoring & Automotive</option>
                                                            <option value="10">Retail</option>
                                                            <option value="11">Sales & Marketing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text d-flex align-items-center ">Job Tags<span
                                                            class="text-muted ml-1">(optional)</span>
                                                        <i class="la la-question tip ml-1" data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Comma separate tags, such as required skills or technologies, for this job. Maximum of 5 keywords"></i>
                                                    </label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option>UI & UX Design</option>
                                                            <option>iOS</option>
                                                            <option>Android</option>
                                                            <option>PHP</option>
                                                            <option>Development</option>
                                                            <option>Laravel</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Skill Requirements</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
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
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">No. Of Vacancy</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
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
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Job Description</label>
                                                    <div class="form-group mb-0">
                                                        <textarea class="message-control form-control user-text-editor" name="message"></textarea>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div><!-- end billing-form-item -->
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Company Address</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Company Name</label>
                                                    <div class="form-group">
                                                        <span class="la la-briefcase form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Company name">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Website link (optional)</label>
                                                    <div class="form-group">
                                                        <span class="la la-globe form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="https://techydevs.com/">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Email address</label>
                                                    <div class="form-group">
                                                        <span class="la la-envelope-o form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Enter email address">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Phone Number</label>
                                                    <div class="form-group">
                                                        <i class="la la-phone form-icon"></i>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Phone number">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">Location</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select">
                                                            <option value>Select Location</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua &amp; Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AC">Ascension Island</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia &amp; Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory
                                                            </option>
                                                            <option value="VG">British Virgin Islands</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="BQ">Caribbean Netherlands</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo - Brazzaville</option>
                                                            <option value="CD">Congo - Kinshasa</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d’Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czechia</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="SZ">Eswatini</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong SAR China</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="XK">Kosovo</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao SAR China</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar (Burma)</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="MK">North Macedonia</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PS">Palestinian Territories</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn Islands</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">São Tomé &amp; Príncipe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia &amp; South Sandwich
                                                                Islands</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="BL">St. Barthélemy</option>
                                                            <option value="SH">St. Helena</option>
                                                            <option value="KN">St. Kitts &amp; Nevis</option>
                                                            <option value="LC">St. Lucia</option>
                                                            <option value="MF">St. Martin</option>
                                                            <option value="PM">St. Pierre &amp; Miquelon</option>
                                                            <option value="VC">St. Vincent &amp; Grenadines
                                                            </option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad &amp; Tobago</option>
                                                            <option value="TA">Tristan da Cunha</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks &amp; Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatican City</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis &amp; Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 column-lg-full">
                                                <div class="input-box">
                                                    <label class="label-text">City</label>
                                                    <div class="form-group">
                                                        <span class="la la-map form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Enter city name">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Complete Address</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Krakowskie Przedmiescie 12/1200-041 Warsaw">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Find On Map</label>
                                                    <div class="form-group">
                                                        <span class="la la-map form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Krakowskie Przedmiescie 12/1200-041 Warsaw">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Latitude</label>
                                                    <div class="form-group">
                                                        <span class="la la-map form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="55.1589689">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Longitude</label>
                                                    <div class="form-group">
                                                        <span class="la la-map form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="32.1589689">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="btn-box">
                                                        <button class="theme-btn border-0">Search Location</button>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text ">Map location</label>
                                                    <div class="form-group">
                                                        <div class="gmaps">
                                                            <div id="map" class="radius-round"></div>
                                                        </div><!-- end listing-map -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Tagline (optional)</label>
                                                    <div class="form-group mb-0">
                                                        <textarea class="message-control form-control user-text-editor-2" name="message"></textarea>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div><!-- end billing-form-item -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="custom-checkbox mr-0">
                                <div>
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">By Submitting Job You Confirm That You Accept The
                                        <a href="terms-and-condition.html" class="color-text">Terms & Conditions</a>
                                        And <a href="#" class="color-text">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box mt-4">
                            <button type="submit" class="theme-btn border-0"><i class="la la-plus"></i> Submit
                                Your Job</button>
                        </div><!-- end btn-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right margin-top-30px padding-top-20px padding-bottom-20px">
                            <p class="copy__desc">
                                Copyright &copy;2020 Zobstar Inc. Made with
                                <span class="la la-heart-o"></span> by <a
                                    href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                            </p>
                            <ul class="list-items">
                                <li><a href="#">Terms of Use,</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end copy-right -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div>
    </section><!-- end dashboard-area -->
    <!-- ================================
                END DASHBOARD AREA
            ================================= -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
@endsection
