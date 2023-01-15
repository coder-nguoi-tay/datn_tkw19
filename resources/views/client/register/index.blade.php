<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <script src="{{ asset('js/adminApp.js') }}" defer></script>
 <script>
     window.Laravel = {!! json_encode(
         [
             'csrfToken' => csrf_token(),
             'baseUrl' => url('/'),
         ],
         JSON_UNESCAPED_UNICODE,
     ) !!};
 </script>
 <div class="container">
     <div class="row">
         <div class="left">
             <div class="bodyLeft" id="app">
                 <div class="logo">
                     <img src="http://127.0.0.1:8000/images/Logo.png" alt="">
                 </div>

                 <div class="text">
                     <h2>Chào mừng bạn trở lại với chúng tôi,</h2>
                     <p class="fw-lighter">Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội sự nghiệp lý tưởng
                     </p>
                 </div>
                 <div class="form">
                     <client-register
                         :data="{{ json_encode([
                             'urlStore' => route('owner.update.register'),
                             'message' => $message ?? '',
                             'request' => $request ?? '',
                         ]) }}">
                         <client-register>
                 </div>
                 @if (session()->get('Message.flash'))
                     <popup-alert :data="{{ json_encode(session()->get('Message.flash')[0]) }}">
                     </popup-alert>
                 @endif
                 @php
                     session()->forget('Message.flash');
                 @endphp
                 <p class="text_a">Hoặc</p>

                 <div class="d-grid gap-2 d-md-block">
                     <button class="btn btn-primary" type="button">Facebook</button>
                     <button class="btn btn-danger" type="button">Google</button>
                     <button class="btn btn-info" type="button">Twitter</button>
                 </div>
                 <div class="register">
                     <p>Bạn đã có tài khoản? <a href="{{ route('owner.index') }}" class="text-success">Đăng nhập
                             ngay</a>
                     </p>
                 </div>
             </div>
         </div>
         <div class="right">
             <div class="images">
                 <img src="http://127.0.0.1:8000/images/sec-safe.png" alt="" class="starbucks">
             </div>
             <ul class="thumb">
                 <li><img src="http://127.0.0.1:8000/images/sec-safe.png"
                         onclick="imgSlider('http://127.0.0.1:8000/images/sec-safe.png')" alt="">
                 </li>
                 <li><img src="http://127.0.0.1:8000/images/tool-cv.png"
                         onclick="imgSlider('http://127.0.0.1:8000/images/tool-cv.png')" alt=""></li>
                 <li><img src="http://127.0.0.1:8000/images/support.png"
                         onclick="imgSlider('http://127.0.0.1:8000/images/support.png')" alt=""></li>
             </ul>
         </div>

     </div>
 </div>
 <script type="text/javascript">
     function imgSlider(anything) {
         document.querySelector('.starbucks').src = anything;
     }
 </script>
