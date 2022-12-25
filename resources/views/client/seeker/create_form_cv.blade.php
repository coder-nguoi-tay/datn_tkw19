@extends('client.layout.seeker')
@section('seeker')
    <div style="margin: 30px 0;padding: 0;box-sizing: border-box;">
        <div class="main_gt">
            <div class="left_cv">
                <div class="box_img" style="overflow: hidden;">
                    <img src="{{asset('assets/img/bn-2.png')}}" alt="anh_cv" style="width: 100%;border:none;">
                </div>
                <div class="contact">
                    <h3>Thông tin cá nhân</h3>
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
                    <h3>CÁC KỸ NĂNG</h3>
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
                    <h3>CHỨNG CHỈ</h3>
                    <div class="box_contact">
                        <div class="ky_nang">
                            <h4>2022</h4>
                            <p> English Topnotch 2.2 tại Trường Cao đẳng FPT Polytechnic (Tương đương Ielts 4.5)
                            </p>
                        </div>
                        <div class="ky_nang">
                            <h4>2023</h4>
                            <p> English Topnotch 2.2 tại Trường Cao đẳng FPT Polytechnic (Tương đương Ielts 4.5)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <h3>SỞ THÍCH</h3>
                    <div class="box_contact">
                        <div class="ky_nang">
                            <p>Thích nghe nhạc, học hỏi cái mới, đi du lịch.</p>
                        </div>

                    </div>
                </div>
                <div class="contact">
                    <h3>NGƯỜI THAM CHIẾU</h3>
                    <div class="box_contact">
                        <div class="ky_nang">
                            <p>NGƯỜI THAM CHIẾU</p>
                        </div>

                    </div>
                </div>
                <div class="contact">
                    <h3>GIẢI THƯỞNG</h3>
                    <div class="box_contact">
                        <div class="ky_nang">
                            <div class="date">2022</div>
                            <p>Thành viên xuất sắc của nhóm</p>
                        </div>
                    </div>
                </div>
                <div class="contact" style="padding-bottom: 30px;">
                    <h3>THÔNG TIN THÊM</h3>
                    <div class="box_contact">
                        <div class="ky_nang">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_cv">
                <div class="box_cv">
                    <h2 class="name"> VŨ CÔNG TUYỀN </h2>
                    <h4>BACK-END DEVELOPER</h4>
                </div>
                <div class="box_cv mt_cv">
                    <h3 style="font-size: 18px; font-weight: 500; text-transform: uppercase;">MỤC TIÊU NGHỀ NGHIỆP  </h3>
                    <span class="bd_cv"></span>
                    <p class="mt">Ngắn hạn: Trong 1 năm tới, em sẽ trở thành một lập trình viên Back-end(PHP)
                        chuyên
                        nghiệp, tích lũy nhiều kinh nghiệm trong quá trình làm việc với các dự án.- Dài hạn:
                        Trong vòng từ 2-3 năm tới, em sẽ trở thành lập trình viên fullstack, học hỏi thêm nhiều
                        ngôn ngữ cũng như framework liên quan.</p>
                </div>
                <div class="box_cv">
                    <h3 style="font-size: 18px; font-weight: 500; text-transform: uppercase;">KINH NGHIỆM LÀM VIỆC</h3>
                    <span class="bd_cv"></span>
                    <div class="box_2_cv" style="margin-bottom: 30px;">
                        <div class="mt">
                            <div class="title_cv" style="margin-top: 30px;display: flex;align-items: center;justify-content: flex-start;gap: 10px;font-size: 14px;">
                                <i class="fa-solid fa-briefcase" style="color: #ebad00;"></i>
                                <h4 style="font-size: 14px;margin: 0; color: #284350;">VỊ TRÍ: LẬP TRÌNH VIÊN BACK-END (CODE PHP THUẦN)</h4>
                                <span style="font-size: 14px; font-weight: 100; padding-left:30px;">// <strong>10/2021</strong>-<strong>01/2022</strong></span>
                            </div>
                            <div class="h4" style="font-size: 14px;margin-top: 10px;">Website bán thời trang Adidas</div>
                            <div class="h4" style="font-size: 14px;margin-top: 10px;">Công ty: Top CV</div>
                            <div class="mt_cv">
                                <p style="margin: 0;font-size: 14px;">- Số lượng thành viên: 3 người</p>
                                <p style="margin: 0;font-size: 14px;">- Mô tả công việc: Sử dụng công cụ Visual StudioCode code giao diện và code
                                    chức
                                    năng;</p>
                                <p style="margin: 0;font-size: 14px;">- Công nghệ sử dụng: PHP, MySQL, Bootstrap, HTML CSS </p>
                                <p style="margin: 0;font-size: 14px;">- Githup: github.com/congtuyen791/TTA_du_an_1</p>
                            </div>
                        </div>
                        <div class="mt">
                            <div class="title_cv" style="margin-top: 30px;display: flex;align-items: center;justify-content: flex-start;gap: 10px;font-size: 14px;">
                                <i class="fa-solid fa-briefcase" style="color: #ebad00;"></i>
                                <h4 style="font-size: 14px;margin: 0; color: #284350;">VỊ TRÍ: LẬP TRÌNH VIÊN BACK-END (CODE PHP THUẦN)</h4>
                                <span style="font-size: 14px; font-weight: 100; padding-left:30px;">// <strong>10/2021</strong>-<strong>01/2022</strong></span>
                            </div>
                            <div class="h4" style="font-size: 14px;margin-top: 10px;">Website bán thời trang Adidas</div>
                            <div class="h4" style="font-size: 14px;margin-top: 10px;">Công ty: Top CV</div>
                            <div class="mt_cv">
                                <p style="margin: 0;font-size: 14px;">- Số lượng thành viên: 3 người</p>
                                <p style="margin: 0;font-size: 14px;">- Mô tả công việc: Sử dụng công cụ Visual StudioCode code giao diện và code
                                    chức
                                    năng;</p>
                                <p style="margin: 0;font-size: 14px;">- Công nghệ sử dụng: PHP, MySQL, Bootstrap, HTML CSS </p>
                                <p style="margin: 0;font-size: 14px;">- Githup: github.com/congtuyen791/TTA_du_an_1</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="box_cv">
                    <h3 style="text-align: center;font-size: 18px; font-weight: 500; text-transform: uppercase;">Hoạt động</h3>
                    <span class="bd_cv"></span>
                    <div class="box_2_cv" style="margin-bottom: 30px;">
                        <div class="mt">
                            <div class="title_cv" style="margin-top: 30px;display: flex;align-items: center;justify-content: flex-start;gap: 10px;font-size: 14px;">
                                <i class="fa-solid fa-briefcase" style="color: #ebad00;"></i>
                                <h4 style="font-size: 14px;margin: 0; color: #284350;">TÌNH NGUYỆN VIÊN</h4>
                                <span style="font-size: 14px; font-weight: 100; padding-left:30px;">// <strong>2014</strong>-<strong>Hiện tại</strong></span>
                            </div>
                            <div class="h4" style="font-size: 14px;margin-top: 10px;">Nhóm tình nguyện TOPCV</div>
                            <div class="mt_cv">
                                <p>Tập hợp các món quà và phân phát tới người vô gia cư.</p>
                                <p>Chia sẻ, động viên họ vượt qua giai đoạn khó khăn, giúp họ có những suy nghĩ
                                    lạc quan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_cv">
                    <h3 style="text-align: center; font-size: 18px; font-weight: 500; text-transform: uppercase;">dự án</h3>
                    <span class="bd_cv"></span>
                    <div class="box_2_cv" style="margin-bottom: 30px;">
                        <div class="mt">
                            <div class="title_cv" style="margin-top: 30px;display: flex;align-items: center;justify-content: flex-start;gap: 10px;font-size: 14px;">
                                <i class="fa-solid fa-briefcase" style="color: #ebad00;"></i>
                                <h4 style="font-size: 14px;margin: 0; color: #284350;">QUẢN TRỊ DOANH NGHIỆP</h4>
                                <span style="font-size: 14px; font-weight: 100; padding-left:30px;">// <strong>2014</strong>-<strong>Hiện tại</strong></span>
                            </div>
                            <div class="h4" style="font-size: 14px;margin-top: 10px;">RAINWAY GROUP</div>
                            <div class="mt_cv">
                                <p>Khách hàng: ANZ TOPCV</p>
                                <p>Số lượng người tham gia : 8</p>
                                <h4>Vị trí : Lập trình viên</h4>
                                <p style="margin: 0;font-size: 14px;">- Phân tích và thiết kế hệ thống
                                <p style="margin: 0;font-size: 14px;">- Phát triển module</p>
                                <p style="margin: 0;font-size: 14px;">- Tối ưu code</p>
                                <p style="margin: 0;font-size: 14px;">- Sửa lỗi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
