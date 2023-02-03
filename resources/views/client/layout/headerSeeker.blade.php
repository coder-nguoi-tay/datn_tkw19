@php
    use App\Models\Majors;
    $majors = Majors::all();
@endphp
<header class="header-area header-desktop">
    <div class="header-menu-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="{{ route('index') }}"><img
                                    src="{{ asset('wp-content/themes/jobbox/assets/imgs/template/logoIT.png') }}"
                                    alt="logo"></a>
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Lĩnh vực <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            @foreach ($majors as $item)
                                                <li><a
                                                        href="{{ route('searchMajors', $item->id) }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('index') }}">Việc làm </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('CongTy') }}">Công ty</a>


                                    </li>
                                    <li>
                                        <a href="/blog">Tin tức </a>

                                    </li>


                                    <li>
                                        <a href="/faqs">Câu hỏi thường gặp </a>

                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="logo-right-content">
                            <div class="header-action-button d-flex align-items-center">
                                <div class="notification-wrap d-flex align-items-center">
                                    <div class="notification-item mr-3">
                                        <div class="dropdown">
                                            <button class="notification-btn dropdown-toggle" type="button"
                                                id="notificationDropdownMenu" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset(Auth::guard('user')->user()->images) }}"
                                                    alt="" style="width: 35px;height: 35px;margin : 0 "
                                                    class="rounded-circle img-fluid">
                                                <span class="fullname"> &nbsp;
                                                    {{ Auth::guard('user')->user()->name }}
                                                </span>
                                            </button>
                                        </div><!-- end dropdown -->
                                    </div>
                                </div>
                            </div>
                            <div class="menu-toggler d-flex align-items-center">
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div><!-- end side-menu-open -->
                                <div class="user-menu-open">
                                    <i class="la la-user"></i>
                                </div><!-- end user-menu-open -->
                            </div>
                        </div><!-- end logo-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li>
                    <a href="#">Home <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index2.html">Home 2</a></li>
                        <li><a href="index3.html">Home 3</a></li>
                        <li><a href="index4.html">Home 4</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Employers <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="employer-listing.html">Employer Listing</a></li>
                        <li><a href="employer-details.html">Employer Details</a></li>
                        <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                        <li><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                        <li><a href="employer-dashboard-post-job.html">Post a Job</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Candidates <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="candidate-listing.html">Candidate Listing</a></li>
                        <li><a href="candidate-details.html">Candidate Details</a></li>
                        <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                        <li><a href="candidate-dashboard-edit-profile.html">Edit Profile</a></li>
                        <li><a href="candidate-add-resume.html">Add a Resume</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="all-category.html">All Category</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="how-it-works.html">How It Works</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="payment-complete.html">Payment Complete</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="page-404.html">404 Page</a></li>
                        <li><a href="terms-and-condition.html">Terms And Condition</a></li>
                        <li><a href="recover.html">Recover Password</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                        <li><a href="blog-single.html">Blog Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Jobs <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="job-listing.html">Job Listing</a></li>
                        <li><a href="job-grid-view.html">Job Grid View</a></li>
                        <li><a href="job-details.html">Job Details </a></li>
                    </ul>
                </li>
            </ul>
            <div class="side-nav-button">
                <a href="login.html">Login</a>
                <span class="or-text">or</span>
                <a href="sign-up.html">Sign up</a>
                <a href="employer-dashboard-post-job.html" class="theme-btn">Post a Job</a>
            </div><!-- end side-nav-button -->
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-nav-container -->
    <div class="user-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="user-panel-nav">
            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification-home"
                        role="tab" aria-controls="notification-home" aria-selected="true">
                        Notifications
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="message-tab" data-toggle="tab" href="#message-home" role="tab"
                        aria-controls="message-home" aria-selected="false">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-tab" data-toggle="tab" href="#account-home" role="tab"
                        aria-controls="account-home" aria-selected="false">Account</a>
                </li>
            </ul>
        </div>
        <div class="user-panel-content">
            <div class="tab-content" id="tab-tabContent">
                <div class="tab-pane fade show active" id="notification-home" role="tabpanel"
                    aria-labelledby="notification-tab">
                    <div class="user-sidebar-item">
                        <div class="mess-dropdown">
                            <div class="mess__body">
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Your Resume Updated!</p>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-lock"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">You changed password</p>
                                            <span class="time">2 day ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">You applied for a job <span class="color-text">Front-end
                                                    Developer</span></p>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-user"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Your account has been created successfully</p>
                                            <span class="time">1 minute ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-download"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Someone downloaded resume</p>
                                            <span class="time">Yesterday</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Application has been approved</p>
                                            <span class="time">1 hour ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-flag"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">New report has been received</p>
                                            <span class="time">10 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-bell-o"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">New user feedback received</p>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
                <div class="tab-pane fade" id="message-home" role="tabpanel" aria-labelledby="message-tab">
                    <div class="user-sidebar-item">
                        <div class="mess-dropdown">
                            <div class="mess__body">
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many
                                            </p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many
                                            </p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many
                                            </p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many
                                            </p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many
                                            </p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many
                                            </p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Kamran Adi</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many
                                            </p>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
                <div class="tab-pane fade" id="account-home" role="tabpanel" aria-labelledby="account-tab">
                    <div class="user-action-wrap user-sidebar-panel">
                        <div class="mess-dropdown">
                            <div class="mess__title d-flex align-items-center">
                                <div class="image dot-status online-status">
                                    <a href="#">
                                        <img src="" alt="Bluetech, Inc">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">
                                        <a href="#">Bluetech, Inc</a>
                                    </h4>
                                    <span class="email">bluetechinc@example.com</span>
                                </div>
                            </div><!-- end mess__title -->
                            <div class="mess__body">
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="la la-user"></i> Account
                                </a>
                                <a href="employer-dashboard-bookmark.html" class="d-block">
                                    <i class="la la-bookmark"></i> Bookmarks
                                </a>
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="la la-plus"></i> Post a Job
                                </a>
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="la la-question"></i> Help
                                </a>
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="la la-gear"></i> Settings
                                </a>
                                <div class="section-block mt-2 mb-2"></div>
                                <a href="index.html" class="d-block">
                                    <i class="la la-power-off"></i> Logout
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end user-nav-container -->
</header>
