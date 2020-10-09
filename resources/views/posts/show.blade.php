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
                            <div class="single-item-comment-view">
                               <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                            </div>
                            {!! $post->description !!}
                            {{-- <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, There are many variations of passages of Lorem Ipsum available,</p>
                            <div class="quote-section">
                                <p>but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                            <p>Lorem Ipsuable, amrn in some by injected humour, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p> --}}
                            <div class="tags-and-links">
                            	@if($post->keywords)
	                                <div class="related-tag">
	                                    <span>Tag:</span>
	                                    <ul class="tags">
											@foreach(explode(',', $post->keywords) as $k)
	                                        	<li><a href="#">design,</a></li>
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
                    {{-- <div class="comments">
                        <h4 class="title">Comments</h4>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="img/comment/1.jpg" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MD Tokdir Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                        <div class="single-comment comment-reply">
                            <div class="author-image">
                                <img src="img/comment/2.jpg" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MD Kopal Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="img/comment/3.jpg" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">MR Soytan Ali</a></h4>
                                    <span class="reply"><a href="#">Reply</a></span>
                                    <span class="comment-time">Posted on Jun 12, 2015 /</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div> --}}
                </div>    
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="sidebar-widget">
                    <div class="single-sidebar-widget">
                        <h4 class="title">Recent Posts</h4>
                        <div class="recent-content">
                            <div class="recent-content-item">
                                <a href="#"><img src="img/event/7.jpg" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Learn English in</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="img/event/8.jpg" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Team Works</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="img/event/9.jpg" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Learn With Fun</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="img/event/10.jpg" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">Writing Skill</a></h4>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="single-sidebar-widget comment">
                        <h4 class="title">Recent Comment</h4>
                        <div class="recent-content">
                            <div class="recent-content-item">
                                <a href="#"><img src="img/comment/3.jpg" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">MR Soytan Ali</a></h4>
                                    <p>There are many varia passages of Lorem Ipsuable,amar sonar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="img/comment/1.jpg" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">MD Tokdir  Ali</a></h4>
                                    <p>There are many varia passages of Lorem Ipsuable,amar sonar</p>
                                </div>
                            </div>
                            <div class="recent-content-item">
                                <a href="#"><img src="img/comment/3.jpg" alt=""></a>
                                <div class="recent-text">
                                    <h4><a href="#">MR Soytan Ali</a></h4>
                                    <p>There are many varia passages of Lorem Ipsuable,amar sonar</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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