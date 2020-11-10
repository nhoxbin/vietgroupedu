@extends('layouts.web')

@section('section')
<!--News Details Area Start-->
<div class="news-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-12">
                <div class="news-details-content">
                   <div class="single-latest-item">
                        <img src="{{ url('storage/'.$post->picture) }}" alt="">  
                        <div class="single-latest-text">
                            <h3>{{ $post->title }}</h3> 
                            {{-- @if($post->)
                                <div class="quote-section">
                                    <p>but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            @endif --}}
                            {!! $post->description !!}
                            <div class="tags-and-links">
                            	@if($post->keywords)
	                                <div class="related-tag">
	                                    <span>Tag:</span>
	                                    <ul class="tags">
											@foreach(explode(',', $post->keywords) as $k)
	                                        	<li><a href="#">{{ $k }},</a></li>
	                                       	@endforeach
	                                    </ul>
	                                </div>
	                            @endif
                                {{-- <div class="social-links">
                                    <span>Share:</span>
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="comments">
                        <h4 class="title">Comments</h4>
                        <div class="fb-comments" data-href="{{ url()->current() }}" data-numposts="5" data-width="100%"></div>
                    </div>
                </div>    
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="sidebar-widget">
                    <div class="single-sidebar-widget">
                        <h4 class="title">Đơn hàng gần đây</h4>
                        <div class="recent-content">
                            @foreach($recent_post as $post)
                                @php
                                    $url = '/' . ($post->post->type ? 'don-hang' : \Str::slug($post->post->first_cate->title)) . '/' . $post->slug;
                                @endphp
                                <div class="recent-content-item">
                                    <a href="{{ $url }}"><img src="{{ url('storage/' . $post->picture) }}" alt="recent order"></a>
                                    <div class="recent-text">
                                        <h4>
                                            <a href="{{ $url }}">
                                                {{ \Str::limit($post->title, 22) }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if($post->keywords)
	                    <div class="single-sidebar-widget">
	                        <h4 class="title">Từ khóa</h4>
	                        <ul class="tags">
	                        	@foreach(explode(',', $post->keywords) as $k)
		                            <li><a href="#">{{ $k }}</a></li>
		                        @endforeach
	                        </ul>
	                    </div>
	                @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of News Details Area-->
@endsection