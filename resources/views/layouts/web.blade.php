<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ env('APP_NAME', '') }} || </title>
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
                                                    <li><a href="courses.html">Dịch vụ</a>
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
                                                        <a href="{{ url('/contact') }}">Liên hệ</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <ul class="header-search">
                                            <li class="search-menu">
                                                <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                                            </li>
                                        </ul>
                                        <!--Search Form-->
                                        <div class="search">
                                            <div class="search-form">
                                                <form id="search-form" action="#">
                                                    <input type="search" placeholder="Search here..." name="search" />
                                                    <button type="submit">
                                                        <span><i class="fa fa-search"></i></span>
                                                    </button>
                                                </form>                                
                                            </div>
                                        </div>
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
                                                <li><a href="/">Trang Chủ</a>
                                                    <ul>
                                                        <li><a href="index.html">Slider Style 1</a></li>
                                                        <li><a href="index-2.html">Slider Style 2</a></li>
                                                        <li><a href="index-3.html">Background Image</a></li>
                                                        <li><a href="index-4.html">Image Overlay Light</a></li>
                                                        <li><a href="index-5.html">Image Overlay Dark</a></li>
                                                        <li><a href="index-6.html">Menu With Slider</a></li>
                                                        <li><a href="index-7.html">Menu With Image</a></li>
                                                        <li><a href="index-8.html">Menu With Overlay</a></li>
                                                        <li><a href="index-9.html">Video Background</a></li>
                                                        <li><a href="index-10.html">Fixed Image</a></li>
                                                        <li><a href="index-11.html">Overlay Fixed Image</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="courses.html">Courses</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="courses-details.html">Courses Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-grid.html">Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="event.html">Event</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="event-details.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="index.html">Shortcode</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shortcode-course.html">Courses</a></li>
                                                        <li><a href="shortcode-event.html">Event</a></li>
                                                        <li><a href="shortcode-latest-news.html">Latest News</a></li>
                                                        <li><a href="shortcode-product.html">Product</a></li>
                                                        <li><a href="shortcode-testimonial.html">Testimonial</a></li>
                                                        <li><a href="shortcode-contact-form.html">Contact Form</a></li>
                                                        <li><a href="shortcode-map.html">Map</a></li>
                                                        <li><a href="shortcode-facts.html">Facts</a></li>
                                                        <li><a href="image-gallery.html">Image Gallery</a></li>
                                                        <li><a href="video-gallery.html">Video Gallery</a></li>
                                                        <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                        <li><a href="shortcode-button.html">Button</a></li>
                                                        <li><a href="shortcode-breadcrumbs.html">Breadcrumb</a></li>
                                                        <li><a href="shortcode-dropdown.html">Dropdown</a></li>
                                                        <li><a href="shortcode-pagination.html">Pagination</a></li>
                                                        <li><a href="shortcode-progressbar.html">Progressbar</a></li>
                                                        <li><a href="text-animation-1.html">Text Animation 1</a></li>
                                                        <li><a href="text-animation-2.html">Text Animation 2</a></li>
                                                        <li><a href="text-animation-3.html">Text Animation 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="latest-news.html">Latest News</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="news-details.html">News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="index.html">Features</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Sliders</a>
                                                            <ul>
                                                                <li><a href="slider-style-1.html">Slider Style 1</a></li>
                                                                <li><a href="slider-style-2.html">Slider Style 2</a></li>
                                                                <li><a href="slider-style-3.html">Slider Style 3</a></li>
                                                                <li><a href="background-image.html">Image Background </a></li>
                                                                <li><a href="image-overlay-light.html">Overlay Light </a></li>
                                                                <li><a href="image-overlay-dark.html">Overlay Dark </a></li>
                                                                <li><a href="video-background.html">Video Background </a></li>
                                                                <li><a href="fixed-image.html">Fixed Image</a></li>
                                                                <li><a href="overlay-fixed-image.html">Overlay Fixed Image</a></li>
                                                                <li><a href="text-animation-1.html">Text Animation 1 </a></li>
                                                                <li><a href="text-animation-2.html">Text Animation 2 </a></li>
                                                                <li><a href="text-animation-3.html">Text Animation 3 </a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Menu Style</a>
                                                            <ul>
                                                                <li><a href="theme-menu-1.html">Theme Menu 1</a></li>
                                                                <li><a href="theme-menu-2.html">Theme Menu 2</a></li>
                                                                <li><a href="theme-menu-3.html">Theme Menu 3</a></li>
                                                                <li><a href="without-top-bar.html">Without Top Bar</a></li>
                                                                <li><a href="menu-center.html">Menu Center</a></li>
                                                                <li><a href="menu-transparent.html">Transparent</a></li>
                                                                <li><a href="menu-semi-transparent.html">Semi Transparent</a></li>
                                                                <li><a href="menu-dark.html">Menu Dark</a></li>
                                                                <li><a href="borderd-menu.html">Menu Border</a></li>
                                                                <li><a href="menu-top-border.html">Top Border Hover</a></li>
                                                                <li><a href="menu-sticky.html">Menu Sticky</a></li>
                                                                <li><a href="menu-non-sticky.html">Menu Non Sticky</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Page Title</a>
                                                            <ul>
                                                                <li><a href="breadcrumb-dark.html">Title Dark</a></li>
                                                                <li><a href="breadcrumb-fixed.html">Title Fixed</a></li>
                                                                <li><a href="breadcrumb-image.html">Title Image</a></li>
                                                                <li><a href="breadcrumb-transparent.html">Title Transparent</a></li>
                                                                <li><a href="breadcrumb-left.html">Title Left</a></li>
                                                                <li><a href="breadcrumb-right.html">Title Right</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Footer Style</a>
                                                            <ul>
                                                                <li><a href="footer-style-1.html">Footer Style 1</a></li>
                                                                <li><a href="footer-style-2.html">Footer Style 2</a></li>
                                                                <li><a href="footer-style-3.html">Footer Style 3</a></li>
                                                                <li><a href="footer-style-4.html">Footer Style 4</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact us</a></li>
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
                <!-- <div class="background-area no-animation">
                    <img src="/app/img/slider/1.jpg" alt="banner-logo" class="banner-logo" />
                    <div class="banner-content static-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content-wrapper text-center full-width">
                                        <div class="text-content table-cell">
                                            <h1 class="title1 text-center mb-20">
                                                <span class="tlt block" data-in-effect="flipInX" data-out-effect="flipOutX" ></span>
                                                <span class="tlt block" data-in-effect="bounceInLeft" data-out-effect="bounceOutLeft">Vươn Xa</span>
                                            </h1>
                                            <div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
                                                <a class="button-default inline" href="#">View Courses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div> -->
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
                                                <th>Phỏng vấn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>abc</td>
                                                <td>abc</td>
                                                <td>abc</td>
                                            </tr>
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
        
        <!-- Color Switcher -->
        <!-- <div class="ec-colorswitcher">
            <a class="ec-handle" href="#"><i class="zmdi zmdi-settings"></i></a>
            <h3>Style Switcher</h3>
            <div class="ec-switcherarea">
                <h6>Select Layout</h6>
                <div class="layout-btn">
                    <a href="#" class="ec-boxed"><span>Boxed</span></a>
                    <a href="#" class="ec-wide"><span>Wide</span></a>
                </div>
                <h6>Chose Color</h6>
                <ul class="ec-switcher">
                    <li><a href="#" class="cs-color-1 styleswitch" data-rel="color-one"></a></li>
                    <li><a href="#" class="cs-color-2 styleswitch" data-rel="color-two"></a></li>
                    <li><a href="#" class="cs-color-3 styleswitch" data-rel="color-three"></a></li>
                    <li><a href="#" class="cs-color-4 styleswitch" data-rel="color-four"></a></li>
                    <li><a href="#" class="cs-color-5 styleswitch" data-rel="color-five"></a></li>
                    <li><a href="#" class="cs-color-6 styleswitch" data-rel="color-six"></a></li>
                    <li><a href="#" class="cs-color-7 styleswitch" data-rel="color-seven"></a></li>
                    <li><a href="#" class="cs-color-8 styleswitch" data-rel="color-eight"></a></li>
                    <li><a href="#" class="cs-color-9 styleswitch" data-rel="color-nine"></a></li>
                    <li><a href="#" class="cs-color-10 styleswitch" data-rel="color-ten"></a></li>
                </ul>
                <div class="ec-pattren">
                    <h6>Chose Pattren</h6>
                    <div class="pattren-wrap">
                        <a href="#" data-rel="pattren1" class="styleswitch"><img src="/app/img/ec-pattren/pattren1.jpg" alt=""></a>
                        <a href="#" data-rel="pattren2" class="styleswitch"><img src="/app/img/ec-pattren/pattren2.jpg" alt=""></a>
                        <a href="#" data-rel="pattren3" class="styleswitch"><img src="/app/img/ec-pattren/pattren3.jpg" alt=""></a>
                        <a href="#" data-rel="pattren4" class="styleswitch"><img src="/app/img/ec-pattren/pattren4.jpg" alt=""></a>
                        <a href="#" data-rel="pattren5" class="styleswitch"><img src="/app/img/ec-pattren/pattren5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="ec-background">
                    <h6>Chose Background</h6>
                    <div class="background-wrap">
                        <a href="#" data-rel="background1" class="styleswitch"><img src="/app/img/ec-background/bg-1.jpg" alt=""></a>
                        <a href="#" data-rel="background2" class="styleswitch"><img src="/app/img/ec-background/bg-2.jpg" alt=""></a>
                        <a href="#" data-rel="background3" class="styleswitch"><img src="/app/img/ec-background/bg-3.jpg" alt=""></a>
                        <a href="#" data-rel="background4" class="styleswitch"><img src="/app/img/ec-background/bg-4.jpg" alt=""></a>
                        <a href="#" data-rel="background5" class="styleswitch"><img src="/app/img/ec-background/bg-5.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Color Switcher end -->	
        
        
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