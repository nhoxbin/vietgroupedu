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
                        <div class="content"><a href="{!! route('user.change-language', ['vi']) !!}">Vietnamese</a></div>
                        <div class="content"><a href="{!! route('user.change-language', ['en']) !!}">English</a></div>
                        <div class="content"><a href="{!! route('user.change-language', ['ja']) !!}">Japanese</a></div>
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
                                    <li class="current"><a href="/">@lang('page.menu_titles.home')</a></li>
                                    <li><a href="/gioi-thieu">@lang('page.menu_titles.introduce')</a></li>
                                    <li><a href="/xuat-khau-lao-dong">@lang('page.menu_titles.labor-export')</a></li>
                                    <li><a href="/du-hoc">@lang('page.menu_titles.study-abroad')</a></li>
                                    <li><a href="/dao-tao-ngoai-ngu">@lang('page.menu_titles.foreign-languages-training')</a></li>
                                    <li><a href="/tin-tuc">@lang('page.menu_titles.news')</a></li>
                                    <li><a href="/su-kien">@lang('page.menu_titles.event')</a></li>
                                    <li><a href="/lien-he">@lang('page.menu_titles.contact')</a></li>
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
                                <li><a href="/gioi-thieu">Giới thiệu</a></li>
                                <li><a href="/xuat-khau-lao-dong">Xuất khẩu lao động</a></li>
                                <li><a href="/du-hoc">Du học</a></li>
                                <li><a href="/dao-tao-ngoai-ngu">Đào tạo ngoại ngữ</a></li>
                                <li><a href="/tin-tuc">Tin tức</a></li>
                                <li><a href="/su-kien">Sự kiện</a></li>
                                <li><a href="/lien-he">Liên hệ</a></li>
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