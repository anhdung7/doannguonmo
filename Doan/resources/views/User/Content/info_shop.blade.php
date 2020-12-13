@extends('index')
@section('title', 'Thông tin về chúng tôi')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- about wrapper start -->
<div class="about-us-wrapper pt-60 pb-40">
    <div class="container">
        <div class="row">
            <!-- About Text Start -->
            <div class="col-lg-6 order-last order-lg-first">
                <div class="about-text-wrap">
                    <h2><span>LỜI CẢM ƠN</span></h2>
                    <p>Lời cảm ơn đầu tiên, chúng em xin gởi lời cảm ơn chân thành đến Thầy Hà Anh Vũ, 
                        giáo viên hướng dẫn Đồ án chuyên ngành trường ĐH Công nghệ Sài Gòn, 
                        thầy đã hướng dẫn chúng em rất tận tình, quan tâm, giúp đỡ, động viên em trong suốt quá trình học tập và hoàn thành đề tài.</p>
                    <p>Chúng em xin chúc thầy luôn tràn đầy sức khỏe, mãi mãi là người truyền đạt những kiến thức quý báu, 
                        là người đưa đò thầm lặng giúp chúng em nắm vững các kiến thức để sau này giúp ích cho đất nước.</p>
                    <p>Chúng em xin chân thành cảm ơn.</p>
                </div>
            </div>
            <!-- About Text End -->
            <!-- About Image Start -->
            <div class="col-lg-5 col-md-10">
                <div class="about-image-wrap">
                    <img class="img-full" src="{{asset('images/product/large-size/13.jpg')}}" alt="About Us" />
                </div>
            </div>
            <!-- About Image End -->
        </div>
    </div>
</div>
<!-- about wrapper end -->
<!-- Begin Counterup Area -->
<div class="counterup-area">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <!-- Begin Limupa Counter Area -->
                <div class="limupa-counter white-smoke-bg">
                    <div class="container">
                        <div class="counter-img">
                            <img src="{{asset('images/about-us/icon/1.png')}}" alt="">
                        </div>
                        <div class="counter-info">
                            <div class="counter-number">
                                <h3 class="counter">999</h3>
                            </div>
                            <div class="counter-text">
                                <span>KHÁCH HÀNG</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- limupa Counter Area End Here -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Begin limupa Counter Area -->
                <div class="limupa-counter gray-bg">
                    <div class="counter-img">
                        <img src="{{asset('images/about-us/icon/2.png')}}" alt="">
                    </div>
                    <div class="counter-info">
                        <div class="counter-number">
                            <h3 class="counter">6</h3>
                        </div>
                        <div class="counter-text">
                            <span>GIẢI THƯỞNG</span>
                        </div>
                    </div>
                </div>
                <!-- limupa Counter Area End Here -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Begin limupa Counter Area -->
                <div class="limupa-counter white-smoke-bg">
                    <div class="counter-img">
                        <img src="{{asset('images/about-us/icon/3.png')}}" alt="">
                    </div>
                    <div class="counter-info">
                        <div class="counter-number">
                            <h3 class="counter">612</h3>
                        </div>
                        <div class="counter-text">
                            <span>SỐ GIỜ LAM VIỆC</span>
                        </div>
                    </div>
                </div>
                <!-- limupa Counter Area End Here -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Begin limupa Counter Area -->
                <div class="limupa-counter gray-bg">
                    <div class="counter-img">
                        <img src="{{asset('images/about-us/icon/4.png')}}" alt="">
                    </div>
                    <div class="counter-info">
                        <div class="counter-number">
                            <h3 class="counter">3</h3>
                        </div>
                        <div class="counter-text">
                            <span>DỰ ÁN HOÀN THÀNH</span>
                        </div>
                    </div>
                </div>
                <!-- limupa Counter Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Counterup Area End Here -->
<!-- team area wrapper start -->
<div class="team-area pt-60 pt-sm-44">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="li-section-title capitalize mb-25">
                    <h2><span>TEAM DAV</span></h2>
                </div>
            </div>
        </div> <!-- section title end -->
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-member mb-60 mb-sm-30 mb-xs-30">
                    <div class="team-thumb">
                        <img src="{{asset('images/team/7.jpg')}}" alt="Our Team Member">
                    </div>
                    <div class="team-content text-center">
                        <h3>Nguyễn Thị Mỹ Duyên</h3>
                        <p>Trưởng nhóm</p>
                        <a href="#">info@example.com</a>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!-- end single team member -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-member mb-60 mb-sm-30 mb-xs-30">
                    <div class="team-thumb">
                        <img src="{{asset('images/team/8.jpg')}}" alt="Our Team Member">
                    </div>
                    <div class="team-content text-center">
                        <h3>Dương Quỳnh Thanh Vy</h3>
                        <p>Thành viên 1</p>
                        <a href="#">info@example.com</a>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!-- end single team member -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-member mb-30 mb-sm-60">
                    <div class="team-thumb">
                        <img src="{{asset('images/team/9.jpg')}}" alt="Our Team Member">
                    </div>
                    <div class="team-content text-center">
                        <h3>Nguyễn Minh Ánh</h3>
                        <p>Thành viên 2</p>
                        <a href="#">info@example.com</a>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!-- end single team member -->
        </div>
    </div>
</div>
<!-- team area wrapper end -->
@endsection