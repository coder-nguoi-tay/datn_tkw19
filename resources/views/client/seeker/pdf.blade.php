<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cv</title>

    <style>
        *{
            padding: 0;
            margin: 0 auto;
            box-sizing: border-box;

        }
        .container{
            position: absolute;
            width: 100%;
            top: 0;
            color: black;
            background: rgb(87, 62, 87);
            height: auto;
            margin: auto;
        }
        .main{
            width: 100%;
            background: rgb(136, 0, 0);
            padding: 10px;
            height: 200px;
            position: relative;
        }
        .left{
            width: 30%;
            background: indianred;
            float: left;
            min-height: 300px;
            height: auto;
            padding: 10px;
        }
        .right{
            float: left;
            width: 67%;
            min-height: 300px;
            height: auto;
            background: rgb(0, 201, 151);
        }
        .left .box_img{
            width: 98%;
            height: 200px;
            border: 2px solid orange;
        }
    </style>
</head>
<body style="width: 100%; margin: 0 auto;">
    <div class="container">
        <table style="position: relative; width:100%; padding: 10px;">
            <td style="width: 30%; background: orchid; padding: 10px; ">
                <div class="box_img" style="overflow: hidden; border: 2px solid rgb(255, 134, 63); width: 100%; height: 200px;">
                    <img src="https://vuongquocanh.com/wp-content/uploads/2018/05/london-eye-800x534.jpg" 
                    alt="anh_cv" style="width: 100%;border:none;"
                    >
                </div>
                
                
            </td>
            <td  style="width: 70%; background: rgb(142, 218, 112);">
            
            
            
            </td>
        </table>
    </div>
    {{-- <div class="main">
        <div class="left">
            <div class="box_img" style="overflow: hidden;">
                <img src="https://vuongquocanh.com/wp-content/uploads/2018/05/london-eye-800x534.jpg" alt="anh_cv" style="width: 100%;border:none;">
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
        </div>
        <div class="right">
    
        </div>
    </div> --}}
</body>
</html>