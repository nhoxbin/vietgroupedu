@extends('layouts.web')
@section('section')
	<!--Breadcrumb Banner Area Start-->
    {{-- <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">ABOUT US</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.html">Home</a></li>
                                <li>ABOUT US</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--End of Breadcrumb Banner Area-->
    <!--About Page Area Start-->
    <div class="about-page-area section-padding" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Về chúng tôi</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-text-container">
                        <p><span>Kính chào Quý vị!</span><br />Lời đầu tiên, cho tôi xin thay mặt Công ty Cổ phẩn Đầu tư Giáo dục Vietgroup gửi tới quý vị lời chào trân trọng và thân quý.<br>Vietgroup Edu không chỉ  là một công ty mà chúng tôi còn là một tổ  chức tập hợp những thành viên mang tư tưởng đóng góp cho xã hội qua các lĩnh vực giáo dục, công nghệ và đào tạo nghề. Chúng tôi đã từng bước khẳng định vị  thế  của mình bằng sự  năng động, tận tụy, chuyên nghiệp của đội ngũ CB-CNV được đào tạo bài bản, chuyên sâu trong và ngoài nước.  Công ty  đang và sẽ  tiếp tục tận lực - tận tâm, hầu theo đúng như khẩu hiệu “Vững bước vươn xa” qua các sản phẩm và dịch vụ  của mình.<br />Việc cố  gắng phấn đấu để  mang đến càng nhiều giá trị  tốt đẹp cho Quý khách hàng, đối tác và cộng đồng là điều quý giá nhất mà chúng tôi rất hân hạnh được đồng hành và phục vụ.<br />Kết lời, xin được đại diện toàn thể  CB-CNV Vietgroup Edu, kính chúc sức khỏe, hạnh phúc và thành công đến Quý vị cùng thân quyến.<br />Trân trọng!</p>
                        <p>Dear Sir/Madam,<br />
                        First of all, let me on behalf of Vietgroup Education Investment Joint Stock Company send you a respectful and dear greeting.<br />
                        A society is sustainably developed if the people in that society are well trained; accessed to knowledge and other mutually supportive resources to maximize their capabilities. That way will facilitate selfdevelopment and bring prosperity to their family, prosperity for society. We deeply understand that through our works: improving the quality of human resources, transferring science - technology, management methods and bringing in startups and career development - for all unskilled workers, knowledgeable people to work not only in Viet Nam but also other countries.<br />
                        Dear customers, Vietgroup Edu is not only a company but also an organization that gathers members who bring ideas to contribute to society through the fields of education, technology and vocational training. We have gradually affirmed our position by the activeness, devotion and professionalism of our staff, who are well and advanced trained at home and abroad. We are working hard – dedicated and will continue to do so as the slogan "Firmly reaching out" through our products and services. Striving for bringing more and more good value to our customers, partners and communities is the most valuable
                        thing that we are honored to accompany and serve.<br />
                        Finally, I would like to represent all staff of Vietgroup Edu to wish you and your family good health, happiness and success.</p>
                        <p>初めまして。私はVIETGROUP教育投資株式会社(VIETGROUP EDU)を代表して皆様にご挨拶させて頂きます。
                        VIETGROUP EDU は単なる教育機関ではなく、全社員が信念を持って、経験や
                        専門的な教育によって社会的な分野等に貢献出来る組織です。国内または海外で綿密かつ熱心なトレーニングを受けた社員によって、当社の社会的な立場も徐々に上がって参りました。
                        当社はこれからも努力を続けて適切な人材と良いサービスを通じ「確実に支援する」というスローガンの元、献身的に取り組んで参ります。
                        当社はお客様や地域の皆様に出来るだけ多くの価値をもたらすよう努力し、
                        皆様にとって良い成果が出せるよう励んで参ります。
                        最後に心より皆様のご健康・ご幸福・ご成功をお祈り申し上げます。</p>
                        
                        <br />
                        <div class="d-flex flex-column justify-content-center">
                            <span style="text-align: center;">PHƯƠNG CHÂM - OPERATION MOTTO - モットー</span>
                            <ul class="d-flex flex-column justify-content-center" style="list-style: circle">
                                <li class="mr-auto">BÉN NHẠY - スピード</li>
                                <li class="flex-wrap">BỨC PHÁ - スパート</li>
                                <li>BỀN TRÍ - 忍耐</li>
                                <li>BẢN LĨNH - 勇気</li>
                            </ul>
                        </div>

                        <br />
                        <div class="d-flex flex-wrap justify-content-center">
                            <span>SỨ MỆNH - MISSION - 使命</span>
                            <p>Vietgroup Edu là tổ  chức chuyên về  đào tạo  –  huấn luyện nguồn nhân lực có chất lượng cao nhằm đáp  ứng các nhu cầu thực tiễn của thị trường lao động trong và ngoài nước; song song với việc là cầu nối chuyển giao tri thức công nghệ trong các lĩnh vực mà xã hội quan tâm và hướng đến.</p>
                            <p>Vietgroup is an organization specialized in training – instructing high quality human resources to meet the practical needs of the domestic and foreign labor market; in addition to being a bridge to transfer technology knowledge in fields that society cares about and aims for.</p>
                            <p>VIETGROUP EDUは国内また外国労働市場の実際的なニーズに対応するための高品質な人材をトレーニング・教育しております。同時に社会が関心を持ち、目指している分野の技術や知識を広めるための架け橋です。</p>
                        </div>

                        <br />
                        <div class="d-flex flex-wrap justify-content-center">
                            <span>TẦM NHÌN - VISION - 展望</span>
                            <p>Trở thành tập đoàn chuyên nghiệp hàng đầu trong lĩnh vực tư vấn  -  giáo dục  -  công nghệ. Là nơi đóng góp các giải pháp mang tính đột phá trong việc phát triển các yếu tố nhân lực cho nước nhà.</p>
                            <p>Becoming a leading corporation in the field of consulting - education - technology. It is the place to contribute breakthrough solutions in the development of human resources for the country.</p>
                            <p>教育・コンサルテｲング・テクノロジの各分野で一流のプロ集団になることを目標に致します。そして、両国のための人的資源の開発における画期的なソリューションに貢献致します。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="skill-image">
                        <img src="img/banner/6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of About Page Area-->
    <!--Skill And Experience Area Start-->
    {{-- <div class="skill-and-experience-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Skills and Experience</h3>
                            <p>There are many variations of passages</p>
                        </div>
                    </div> 
                </div>       
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="experience-skill-wrapper">
                        <div class="skill-bar-item">
                            <span>Programming</span>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    <span class="text-top">80%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-bar-item">
                            <span>Designing</span>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    <span class="text-top">75%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-bar-item">
                            <span>Creative Writing</span>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    <span class="text-top">90%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-bar-item">
                            <span>English Lessons</span>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-progress="70%" style="width: 70%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    <span class="text-top">70%</span>
                                </div>
                            </div>
                        </div>  
                    </div>    
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="experience-skill-wrapper">
                        <div class="skill-bar-item">
                            <span>Programming</span>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    <span class="text-top">75%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-bar-item">
                            <span>Creative Writing</span>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-progress="90%" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    <span class="text-top">90%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-bar-item">
                            <span>Designing</span>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    <span class="text-top">80%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-bar-item">
                            <span>English Lessons</span>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    <span class="text-top">100%</span>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div> --}}
    <!--End of Skill And Experience Area-->
    <!--Teachers Area Start-->
    {{-- <div class="teachers-area padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>OUR TEACHERS</h3>
                            <p>There are many variations of passages of Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-teacher-item">
                        <div class="single-teacher-image">
                            <a href="#"><img src="img/teacher/l-1.jpg" alt=""></a>
                        </div>
                        <div class="single-teacher-text">
                            <h3><a href="#">Louis Smith</a></h3>
                            <h4>Teacher</h4>
                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                            <div class="social-links">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-teacher-item">
                        <div class="single-teacher-image">
                            <a href="#"><img src="img/teacher/l-2.jpg" alt=""></a>
                        </div>
                        <div class="single-teacher-text">
                            <h3><a href="#">Louis Smith</a></h3>
                            <h4>Teacher</h4>
                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                            <div class="social-links">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-teacher-item">
                        <div class="single-teacher-image">
                            <a href="#"><img src="img/teacher/l-3.jpg" alt=""></a>
                        </div>
                        <div class="single-teacher-text">
                            <h3><a href="#">Louis Smith</a></h3>
                            <h4>Teacher</h4>
                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                            <div class="social-links">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-teacher-item">
                        <div class="single-teacher-image">
                            <a href="#"><img src="img/teacher/l-4.jpg" alt=""></a>
                        </div>
                        <div class="single-teacher-text">
                            <h3><a href="#">Louis Smith</a></h3>
                            <h4>Teacher</h4>
                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p>
                            <div class="social-links">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--End of Teachers Area-->
@endsection