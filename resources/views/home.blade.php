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
                        <a class="button-default" href="/gioi-thieu">@lang('page.tim-hieu-them')</a>          
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
                            <h3>@lang('page.dich-vu')</h3>
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
                            <h4><a href="/xuat-khau-lao-dong">@lang('page.xuat-khau-lao-dong')</a></h4>
                            <div class="single-item-text-info"></div>
                            <p>@lang('page.intro.xuat-khau-lao-dong')</p>
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
                            <a href="/xuat-khau-lao-dong" class="button-default">@lang('page.tim-hieu-ngay')</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="/du-hoc"><img src="/app/img/course/z2140290395188_43e297e49247ac53cb26dd86e2aea013.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="/du-hoc">@lang('page.du-hoc')</a></h4>
                            <div class="single-item-text-info"></div>
                            <p>@lang('page.intro.du-hoc')</p>
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
                            <a href="/du-hoc" class="button-default">@lang('page.tim-hieu-ngay')</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="/dao-tao-ngoai-ngu"><img src="/app/img/course/z2140290401365_c2a75446bdb4c996863e60b35a63b187.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="/dao-tao-ngoai-ngu">@lang('page.dao-tao-ngoai-ngu')</a></h4>
                            <div class="single-item-text-info"></div>
                            <p>@lang('page.intro.dao-tao-ngoai-ngu')</p>
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
                            <a href="/dao-tao-ngoai-ngu" class="button-default">@lang('page.tim-hieu-ngay')</a>
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
                            <h3>@lang('page.thong-tin-don-hang')</h3>
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
                                    <th>@lang('page.tieu-de')</th>
                                    <th>@lang('page.muc-luong')</th>
                                    <th>@lang('page.ngay-phong-van')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $field)
                                    <tr>
                                        <td><a href="/don-hang/{{ $field->slug }}"><h6>{{ $field->title }}<img src="/app/img/posts/new.gif" alt="New"></h6></a>
                                            <p style="margin: 15px 0px 5px;font-size: 12px;">
                                                <i class="fa fa-map-marker"></i> {{ $field->post->order->work_place ?? null }} | Hạn nộp hồ sơ: <i class="fa fa-calendar"></i> {{ $field->post->order->interview ?? null }}
                                            </p>
                                        </td>
                                        <td>{{ number_format($field->post->order->income) }}VNĐ</td>
                                        <td>{{ $field->post->order->expired }}</td>
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
    @if($news->count())
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
                                    <a href="/tin-tuc/{{ $new->slug }}"><img src="{{ url('storage/'.$new->picture) }}" alt=""></a>
                                </div>
                                <div class="single-latest-text">
                                    <h3><a href="/tin-tuc/{{ $new->slug }}">{{ \Str::limit($new->title, 40) }}</a></h3>
                                    <div class="single-item-comment-view">
                                       <span><i class="zmdi zmdi-calendar-check"></i>{{ date('d-m-Y', strtotime($new->post->created_at)) }}</span>
                                   </div>
                                   <p>&nbsp;</p>
                                   <a href="/tin-tuc/{{ $new->slug }}" class="button-default">Xem ngay</a>
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
    @if($event->count())
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
                                    <a href="/su-kien/{{ $e->slug }}">
                                        <img src="{{ url('storage/' . $e->picture) }}" alt="">
                                        <span><span>{{ date('d', strtotime($e->created_at)) }}</span>{{ date('F', strtotime($e->created_at)) }}</span>
                                    </a>
                                </div>
                                <div class="single-event-text">
                                    <h3><a href="/su-kien/{{ $e->slug }}">{{ $e->title }}</a></h3>
                                   <a class="button-default" href="/su-kien/{{ $e->slug }}">Xem ngay</a>
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