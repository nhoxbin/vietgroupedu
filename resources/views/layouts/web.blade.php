<!doctype html>
<html class="no-js" lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ (isset($page) ? __('page.'.$page) : 'Trang chủ') . ' || ' . config('app.name', 'Laravel') }}</title>
        <meta property="og:locale" content="vi_VN">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta name="description" content="VietGroupEdu l&#224; c&#244;ng ty TƯ VẤN - Đ&#192;O TẠO - CUNG ỨNG thực tập sinh, kỹ sư l&#224;m việc tại Nhật Bản. Lu&#244;n kh&#244;ng ngừng ho&#224;n thiện trong c&#225;c dịch vụ cung cấp nh&#226;n lực, phấn đấu v&#224; kh&#244;ng ngừng t&#236;m kiếm c&#225;c cơ hội tốt hơn cho người lao động Việt Nam.">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="/app/img/logo/icon.png">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
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

        <!-- App Vue Styles
        ============================================ -->
        <link href="{{ asset('css/app.css') }}?t=<?= time() ?>" rel="stylesheet">
	    
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

        @routes
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper" id="app">
            <!--Bg White Start-->
            <div class="bg-white">
                @include('layouts.blocks.header')

                @yield('section')

                @include('layouts.blocks.footer')
            </div>   
            <!--End of Bg White-->
        </div>
        <!--End of Main Wrapper Area-->

        {{-- this line use for not to conflict slider --}}
        @if(request()->path() != '/')
            <!-- App Vue Scripts
            ============================================ -->
            <script src="{{ asset('js/app.js') }}?t=<?= time() ?>" defer></script>
        @endif

        <!-- Modernizr JS
        ============================================ -->        
        <script src="/app/js/vendor/modernizr-2.8.3.min.js"></script>

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
        
        <script src="/app/js/vendor/jquery.nivo.slider.js"></script>
        <script src="/app/js/vendor/jquery.nivo.slider.pack.js"></script>

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