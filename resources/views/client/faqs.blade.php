@php
    use Carbon\Carbon;
@endphp

@extends('client.layout.index')
@section('client')
    <div id="main">
        <div class="heading" style="margin-bottom: 40px;">
            <div class="container">

                <div class="text-center">
                    <br><br>
                    <h2>Các câu hỏi thường gặp khi phỏng vấn</h2>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row page">
                <div class="col-md-12 col-md-offset-1" style="text-align: justify">
                    <div>
                        <h5>1. Nhược điểm của anh/chị là gì?</h5>
                        <p>
                            Đây là câu trả lời nhạy cảm nhất. Nên tối thiểu hoá nhược điểm và nhấn mạnh vào ưu điểm. Tránh
                            những phẩm chất mang tính cá nhân mà tập trung vào khía cạnh chuyên nghiệp. Có thể trả lời “Đôi
                            lúc tôi lo làm việc nhiều quá nên không sắp xếp được thời gian hợp lý”.
                        </p>
                    </div><br>
                    <div>
                        <h5>2. Nếu được nhận vào làm ở vị trí này, anh/chị nghĩ là mình có ưu điểm gì để hoàn thành tốt công
                            việc?</h5>
                        <p>
                            Tùy theo vị trí có câu trả lời phù hợp. Nêu những ưu điểm nổi bật giúp ích cho vị trí dự tuyển
                            cùng với những kỹ năng, kinh nghiệm đã có.
                        </p>
                    </div><br>
                    <div>
                        <h5>3. Tại sao anh/chị muốn làm việc ở đây?</h5>
                        <p>
                            Người phỏng vấn đang muốn nghe câu trả lời cho thấy bạn có đầu tư suy nghĩ chứ không chỉ gửi hồ
                            sơ xin việc đi vì có thông báo tuyển dụng. Ví dụ “Tôi đã chọn ra một số công ty quan trọng có
                            phương châm làm việc phù hợp với khả năng của tôi và công ty này nằm ở vị trí hàng đầu trong
                            danh sách những lựa chọn ưa thích của tôi”.
                        </p>
                    </div><br>
                    <div>
                        <h5>4. Mục tiêu của anh/chị là gì?</h5>
                        <p>
                            Nên nói về mục tiêu trước mắt và ngắn hạn. Ví dụ “ Mục tiêu trước mắt của tôi là có được việc
                            làm phù hợp tại tập đoàn lớn và người lãnh đạo giỏi như công ty. Mục tiêu dài hạn tuỳ thuộc vào
                            mục tiêu của công ty, còn riêng bản thân tôi sẽ tìm ra những cơ hội thăng tiến trong sự nghiệp”.
                        </p>
                    </div><br>
                    <div>
                        <h5>5. Tại sao anh/chị lại chuyển việc?</h5>
                        <p>
                            Sau ba năm trang bị cho mình những kinh nghiệm và kiến thức, tôi quyết định tìm kiếm cho mình
                            một công ty có nhiều cơ hội phát triển để tôi có thể phát huy hết khả năng của mình và thành
                            công hơn.
                        </p>
                    </div><br>
                    <div>
                        <h5>6. Khi nào anh/chị cảm thấy hài lòng với công việc nhất?</h5>
                        <p>
                            Người phỏng vấn muốn biết điều gì có thể tạo động lực cho bạn làm việc và có thể hiểu thêm về sở
                            thích của bạn. “Ở công việc cũ tôi hài lòng nhất là được tiếp xúc với khách hàng, được hiểu họ
                            và giải quyết những khúc mắc của họ để sản phẩm và dịch vụ của công ty tốt hơn và khách hàng hài
                            lòng hơn”.
                        </p>
                    </div><br>
                    <div id="share-link-cv">
                        <h5>7. Anh/chị có thể làm được gì cho chúng tôi?</h5>
                        <p>
                            Hãy tóm tắt ngắn gọn về kinh nghiệm, kỹ năng và cá tính. “Tôi có được sự kết hợp độc đáo giữa kỹ
                            năng bán hàng và khả năng xây dựng mối quan hệ với khách hàng. Điều này cho phép tôi sử dụng vốn
                            kiến thức của mình cùng với kỹ năng giao tiếp khá tốt của tôi.
                        </p>
                    </div><br>
                    <div>
                        <h5>8. Ba điểm tích cực mà người chủ nói về bạn?</h5>
                        <p>
                            Đây là cách tuyệt vời để thể hiện ưu điểm của mình thông qua lời của người khác. “ Sếp tôi từng
                            nói tôi là người chịu khó làm việc và ông ta thích sự năng động, hài hước của tôi”

                        </p>
                    </div><br>
                    <div>
                        <h5>9. Anh/chị đang tìm kiếm mức lương nào?</h5>
                        <p>
                            Bạn được lợi thế khi người phỏng vấn tìm việc làm yêu cầu đưa ra mức lương trước. Tuy nhiên
                            không nên đưa ra một con số cụ thể sẽ khiến nhà tuyển dụng đánh giá bạn chỉ nghĩ đến quyền lợi
                            của mình. “Tôi nghĩ công ty sẽ trả mức lương phù hợp với năng lực và khối lượng công việc của
                            tôi, tôi chắc chắn khi đến lúc, chúng ta sẽ có thể đồng ý một con số hợp lý”.
                        </p>
                    </div><br>
                    <div>
                        <h5>10. Thành tích lớn nhất trong công việc của anh/chị là gì?</h5>
                        <p>
                            Nếu đó là sự thành công thể hiện qua những con số thì trả lời dễ dàng. Nhưng nếu bạn chỉ là một
                            nhân viên thì không nên thổi phồng những cống hiến của mình cho công việc cũ. Bạn có thể trả lời
                            “Thành tích lớn nhất của tôi trong công việc vẫn là dựa vào sự cố gắng của chính bản thân mình.
                            Tôi có thể làm việc độc lập hoặc theo nhóm để cùng nhau hoàn thành tốt mục tiêu của công ty đề
                            ra”.
                        </p>
                    </div><br>

                    <div>
                        Mọi thắc mắc, ý kiến đóng góp vui lòng gửi về email <a
                            class="text-highlight">hungxd1972002@gmail.com</a>
                    </div>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection
