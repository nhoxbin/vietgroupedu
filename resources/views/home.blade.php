@extends('layouts.web')
@section('section')
    <!--Slider Area Start-->
    <div class="slider-area slider-two">
        <div class="preview-2">
            <div id="slider" class="nivoSlider">
                <img src="/app/img/slider/1.jpg" alt="" title="#slider-1-caption1"/>
                {{-- <img src="/app/img/slider/4.jpg" alt="" title="#slider-1-caption2"/> --}}
            </div>
            <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                <div class="banner-content slider-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-center">
                                        <h1 class="title1 wow fadeInUp border-none" data-wow-duration="2000ms" data-wow-delay="0s">Vững Bước <br>
                                        Vươn Xa</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            {{-- <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                <div class="banner-content slider-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content-wrapper">
                                    <div class="text-content slide-2 text-center">
                                        <h1 class="title1 wow rotateInDownLeft border-none" data-wow-duration="1000ms" data-wow-delay="0s">Vững Bước<br>
                                        Vươn Xa</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}  
        </div>
    </div>
    <!--End of Slider Area-->
    <!--About Area Start-->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="about-container">
                        <h3>Về chúng tôi</h3>
                        <p>
                            Trong việc phái cử thực tập sinh sang Nhật làm việc, VietGroupEdu là đơn vị hàng đầu cung cấp việc làm tại
                            Nhật Bản với quy mô toàn quốc, chúng tôi đã phái cử hơn 5000 thực tập sinh đến Nhật làm việc và liên kết với hơn
                            500 doanh nghiệp Nhật Bản trong và ngoài nước. VietGroupEdu luôn tâm niệm rằng, công việc xây dựng ước mơ và định hướng
                            tương lai của mỗi lao động Việt là vô cùng quan trọng, nên chúng tôi luôn không ngừng nỗ lực để hỗ trợ lao động
                            Việt Nam bằng sự chuyên nghiệp, hiệu quả, tận tâm và tạo ra các giá trị bền vững, phát triển lâu dài. Tại VietGroupEdu,
                            chúng tôi luôn hiểu rõ khả năng và trách nhiệm của mình đối với người lao động và cộng đồng xã hội
                        </p>
                        <a class="button-default" href="#">Tìm hiểu thêm</a>          
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of About Area-->
    <!--Course Area Start-->
    <div class="course-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Dịch vụ</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect" style="width: 300px; height: 211px;">
                            <a href="#"><img src="/app/img/course/2.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="#">Xuất khẩu lao động</a></h4>
                            <div class="single-item-text-info"></div>
                            <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo ur,There are many but the mri have suffered alteration in some </p>
                            <div class="single-item-content">
                               {{-- <div class="single-item-comment-view">
                                   <span><i class="zmdi zmdi-eye"></i>59</span>
                                   <span><i class="zmdi zmdi-comments"></i>19</span>
                               </div> --}}
                               <div class="single-item-rating">
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star-half"></i>
                               </div>
                            </div>   
                        </div>
                        <div class="button-bottom">
                            <a href="#" class="button-default">Tìm hiểu ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="#"><img src="/app/img/course/1.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="#">Du Học</a></h4>
                            <div class="single-item-text-info"></div>
                            <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo ur,There are many but the mri have suffered alteration in some </p>
                            <div class="single-item-content">
                               {{-- <div class="single-item-comment-view">
                                   <span><i class="zmdi zmdi-eye"></i>59</span>
                                   <span><i class="zmdi zmdi-comments"></i>19</span>
                               </div> --}}
                               <div class="single-item-rating">
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star-half"></i>
                               </div>
                            </div>   
                        </div>
                        <div class="button-bottom">
                            <a href="#" class="button-default">Tìm hiểu ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="#"><img src="/app/img/course/3.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="#">Đào tạo ngoại ngữ</a></h4>
                            <div class="single-item-text-info"></div>
                            <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo ur,There are many but the mri have suffered alteration in some </p>
                            <div class="single-item-content">
                               {{-- <div class="single-item-comment-view">
                                   <span><i class="zmdi zmdi-eye"></i>59</span>
                                   <span><i class="zmdi zmdi-comments"></i>19</span>
                               </div> --}}
                               <div class="single-item-rating">
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star"></i>
                                   <i class="zmdi zmdi-star-half"></i>
                               </div>
                            </div>   
                        </div>
                        <div class="button-bottom">
                            <a href="#" class="button-default">Tìm hiểu ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Course Area-->
    <div class="order">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>thông tin đơn hàng</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 justify-content-center">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Ngành nghề</th>
                                    <th>Mức lương</th>
                                    <th>Ngày phỏng vấn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td><h6>{{ $post->title }}<img src="/app/img/posts/new.gif" alt="New"></h6>
                                            <p style="margin: 15px 0px 5px;font-size: 12px;">
                                                <i class="fa fa-map-marker"></i> {{ $post->work_place }} | Hạn nộp hồ sơ: <i class="fa fa-calendar"></i> {{ $post->interview }}
                                            </p>
                                        </td>
                                        <td>{{ $post->income }}</td>
                                        <td>{{ $post->interview }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->   
    <!--Latest News Area Start--> 
    <div class="latest-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Tin Tức</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-latest-item">
                        <div class="single-latest-image">
                            <a href="#"><img src="/app/img/latest/1.jpg" alt=""></a>
                        </div>
                        <div class="single-latest-text">
                            <h3><a href="#">Learn English in ease</a></h3>
                            <div class="single-item-comment-view">
                               <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                               <span><i class="zmdi zmdi-eye"></i>59</span>
                               <span><i class="zmdi zmdi-comments"></i>19</span>
                           </div>
                           <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                           <a href="#" class="button-default">LEARN Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-latest-item">
                        <div class="single-latest-image">
                            <a href="#"><img src="/app/img/latest/2.jpg" alt=""></a>
                        </div>
                        <div class="single-latest-text">
                            <h3><a href="#">Learn English in ease</a></h3>
                            <div class="single-item-comment-view">
                               <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                               <span><i class="zmdi zmdi-eye"></i>59</span>
                               <span><i class="zmdi zmdi-comments"></i>19</span>
                           </div>
                           <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                           <a href="#" class="button-default">LEARN Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-latest-item">
                        <div class="single-latest-image">
                            <a href="#"><img src="/app/img/latest/3.jpg" alt=""></a>
                        </div>
                        <div class="single-latest-text">
                            <h3><a href="#">Learn English in ease</a></h3>
                            <div class="single-item-comment-view">
                               <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                               <span><i class="zmdi zmdi-eye"></i>59</span>
                               <span><i class="zmdi zmdi-comments"></i>19</span>
                           </div>
                           <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                           <a href="#" class="button-default">LEARN Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="single-latest-item">
                        <div class="single-latest-image">
                            <a href="#"><img src="/app/img/latest/4.jpg" alt=""></a>
                        </div>
                        <div class="single-latest-text">
                            <h3><a href="#">Learn English in ease</a></h3>
                            <div class="single-item-comment-view">
                               <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                               <span><i class="zmdi zmdi-eye"></i>59</span>
                               <span><i class="zmdi zmdi-comments"></i>19</span>
                           </div>
                           <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                           <a href="#" class="button-default">LEARN Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Latest News Area-->
    <!--Event Area Start-->
    <div class="event-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Sự Kiện</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-event-item">
                        <div class="single-event-image">
                            <a href="#">
                                <img src="/app/img/event/1.jpg" alt="">
                                <span><span>15</span>Jun</span>
                            </a>
                        </div>
                        <div class="single-event-text">
                            <h3><a href="#">Learn English in ease</a></h3>
                            <div class="single-item-comment-view">
                               <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                               <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                           </div>
                           <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                           <a class="button-default" href="#">LEARN Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-event-item">
                        <div class="single-event-image">
                            <a href="#">
                                <img src="/app/img/event/2.jpg" alt="">
                                <span><span>20</span>Apr</span>
                            </a>
                        </div>
                        <div class="single-event-text">
                            <h3><a href="#">Learn English in ease</a></h3>
                            <div class="single-item-comment-view">
                               <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                               <span><i class="zmdi zmdi-pin"></i>Jessore Bangladesh</span>
                           </div>
                           <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                           <a class="button-default" href="#">LEARN Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-event-item">
                        <div class="single-event-image">
                            <a href="#">
                                <img src="/app/img/event/3.jpg" alt="">
                                <span><span>06</span>Dec</span>
                            </a>
                        </div>
                        <div class="single-event-text">
                            <h3><a href="#">Learn English in ease</a></h3>
                            <div class="single-item-comment-view">
                               <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                               <span><i class="zmdi zmdi-pin"></i>Dhaka. Bangladesh</span>
                           </div>
                           <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                           <a class="button-default" href="#">LEARN Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Event Area-->
@endsection