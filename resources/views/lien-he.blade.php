@extends('layouts.web')
@section('section')
<!--Contact Form Area Start-->
<div class="contact-form-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h4 class="contact-title">thông tin liên hệ</h4>
                <div class="contact-text">
                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">02862-705-057</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">info@vietgroupedu.com</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">11 đường D5, P.25, Q.Bình Thạnh, TP.HCM</span></p>
                </div>
                <h4 class="contact-title">mạng xã hội</h4>
                <div class="link-social">
                    <a target="_blank" href="https://www.facebook.com/VietgroupEdu/"><i class="zmdi zmdi-facebook"></i></a>
                    <a target="_blank" href="#"><i class="zmdi zmdi-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <h4 class="contact-title">Gửi tin nhắn</h4>
                <form id="contact-form" method="post">
                	@csrf
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="name" placeholder="Họ và tên" required>
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="email" placeholder="Địa chỉ Email" required>
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="phone" placeholder="Số điện thoại" required>
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <button type="submit" class="button-default">SUBMIT</button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</div>
<!--End of Contact Form-->
@endsection