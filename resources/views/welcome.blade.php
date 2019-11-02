<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Toupos là ứng dụng quản lý bán hàng dành cho doanh nghiệp" />
    <meta name="keywords" content="toupos, bán hàng, pos bán hàng" />

    <!--====== TITLE TAG ======-->
    <title>Toupos</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('favicon.ico') }}" />

    <!--====== STYLESHEETS ======-->
    <link href="{{ asset('agencyfy/assets/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('agencyfy/assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('agencyfy/assets/css/icons.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('agencyfy/style.css') }}" rel="stylesheet">
    <link href="{{ asset('agencyfy/assets/css/responsive.css') }}" rel="stylesheet">

    <script src="{{ asset('agencyfy/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="home-alt" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#home" style="padding: 0;"><img style="max-height: 100%;" src="{{ asset('logo.png') }}" alt="logo"></a>
                        </div>
                        <div class="menu-warapper">
                            <div class="header-action-button hidden-sm hidden-xs">
                                <a href="/login" class="get-start">Đăng nhập</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <div class="welcome-text-area">
            <div class="area-bg"></div>
            <div class="welcome-area">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h1 class="wow fadeInUp" data-wow-delay="0.3s">Doanh nghiệp bạn đang luẩn quẩn trong khâu bán hàng?.</h1>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">Chúng tôi có giải pháp cho bạn.</p>
                                <div class="home-button color-two wow fadeInUp" data-wow-delay="0.9s">
                                    <a class="read-more" href="https://toucan.vn/" target="_blank">Tham khảo thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-mockup center wow fadeInRight" data-wow-delay="0.9s">
                        <img src="{{ asset('agencyfy/assets/img/home/home_layer_2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

    <!--FEATURES TOP AREA-->
    <section class="features-top-area padding-100-50" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <div class="area-bg-text">SERVICE</div>
                        <h4 class="sub_hidding font400">Why us</h4>
                        <h2>We Grow Your Business</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative mb50 center wow fadeInUp features-box" data-wow-delay="0.2s">
                        <div class="bg-animate-layer"></div>
                        <div class="box-img-icon">
                            <img src="{{ asset('agencyfy/assets/img/icon/service_icon_4.png') }}" alt="">
                        </div>
                        <h3 class="box-title">Digital Marketing</h3>
                        <p>Stop tearing your hair out over seemingly incomprehensible analytics reports. We’ll set them up for you the right way.</p>
                        <a href="#" class="more inline-block mt20">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative mb50 center  wow fadeInUp features-box active" data-wow-delay="0.3s">
                        <div class="bg-animate-layer"></div>
                        <div class="box-img-icon">
                            <img src="{{ asset('agencyfy/assets/img/icon/service_icon_5.png') }}" alt="">
                        </div>
                        <h3 class="box-title">Branding Identity</h3>
                        <p>Stop tearing your hair out over seemingly incomprehensible analytics reports. We’ll set them up for you the right way.</p>
                        <a href="#" class="more inline-block mt20">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative mb50 xs-mb0 center wow fadeInUp features-box" data-wow-delay="0.4s">
                        <div class="bg-animate-layer"></div>
                        <div class="box-img-icon">
                            <img src="{{ asset('agencyfy/assets/img/icon/service_icon_6.png') }}" alt="">
                        </div>
                        <h3 class="box-title">User Interface Design</h3>
                        <p>Stop tearing your hair out over seemingly incomprehensible analytics reports. We’ll set them up for you the right way.</p>
                        <a href="#" class="more inline-block mt20">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="text-icon-box relative mb50 sm-mb0 center wow fadeInUp features-box visible-sm" data-wow-delay="0.4s">
                        <div class="bg-animate-layer"></div>
                        <div class="box-img-icon">
                            <img src="{{ asset('agencyfy/assets/img/icon/service_icon_4.png') }}" alt="">
                        </div>
                        <h3 class="box-title">Digital Marketing</h3>
                        <p>Stop tearing your hair out over seemingly incomprehensible analytics reports. We’ll set them up for you the right way.</p>
                        <a href="#" class="more inline-block mt20">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FEATURES TOP AREA END-->

    <!--ABOUT AREA-->
    <section class="about-area" id="about">
        <div class="about-top-area section-padding">
            <div class="container">
                <div class="about-mockup-bg right wow fadeIn">
                    <img src="{{ asset('agencyfy/assets/img/about/about_bg_layer.png') }}" alt="">
                </div>
                <div class="row flex-v-center">
                    <div class="col-md-offset-6 col-lg-offset-6 col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="about-content xs-center sm-center wow fadeInUp">
                            <h4 class="sub_hidding font400">About us</h4>
                            <h3 class="mb30">We develop digital strategies products and services.</h3>
                            <p>We believe that designing products and services in close partnership with our clients is the only way to have a real impact on their business.</p>
                            <div class="promo-button">
                                <span data-video-id="j1S66liv1t8" class="video-area-popup">
                                    <span class="bubble-ripple">
                                        <span class="bubble-ripple-inner"></span>
                                    </span>
                                    <i class="fa fa-play"></i></span>
                                <span>Check How we work together</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-middile section-padding">
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="about-content xs-center sm-mb50 xs-mb50 sm-center wow fadeInUp">
                            <h4 class="sub_hidding font400">Work Process</h4>
                            <h3 class="mb30">We Create Beautiful Designs for Businesses to Succeed</h3>
                            <p>Synergistically provide access to progressive scenarios through standards compliant products. Rapidiously initiate granular quality vectors via dynamic content. Authoritatively disintermediate high-payoff e-markets for multifunctional innovation.</p>
                            <a href="#" class="read-more inline-block mt40 color-two">Start a project</a>
                        </div>
                    </div>
                </div>
                <div class="about-mockup-bg right wow fadeIn">
                    <img src="{{ asset('agencyfy/assets/img/about/about_bg_layer_2.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="about-bottom-area padding-top">
            <div class="area-bg"></div>
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-fun-fact xs-center section-paddingg sm-mb50 sm-mt50">
                            <div class="single-fun-fact color-two mb30 wow fadeInUp active" data-wow-delay="0.1s" data-tilt data-tilt-max="20" data-tilt-scale="1.2">
                                <h3><span class="counter">8</span>K</h3>
                                <p>TGlobal Customer</p>
                            </div>
                            <div class="single-fun-fact color-two mb30 wow fadeInUp" data-wow-delay="0.2s" data-tilt data-tilt-max="20" data-tilt-scale="1.2">
                                <h3><span class="counter">150</span>+</h3>
                                <p>Project Completed</p>
                            </div>
                            <div class="single-fun-fact color-two mb30 wow fadeInUp" data-wow-delay="0.3s" data-tilt data-tilt-max="20" data-tilt-scale="1.2">
                                <h3><span class="counter">39</span>+</h3>
                                <p>Team Member</p>
                            </div>
                            <div class="single-fun-fact color-two mb30 wow fadeInUp" data-wow-delay="0.4s" data-tilt data-tilt-max="20" data-tilt-scale="1.2">
                                <h3><span class="counter">5</span></h3>
                                <p>Company in US</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content sm-mb80 xs-mb50 xs-center wow fadeInUp">
                            <h4 class="sub_hidding font400">Our Expereince</h4>
                            <h3 class="mb30">We have completed 150+ projects succesfully</h3>
                            <p>We believe that designing products and services in close partnership with our clients is the only way to have a real impact on their business .We believe that designing partnership with our clients is the only way to have a real impact on their business.</p>
                            <a href="#" class="read-more color-two inline-block mt50">Get an Estimate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <section class="pricing-area padding-100-50" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <div class="area-bg-text">Bảng giá</div>
                        <h4 class="sub_hidding font400">Bảng giá</h4>
                        <h2>Liên hệ với chúng tôi để được tư vấn</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 center">
                    <div class="row">
                        <div class="col-md-2 hide-sm">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-price active border-radious5 center mb50 box-hover-2">
                                <div class="price-hidding padding20">
                                    <h3>Gói tháng</h3>
                                </div>
                                <div class="price-rate">
                                    <h3>900.000 đ</h3>
                                    <p>1 tháng</p>
                                </div>
                                <div class="price-details">
                                    <ul>
                                        <li>Không giới hạng nhân viên</li>
                                        <li>Không giới hạng chi nhánh</li>
                                        <li>Không giới hạng sản phẩm</li>
                                        <li>bảo trì trọn đời</li>
                                    </ul>
                                </div>
                                <div class="price-button font14 uppercase font600 mb40">
                                    <a href="https://demo.toupos.com/login?lang=vi" class="read-more">Dùng thử</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-price border-radious5 center mb50 box-hover-2">
                                <div class="price-hidding padding20">
                                    <h3>Gói vĩnh viên</h3>
                                </div>
                                <div class="price-rate">
                                    <h3>Liên hệ</h3>
                                </div>
                                <div class="price-details">
                                    <ul>
                                        <li>không giới hạn chức năng</li>
                                        <li>Năng cấp theo yêu cầu</li>
                                    </ul>
                                </div>
                                <div class="price-button font14 uppercase font600 mb40">
                                    <a href="https://demo.toupos.com/login?lang=vi" class="read-more">Dùng thử</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 hide-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PRICING AREA AREA END-->

    <!--FOOER AREA-->
    <footer class="footer-area sky-gray-bg relative padding-top" id="contact">
        <div class="footer-top-area section-padding">
            <div class="area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn">
                            <h4 class="sub_hidding font400">Liên hệ</h4>
                            <h2>Hãy để chúng tôi đẩy mạnh doanh số bán hàng của bạn ngay hôm nay</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12 sm-center xs-center">
                        <div class="subscriber-form-area wow fadeIn center">
                            <!--<form action="#" class="subscriber-form mb100">
                                <input type="email" name="email" id="email" placeholder="Email Address">
                                <button type="submit">Subscribe</button>
                            </form>
                            <iframe id="mc-form" class="subscriber-form" width="600" height="850" src="https://crm.toucan.vn/forms/wtl/17dac6dbf78ecd7a420d40280b68f13a" frameborder="0" allowfullscreen></iframe>-->
                            <div id="mc-form" class="subscriber-form">
                                <iframe width="600" height="560" src="https://crm.toucan.vn/forms/wtl/17dac6dbf78ecd7a420d40280b68f13a" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-separator"></div>
        <div class="footer-bottom-area padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="single-footer-widget wow fadeIn sm-center sm-mb50">
                            <div class="footer-logo mb50">
                                <a href="#"><img style="max-height: 115px;" src="{{ asset('Toucan_logo-300x132.png') }}" alt=""></a>
                            </div>
                            <p>Công ty Cổ phần Toucan - chuyên cung cấp các giải pháp công nghệ thông tin cho doanh nghiệp.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="single-footer-widget wow fadeIn">
                            <h3>Dịch vụ</h3>
                            <ul>
                                <li><a href="https://toubrand.com/dich-vu/thiet-ke-nhan-dien-thuong-hieu/" target="_blank">Thiết kế logo & xây dựng bộ nhận diện thương hiệu</a></li>
                                <li><a href="https://toubrand.com/dich-vu/dich-vu-fanpage/" target="_blank">Quảng cáo & chăm sóc Fanpage</a></li>
                                <li><a href="https://toubrand.com/dich-vu/media/" target="_blank">Media - quay chụp cho sản phẩm & doanh nghiệp</a></li>
                                <li><a href="https://toubrand.com/thiet-ke-website/" target="_blank">Thiết kế website & phần mềm</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="single-footer-widget wow fadeIn">
                            <h3></h3>
                            <ul>
                                <li><a href="https://toucan.vn/" target="_blank">Hệ thống hỗ trợ marketing & CSKH</a></li>
                                <li><a href="https://toucan.vn/" target="_blank">Phần mềm quản lý khách hàng</a></li>
                                <li><a href="https://toucan.vn/https://toucan.vn/https://toucan.vn/" target="_blank">Phần mềm quản lý bán hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn mt50">
                            <p>Copyright &copy; <a href="https://toucan.vn/"> Toucan</a> All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="{{ asset('agencyfy/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/vendor/bootstrap.min.js') }}"></script>

    <!--====== PLUGINS JS ======-->
    <script src="{{ asset('agencyfy/assets/js/vendor/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/vendor/jquery.appear.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/venobox.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/jquery-modal-video.min.js') }}"></script>

    <script src="{{ asset('agencyfy/assets/js/stellarnav.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/placeholdem.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/jquery.ajaxchimp.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('agencyfy/assets/js/jquery.parallax-layer-scroll.js') }}"></script>

    <!--===== ACTIVE JS=====-->
    <script src="{{ asset('agencyfy/assets/js/main.js') }}"></script>

</body>

</html>