@extends('layouts.web')
@section('section')
    <!--Slider Area Start-->
    <div class="slider-area slider-two">
        <div class="preview-2">
            <div id="slider" class="nivoSlider">
                <img src="/app/img/slider/1.jpg" alt="" title="#nivo-1"/>
                <img src="/app/img/slider/z2099809307059_be54a9c8b246e07b2e9d7b721d82c9c0.jpg" alt="" title="#nivo-2"/>
                <img src="/app/img/slider/z2099809310051_7afb3f1d6b754009c86546d4f544205f.jpg" alt="" title="#nivo-3"/>
                <img src="/app/img/slider/z2099809310052_cddddec10e84082e578407f01cc1ce3e.jpg" alt="" title="#nivo-4"/>
                <img src="/app/img/slider/z2099809310053_921d931654c784d0b12a2f1a18c4acb4.jpg" alt="" title="#nivo-5"/>
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
                        <h3>@lang('page.about-us')</h3>
                        <p>@lang('page.about-us-description')</p>
                        <a class="button-default" href="/gioi-thieu">Tìm hiểu thêm</a>          
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
                            <h3>@lang('page.service')</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="/xuat-khau-lao-dong"><img src="/app/img/course/z2140290408274_985e6f7c04c709ffc91f306b578519e2.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="/xuat-khau-lao-dong">@lang('page.menu_titles.labor-export')</a></h4>
                            <div class="single-item-text-info"></div>
                            <p>@lang('page.intro.labor-export')</p>
                            <div class="single-item-content">
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
                            <a href="/xuat-khau-lao-dong" class="button-default">Tìm hiểu ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="/du-hoc"><img src="/app/img/course/z2140290395188_43e297e49247ac53cb26dd86e2aea013.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="/du-hoc">@lang('page.menu_titles.study-abroad')</a></h4>
                            <div class="single-item-text-info"></div>
                            <p>@lang('page.intro.study-abroad')</p>
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
                            <a href="/du-hoc" class="button-default">Tìm hiểu ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="/dao-tao-ngoai-ngu"><img src="/app/img/course/z2140290401365_c2a75446bdb4c996863e60b35a63b187.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="/dao-tao-ngoai-ngu">@lang('page.menu_titles.foreign-languages-training')</a></h4>
                            <div class="single-item-text-info"></div>
                            <p>@lang('page.intro.foreign-languages-training')</p>
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
                            <a href="/dao-tao-ngoai-ngu" class="button-default">Tìm hiểu ngay</a>
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
                                @foreach($orders as $post)
                                    <tr>
                                        <td><a href="{{ $post->url }}"><h6>{{ $post->title }}<img src="/app/img/posts/new.gif" alt="New"></h6></a>
                                            <p style="margin: 15px 0px 5px;font-size: 12px;">
                                                <i class="fa fa-map-marker"></i> {{ $post->field->work_place ?? null }} | Hạn nộp hồ sơ: <i class="fa fa-calendar"></i> {{ $post->field->interview ?? null }}
                                            </p>
                                        </td>
                                        <td>{{ number_format($post->field->income) }}VNĐ</td>
                                        <td>{{ $post->field->expired }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            @if($orders->count() > 0)
                                <tfoot>
                                    <tr style="text-align: right">
                                        <td colspan="3">
                                            <a href="/xuat-khau-lao-dong" class="btn btn-link">Xem thêm</a>
                                        </td>
                                    </tr>
                                </tfoot>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->   
    <!--Latest News Area Start--> 
    @if($news->count() > 0)
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
                    @foreach($news as $new)
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="single-latest-item">
                                <div class="single-latest-image">
                                    <a href="{{ $new->url }}"><img src="{{ url('storage/'.$new->picture) }}" alt=""></a>
                                </div>
                                <div class="single-latest-text">
                                    <h3><a href="{{ $new->url }}">{{ $new->title }}</a></h3>
                                    <div class="single-item-comment-view">
                                       <span><i class="zmdi zmdi-calendar-check"></i>{{ date('d-m-Y', strtotime($new->created_at)) }}</span>
                                   </div>
                                   <p>&nbsp;</p>
                                   {{-- <p>{!! \Str::limit($new->description, 120) !!}</p> --}}
                                   <a href="{{ $new->url }}" class="button-default">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <!--End of Latest News Area-->
    <!--Event Area Start-->
    @if($event->count() > 0)
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
                    @foreach($event as $e)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-event-item">
                                <div class="single-event-image">
                                    <a href="{{ $e->url }}">
                                        <img src="{{ url('storage/' . $e->picture) }}" alt="">
                                        <span><span>{{ date('d', strtotime($e->created_at)) }}</span>{{ date('F', strtotime($e->created_at)) }}</span>
                                    </a>
                                </div>
                                <div class="single-event-text">
                                    <h3><a href="{{ $e->url }}">{{ $e->title }}</a></h3>
                                    {{-- <div class="single-item-comment-view">
                                       <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                       <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                                   </div> --}}
                                   <p>{!! $e->description !!}</p>
                                   <a class="button-default" href="{{ $e->url }}">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!--End of Event Area-->
@endsection