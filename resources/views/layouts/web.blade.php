<!doctype html>
<html class="no-js" lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || {{ config('app.name', 'Laravel') }}</title>
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


                @yield('section')


                <!--Newsletter Area Start-->
                {{-- <div class="newsletter-area">
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
                </div> --}}
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
                                    <p style="font-weight: bold; color: orange; font-size: 22px; font-family: emoji">VỮNG BƯỚC VƯƠN XA</p>
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
                                    <a href="tel:080-7348-6789"><i class="fa fa-phone"></i>080-7348-6789</a>
                                    <span><i class="fa fa-envelope"></i>info@vietgroupedu.com</span>
                                    <span><i class="fa fa-globe"></i>{{ url('/') }}</span>
                                    <span><i class="fa fa-map-marker"></i>Prestige k2-101, 2074-24 Hiharu, Thành phố Kumagaya, Tỉnh Saitama</span>
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
                                <span>Copyright &copy; VietgroupEdu 2020.All right reserved.Created by <a href="#">VietgroupEdu</a></span>
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