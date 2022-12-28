<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8">
    <title>cv</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            padding: 0;
            margin: 0 auto;
            box-sizing: border-box;
            font-family: DejaVu Sans !important;
            font-size: 12px;
        }

        .h3_title {
            margin: 10px 0;
            border-bottom: 1px solid #ebad00;
        }

        .main_gt .right_cv .box_cv {
            border-top: 1px solid #ffc628;
            position: relative;
            padding-left: 35px;
            color: #284350;
            font-size: 12px;
            padding-right: 30px;
            text-align: justify;
        }

        .main_gt .right_cv>.box_cv>h3 {
            border: 1px solid #ffbb00;
            border-radius: 8px;
            width: 200px;
            text-align: center;
            padding: 8px 5px;
            position: absolute;
            top: -20px;
            color: #284350;
            background: white;
            font-size: 14px;
        }

        .main_gt .right_cv .box_cv>.mt {
            margin: 40px 0;
        }

        p {
            font-size: 12px;
        }

        .text-first {
            padding: 5px 0;
        }

        .text-first::first-letter {
            text-transform: capitalize !important;
        }
    </style>
</head>

<body style="width: 100%; margin: 0 auto; font-family: DejaVu Sans !important;">
    <div class="container">
        <div style="box-sizing: border-box; ">
            <div class="main_gt">
                <div class="left_cv"
                    style="width: 30%; float: left; background: #284350; padding: 10px; color: aliceblue; max-height: 1100px;">
                    <div class="box_img"
                        style="overflow: hidden; width: 98%; border: 2px solid #ebad00; height: 250px; margin-bottom: 10px;">
                        <img src="{{ asset('/assets/img/bn-2.png') }}" alt="anh_cv" style="width: 100%;border:none;">
                    </div>
                    <div class="contact" style="">
                        <h3 class="h3_title">Thông tin cá nhân</h3>
                        <div class="box_contact">
                            <div class="mail">
                                <i class="fa-solid fa-envelope"></i>
                                <p>vucongtuyen.hn@gmail.com</p>
                            </div>
                            <div class="mail">
                                <i class="fa-solid fa-phone"></i>
                                <p>vucongtuyen.hn@gmail.com</p>
                            </div>
                            <div class="mail">
                                <i class="fa-solid fa-globe"></i>
                                <p>vucongtuyen.hn@gmail.com</p>
                            </div>
                            <div class="mail">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <p>vucongtuyen.hn@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact">
                        <h3 class="h3_title">CÁC KỸ NĂNG</h3>
                        <div class="box_contact">
                            <div class="ky_nang">
                                <h4 class="text-first">ngôn ngữ lập trình</h4>
                                <p>PHP (Laravel), Javascript, Angular, HTML CSS</p>
                            </div>
                            <div class="ky_nang">
                                <h4 class="text-first">làm việc nhóm</h4>
                                <p>PHP (Laravel), Javascript, Angular, HTML CSS</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact">
                        <h3 class="h3_title">CHỨNG CHỈ</h3>
                        <div class="box_contact">
                            <div class="ky_nang">
                                <h4 class="text-first">2022</h4>
                                <p> English Topnotch 2.2 tại Trường Cao đẳng FPT Polytechnic (Tương đương Ielts 4.5)
                                </p>
                            </div>
                            <div class="ky_nang">
                                <h4 class="text-first">2023</h4>
                                <p> English Topnotch 2.2 tại Trường Cao đẳng FPT Polytechnic (Tương đương Ielts 4.5)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact">
                        <h3 class="h3_title">SỞ THÍCH</h3>
                        <div class="box_contact">
                            <div class="ky_nang">
                                <p>Thích nghe nhạc, học hỏi cái mới, đi du lịch.</p>
                            </div>

                        </div>
                    </div>
                    <div class="contact">
                        <h3 class="h3_title">NGƯỜI THAM CHIẾU</h3>
                        <div class="box_contact">
                            <div class="ky_nang">
                                <p class="text-first">NGƯỜI THAM CHIẾU</p>
                            </div>

                        </div>
                    </div>
                    <div class="contact">
                        <h3 class="h3_title">GIẢI THƯỞNG</h3>
                        <div class="box_contact">
                            <div class="ky_nang">
                                <div class="date text-first">2022</div>
                                <p>Thành viên xuất sắc của nhóm</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact" style="padding-bottom: 30px;">
                        <h3 class="h3_title">THÔNG TIN THÊM</h3>
                        <div class="box_contact">
                            <div class="ky_nang">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_cv"
                    style="width: 70%; float: left; background: #fff; color: #284350; max-height: 1100px">
                    <div class="box_cv" style="padding: 10px 30px; margin-bottom: 40px;">
                        <h2 style="font-size: 30px;"> VŨ CÔNG TUYỀN </h2>
                        <h4 style="font-size: 24px;">BACK-END DEVELOPER</h4>
                    </div>
                    <div class="box_cv mt_cv" style="margin-right: 20px;">
                        <h3 style="font-size: 14px; font-weight: 500; text-transform: uppercase;">MỤC TIÊU NGHỀ NGHIỆP
                        </h3>
                        <span class="bd_cv"></span>
                        <p class="mt">Ngắn hạn: Trong 1 năm tới, em sẽ trở thành một lập trình viên Back-end(PHP)
                            chuyên
                            nghiệp, tích lũy nhiều kinh nghiệm trong quá trình làm việc với các dự án.- Dài hạn:
                            Trong vòng từ 2-3 năm tới, em sẽ trở thành lập trình viên fullstack, học hỏi thêm nhiều
                            ngôn ngữ cũng như framework liên quan.</p>
                    </div>
                    <div class="box_cv" style="margin-right: 40px;">
                        <h3 style="font-size: 14px; font-weight: 500; text-transform: uppercase;">KINH NGHIỆM LÀM VIỆC
                        </h3>
                        <span class="bd_cv"></span>
                        <div class="box_2_cv" style="margin-bottom: 30px;">
                            <div class="mt">
                                <div class="title_cv" style="margin-top: 30px;font-size: 12px; padding-bottom: 10px;">
                                    <i class="fa-solid fa-briefcase" style="color: #ebad00;"></i>
                                    <h4
                                        style="font-size: 12px;margin: 0; color: #284350; float:left; text-transform: uppercase;">
                                        VỊ TRÍ: LẬP TRÌNH VIÊN BACK-END</h4>
                                    <span style="font-size: 12px; font-weight: 100; padding-right:30px; float:right;">
                                        <strong>10/2021</strong>-<strong>01/2022</strong></span>
                                </div>
                                <div class="h4" style="font-size: 12px;margin-top: 10px;">Website bán thời trang
                                    Adidas</div>
                                <div class="h4" style="font-size: 12px;margin-top: 10px;">Công ty: Top CV</div>
                                <div class="mt_cv">
                                    <p style="margin: 0;font-size: 12px;">- Số lượng thành viên: 3 người</p>
                                    <p style="margin: 0;font-size: 12px;">- Mô tả công việc: Sử dụng công cụ Visual
                                        StudioCode code giao diện và code
                                        chức
                                        năng;</p>
                                    <p style="margin: 0;font-size: 12px;">- Công nghệ sử dụng: PHP, MySQL, Bootstrap,
                                        HTML CSS </p>
                                    <p style="margin: 0;font-size: 12px;">- Githup: github.com/congtuyen791/TTA_du_an_1
                                    </p>
                                </div>
                            </div>
                            <div class="mt">
                                <div class="title_cv" style="margin-top: 30px;font-size: 12px; padding-bottom: 10px;">
                                    <i class="fa-solid fa-briefcase" style="color: #ebad00;"></i>
                                    <h4
                                        style="font-size: 12px;margin: 0; color: #284350; float:left; text-transform: uppercase;">
                                        VỊ TRÍ: LẬP TRÌNH VIÊN BACK-END</h4>
                                    <span style="font-size: 12px; font-weight: 100; padding-right:30px; float:right;">
                                        <strong>10/2021</strong>-<strong>01/2022</strong></span>
                                </div>
                                <div class="h4" style="font-size: 12px;margin-top: 10px;">Website bán thời trang
                                    Adidas</div>
                                <div class="h4" style="font-size: 12px;margin-top: 10px;">Công ty: Top CV</div>
                                <div class="mt_cv">
                                    <p style="margin: 0;font-size: 12px;">- Số lượng thành viên: 3 người</p>
                                    <p style="margin: 0;font-size: 12px;">- Mô tả công việc: Sử dụng công cụ Visual
                                        StudioCode code giao diện và code
                                        chức
                                        năng;</p>
                                    <p style="margin: 0;font-size: 12px;">- Công nghệ sử dụng: PHP, MySQL, Bootstrap,
                                        HTML CSS </p>
                                    <p style="margin: 0;font-size: 12px;">- Githup: github.com/congtuyen791/TTA_du_an_1
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_cv" style="margin-right: 40px;">
                        <h3 style="text-align: center;font-size: 14px; font-weight: 500; text-transform: uppercase;">
                            Hoạt động</h3>
                        <span class="bd_cv"></span>
                        <div class="box_2_cv" style="margin-bottom: 30px;">
                            <div class="mt">
                                <div class="title_cv" style="margin-top: 30px;font-size: 12px; padding-bottom: 10px;">
                                    <i class="fa-solid fa-briefcase" style="color: #ebad00;"></i>
                                    <h4
                                        style="font-size: 12px;margin: 0; color: #284350; float:left; text-transform: uppercase;">
                                        Tình nguyện viên</h4>
                                    <span style="font-size: 12px; font-weight: 100; padding-right:30px; float:right;">
                                        <strong>10/2021</strong>-<strong>01/2022</strong></span>
                                </div>
                                <div class="h4" style="font-size: 12px;margin-top: 10px;">Nhóm tình nguyện TOPCV
                                </div>
                                <div class="mt_cv" style="font-size: 12px;">
                                    <p>Tập hợp các món quà và phân phát tới người vô gia cư.</p>
                                    <p>Chia sẻ, động viên họ vượt qua giai đoạn khó khăn, giúp họ có những suy nghĩ
                                        lạc quan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_cv" style="margin-right: 40px;">
                        <h3 style="text-align: center; font-size: 14px; font-weight: 500; text-transform: uppercase;">
                            dự án</h3>
                        <span class="bd_cv"></span>
                        <div class="box_2_cv" style="margin-bottom: 30px;">
                            <div class="mt">
                                <div class="title_cv" style="margin-top: 30px;font-size: 12px; padding-bottom: 10px;">
                                    <i class="fa-solid fa-briefcase" style="color: #ebad00;"></i>
                                    <h4
                                        style="font-size: 12px;margin: 0; color: #284350; float:left; text-transform: uppercase;">
                                        Quản trị doanh nghiệp</h4>
                                    <span
                                        style="font-size: 12px; font-weight: 100; padding-right:30px; float:right;"><strong>10/2021</strong>-<strong>01/2022</strong></span>
                                </div>
                                <div class="h4" style="font-size: 12px;margin-top: 10px; ">RAINWAY GROUP</div>
                                <div class="mt_cv" style="font-size:12px;">
                                    <p>Khách hàng: ANZ TOPCV</p>
                                    <p>Số lượng người tham gia : 8</p>
                                    <h4>Vị trí : Lập trình viên</h4>
                                    <p style="margin: 0;">- Phân tích và thiết kế hệ thống
                                    <p style="margin: 0;">- Phát triển module</p>
                                    <p style="margin: 0;">- Tối ưu code</p>
                                    <p style="margin: 0;">- Sửa lỗi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
