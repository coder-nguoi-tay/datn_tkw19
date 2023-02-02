<div class=" box-send-mail"
    style=" margin: 0;
            padding: 25px;
            background-color: rgb(243, 243, 243);
            width: 100%;
            height: auto;">

    <div class=" box-mail"
        style=" background: white;
            margin: 40px 0px 40px 0px;
            width: 80%;
            height: 500px;
            margin-left: 10%;
            text-align: justify;">
        <br>
        <img src="/public/assets/img/logo_it.jpg" alt="logo" class="logo"
            style="width: 150px; height: 50px; margin-left: 42%;" />
        <br>
        <div class="mail-content" style="  padding: 30px;">
            đã có một ứng viên đã ướng tuyển vào bìa viết của bạn
            {{ $data['job']['title'] }} <br>
            <a href="{{ route('employer.new.showdetai', $data['job']['id']) }}">xem chi tiết</a>
        </div>
    </div>

</div>
