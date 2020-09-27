<!doctype html>
<html class="no-js" lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || {{ env('APP_NAME', '') }}</title>
        <meta property="og:locale" content="vi_VN">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta name="description" content="VietGroupEdu l&#224; c&#244;ng ty TƯ VẤN - Đ&#192;O TẠO - CUNG ỨNG thực tập sinh, kỹ sư l&#224;m việc tại Nhật Bản. Lu&#244;n kh&#244;ng ngừng ho&#224;n thiện trong c&#225;c dịch vụ cung cấp nh&#226;n lực, phấn đấu v&#224; kh&#244;ng ngừng t&#236;m kiếm c&#225;c cơ hội tốt hơn cho người lao động Việt Nam.">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="/app/img/logo/icon.png">
		
		<!-- Google Fonts
		============================================ -->		
        <!-- <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700' rel='stylesheet' type='text/css'> -->
        
		<!-- Color Swithcer CSS
		============================================ -->
        <!-- <link rel="stylesheet" href="css/color-switcher.css"> -->
        
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="/app/css/font-awesome.min.css">
        
		<!-- Metarial Iconic Font CSS
		============================================ -->
        <link rel="stylesheet" href="/app/css/material-design-iconic-font.min.css">
        
        <!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="/app/css/bootstrap.min.css">
        
		<!-- Plugins CSS
		============================================ -->
        <link rel="stylesheet" href="/app/css/plugins.css">
        
		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="/app/style.css?t=<?= time() ?>">
        <link rel="stylesheet" href="/app/mystyle.css?t=<?= time() ?>">
        <link rel="stylesheet" href="/app/phone-ring.css?t=<?= time() ?>">
        
		<!-- Color CSS
		============================================ -->
        <link rel="stylesheet" href="/app/css/color.css">
        
		<!-- Responsive CSS
		============================================ -->
        <link rel="stylesheet" href="/app/css/responsive.css">
        
		<!-- Modernizr JS
		============================================ -->		
        <script src="/app/js/vendor/modernizr-2.8.3.min.js"></script>
	    
        <!-- Color Css Files
		============================================ -->	
        <link rel="alternate stylesheet" type="text/css" href="/app/switcher/color-one.css" title="color-one" media="screen" />

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5f6d70474704467e89f224d6/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header>
                    <div class="header-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-5 d-none d-lg-block d-md-block">
                                    <a href="tel:02862 705 057" class="phone-call">
                                        <span><img src="/app/img/icon/phone-call.svg" alt="phone-call"> 02862 705 057</span>
                                    </a>
                                </div>
                                <div class="col-lg-5 col-md-7 col-12">
                                    <div class="header-top-right">
                                        {{-- <div class="content"><a href="#">Vietnamese</a></div>
                                        <div class="content"><a href="#">Japanese</a></div>
                                        <div class="content"><a href="#">English</a></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-logo-menu sticker">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-12">
                                    <div class="logo">
                                        <a href="/" class="d-flex flex-row justify-content-center">
                                            <img src="/app/img/logo/icon.png" alt="EDUCAT">
                                            <h4 class="text-logo d-flex align-items-center" title="VietGroupEdu">
                                                <span class="text-1">VIET</span>
                                                <span class="text-2">GROUP</span>
                                                <span class="text-3">EDU</span>
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="mainmenu-area pull-right">
                                        <div class="mainmenu d-none d-lg-block">
                                            <nav>
                                                <ul id="nav" class="border-full border-top">
                                                    <li class="current"><a href="/">Trang Chủ</a></li>
                                                    <li><a href="{{ url('/gioi-thieu') }}">Giới thiệu</a></li>
                                                    <li><a href="#">Dịch vụ</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ url('/xuat-khau-lao-dong') }}">Xuất khẩu lao động</a></li>
                                                            <li><a href="{{ url('/du-hoc') }}">Du học</a></li>
                                                            <li><a href="{{ url('/dao-tao-ngoai-ngu') }}">Đào tạo ngoại ngữ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Thông báo</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ url('/tin-tuc') }}">Tin tức</a></li>
                                                            <li><a href="{{ url('/su-kien') }}">Sự kiện</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/lien-he') }}">Liên hệ</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        {{-- <ul class="header-search">
                                            <li class="search-menu">
                                                <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                                            </li>
                                        </ul> --}}
                                        <!--Search Form-->
                                        {{-- <div class="search">
                                            <div class="search-form">
                                                <form id="search-form" action="#">
                                                    <input type="search" placeholder="Search here..." name="search" />
                                                    <button type="submit">
                                                        <span><i class="fa fa-search"></i></span>
                                                    </button>
                                                </form>                                
                                            </div>
                                        </div> --}}
                                        <!--End of Search Form-->
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container clearfix">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="/">Trang Chủ</a></li>
                                                <li><a href="{{ url('/gioi-thieu') }}">Giới thiệu</a></li>
                                                <li><a href="#">Dịch vụ</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ url('/xuat-khau-lao-dong') }}">Xuất khẩu lao động</a></li>
                                                        <li><a href="{{ url('/du-hoc') }}">Du học</a></li>
                                                        <li><a href="{{ url('/dao-tao-ngoai-ngu') }}">Đào tạo ngoại ngữ</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Thông báo</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ url('/tin-tuc') }}">Tin tức</a></li>
                                                        <li><a href="{{ url('/su-kien') }}">Sự kiện</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('/lien-he') }}">Liên hệ</a></li>
                                            </ul>
                                        </nav>
                                    </div>					
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area end -->    
                </header>
                <!--End of Header Area-->
                <!--Slider Area Start-->
                <div class="slider-area slider-two">
                    <div class="preview-2">
                        <div id="nivoslider" class="slides">
                            <img src="/app/img/slider/1.jpg" alt="" title="#slider-1-caption1"/>
                            <img src="/app/img/slider/4.jpg" alt="" title="#slider-1-caption2"/>
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
                        <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
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
                        </div>  
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
                                           <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-eye"></i>59</span>
                                               <span><i class="zmdi zmdi-comments"></i>19</span>
                                           </div>
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
                                           <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-eye"></i>59</span>
                                               <span><i class="zmdi zmdi-comments"></i>19</span>
                                           </div>
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
                                           <div class="single-item-comment-view">
                                               <span><i class="zmdi zmdi-eye"></i>59</span>
                                               <span><i class="zmdi zmdi-comments"></i>19</span>
                                           </div>
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
                <!--Fun Factor Area Start-->
                {{-- <div class="fun-factor-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper white">
                                    <div class="section-title">
                                        <h3>IMPORTANT FACTS</h3>
                                        <p>There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="single-fun-factor">
                                    <h4>Giáo Viên</h4>
                                    <h2><span class="counter">79</span>+</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="single-fun-factor">
                                    <h4>Học Viên</h4>
                                    <h2><span class="counter">120</span>+</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="single-fun-factor">
                                    <h4>Khóa Học</h4>
                                    <h2><span class="counter">36</span>+</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="single-fun-factor">
                                    <h4>Đất nước</h4>
                                    <h2><span class="counter">20</span>+</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                                                            <i class="fa fa-map-marker"></i> {{ $post->work_place }} | 
                                                            <i class="fa fa-calendar"></i> {{ $post->interview }}
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
                <!--Online Product Area Start-->
                {{-- <div class="product-area section-bottom-padding bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Làm việc tại Nhật Bản</h3>
                                        <p>Có cơ hội làm việc và kết nối với đam mê</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product-item">
                                    <div class="single-product-image">
                                        <a href="#"><img src="/app/img/product/thuc-tap-sinh.jpg" alt=""></a>
                                    </div>
                                    <div class="single-product-text">
                                        <h4><a href="#">Thực tập sinh</a></h4>
                                        <h5>Book</h5>
                                        <div class="product-price">
                                            <h3>$ 28</h3>
                                           <div class="single-item-rating">
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star-half"></i>
                                           </div>
                                        </div>
                                        <div class="product-buttons">
                                            <button type="button" class="button-default cart-btn">Đánh giá hồ sơ</button>
                                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product-item">
                                    <div class="single-product-image">
                                        <a href="#"><img src="/app/img/product/ky-su.jpg" alt=""></a>
                                    </div>
                                    <div class="single-product-text">
                                        <h4><a href="#">Kỹ sư</a></h4>
                                        <h5>Book</h5>
                                        <div class="product-price">
                                            <h3>$ 28</h3>
                                           <div class="single-item-rating">
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star-half"></i>
                                           </div>
                                        </div>
                                        <div class="product-buttons">
                                            <button type="button" class="button-default cart-btn">Đánh giá hồ sơ</button>
                                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product-item">
                                    <div class="single-product-image">
                                        <a href="#"><img src="/app/img/product/ky-nang-mac-dinh.jpg" alt=""></a>
                                    </div>
                                    <div class="single-product-text">
                                        <h4><a href="#">Kỹ năng mặc định</a></h4>
                                        <h5>Book</h5>
                                        <div class="product-price">
                                            <h3>$ 28</h3>
                                           <div class="single-item-rating">
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star"></i>
                                               <i class="zmdi zmdi-star-half"></i>
                                           </div>
                                        </div>
                                        <div class="product-buttons">
                                            <button type="button" class="button-default cart-btn">Đánh giá hồ sơ</button>
                                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--End of Online Product Area-->
                <!--Testimonial Area Start-->
                {{-- <div class="testimonial-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 offset-lg-0 col-md-12 col-12">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                        <div class="testimonial-image-slider text-center">
                                            <div class="sin-testiImage">
                                                <img src="/app/img/testimonial/1.png" alt="testimonial 1" />
                                            </div>
                                            <div class="sin-testiImage">
                                                <img src="/app/img/testimonial/1.png" alt="testimonial 2" />
                                            </div>
                                            <div class="sin-testiImage">
                                                <img src="/app/img/testimonial/1.png" alt="testimonial 3" />
                                            </div>
                                            <div class="sin-testiImage">
                                                <img src="/app/img/testimonial/1.png" alt="testimonial 1" />
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="testimonial-text-slider text-center">
                                    <div class="sin-testiText">
                                        <h2>VietGroupEdu</h2>
                                        <p>Giấy chứng nhận đăng kí doanh nghiệp công ty cổ phần.</p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>VietGroupEdu</h2>
                                        <p>Giấy phép đưa Người lao động đi làm việc ở nước ngoài.</p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>VietGroupEdu</h2>
                                        <p>Quyết định thành lập trung tâm ngoại ngữ.</p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>VietGroupEdu</h2>
                                        <p>Giấy chứng nhận đăng kí kinh doanh dịch vụ tư vấn du học.</p>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--End of Testimonial Area-->
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
                <!--Newsletter Area Start-->
                <div class="newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <div class="newsletter-content">
                                    <h3>SUBSCRIBE</h3>
                                    <h2>TO OUR NEWSLETTER</h2>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="newsletter-form angle">
                                    <form action="#" id="mc-form" class="mc-form footer-newsletter fix">
                                        <div class="subscribe-form">
                                            <input id="mc-email" type="email" name="email" placeholder="Enter your email address...">
                                            <button id="mc-submit" type="submit">SUBSCRIBE</button>
                                        </div>    
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre fix pull-right">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Newsletter Area-->
                {{-- phone ring widget area --}}
                <div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
                    <div class="phonering-alo-ph-circle"></div>
                    <div class="phonering-alo-ph-circle-fill"></div>
                    <a href="tel:02862-705-057" class="pps-btn-img" title="Liên hệ">
                        <div class="phonering-alo-ph-img-circle"></div>
                    </a>
                </div>
                {{-- end of phone ring --}}
                <!--Footer Widget Area Start-->
                <div class="footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-footer-widget">
                                    <div class="footer-logo">
                                        <a href="/" class="d-flex flex-row">
                                            <img src="/app/img/logo/icon.png" alt="EDUCAT">
                                            <h4 class="text-logo d-flex align-items-center" title="VietGroupEdu">
                                                <span class="text-1">VIET</span>
                                                <span class="text-2">GROUP</span>
                                                <span class="text-3">EDU</span>
                                            </h4>
                                        </a>
                                    </div>
                                    <p>There are many variations of passg of Lorem Ipsum available, but thmajority have suffered altem, </p>
                                    <div class="social-icons">
                                        <a href="https://www.facebook.com/VietgroupEdu/"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-footer-widget">
                                    <h3>Trụ sở 1</h3>
                                    <a href="tel:02862-705-057"><i class="fa fa-phone"></i>02862-705-057</a>
                                    <span><i class="fa fa-envelope"></i>info@vietgroupedu.com</span>
                                    <span><i class="fa fa-globe"></i>{{ url('/') }}</span>
                                    <span><i class="fa fa-map-marker"></i>11 đường D5, P.25, Q.Bình Thạnh, TP.HCM</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-footer-widget">
                                    <h3>Trụ sở 2</h3>
                                    <a href="tel:02862-705-057"><i class="fa fa-phone"></i>02862-705-057</a>
                                    <span><i class="fa fa-envelope"></i>info@vietgroupedu.com</span>
                                    <span><i class="fa fa-globe"></i>{{ url('/') }}</span>
                                    <span><i class="fa fa-map-marker"></i>33 đường Bùi Quang Là, P.12, Q.Gò Vấp, TP.HCM</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-footer-widget">
                                    <h3 style="font-size: 1.5em">C.Ty Vietgroup Edu tại Nhật</h3>
                                    <a href="tel:02862-705-057"><i class="fa fa-phone"></i>02862-705-057</a>
                                    <span><i class="fa fa-envelope"></i>info@vietgroupedu.com</span>
                                    <span><i class="fa fa-globe"></i>{{ url('/') }}</span>
                                    <span><i class="fa fa-map-marker"></i>33 đường Bùi Quang Là, P.12, Q.Gò Vấp, TP.HCM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Widget Area-->
                <!--Footer Area Start-->
                <footer class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-12">
                                <span>Copyright &copy; Educat 2017.All right reserved.Created by <a href="#">Educat</a></span>
                            </div>
                            <div class="col-lg-6 col-md-5 col-12">
                                <div class="column-right">
                                    <span>Privacy Policy , Terms &amp; Conditions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--End of Footer Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
		<!-- jquery
		============================================ -->
        <script src="/app/js/vendor/jquery-1.12.4.min.js"></script>
        
		<!-- popper JS
		============================================ -->
        <script src="/app/js/popper.min.js"></script>
        
		<!-- bootstrap JS
		============================================ -->
        <script src="/app/js/bootstrap.min.js"></script>
        
		<!-- AJax Mail JS
		============================================ -->
        <script src="/app/js/ajax-mail.js"></script>
        
		<!-- plugins JS
		============================================ -->
        <script src="/app/js/plugins.js"></script>
        
		<!-- owl.carousel JS
		============================================ -->
        <script src="/app/js/owl.carousel.min.js"></script>
        
		<!-- main JS
		============================================ -->
        <script src="/app/js/main.js"></script>
    </body>
</html>