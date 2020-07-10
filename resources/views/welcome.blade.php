@extends('layouts.home')

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noarchive">
    <title> TouPOS | Hệ thống bán hàng doanh nghiệp vừa và nhỏ </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/css/fontawesome.5.7.2.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    
    <nav class="navbar navbar-area navbar-expand-lg nav-absolute white nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="index.html" class="logo">
                        <img src="assets/img/logo-white.png" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appside_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="appside_main_menu">
                <ul class="navbar-nav">
                    <li class="current-menu-item">
                        <a href="#">Trang chủ</a> </li>
                    <li><a href="#contact">Liên hệ</a></li>
                    <li><a href="#about">Giới thiệu</a></li>
                </ul>
            </div>
            <div class="nav-right-content">
                <ul>
                    <li class="button-wrapper">
                        <a href="/business/register" class="boxed-btn btn-rounded">Đăng ký ngay</a>
                        
                    </li>
                    <li class="button-wrapper">
                        <a href="/login" class="boxed-btn btn-rounded">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

    <!-- header area start  -->
    <header class="header-area header-bg-2 style-two" id="home">
        <div class="header-right-image  wow zoomIn">
            <img src="assets/img/mobile-image-4.png" alt="header right image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="header-inner">
                        <h2 class="title wow fadeInDown">Hệ thống bán hàng dành riêng doanh nghiệp vừa và nhỏ</h2>
                        <p>Tính tiền nhanh chóng, quản lý kho tập trung,tích hợp vận chuyển, báo cáo doanh thu 24/7.</p>
                        <div class="btn-wrapper wow fadeInUp">
                            <a href="/business/register" class="boxed-btn btn-rounded">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end  -->

<!-- about us area start -->

<section class="about-us-area style-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title left-aligned"><!-- section title -->
                    <span class="subtitle">TouPOS</span>
                    <h3 class="title extra">hiểu doanh nghiệp của bạn hơn bất cứ ai</h3>
                    <p>Quản lý cửa hàng, tăng trưởng lợi nhuận doanh nghiệp của bạn bằng cách tạo doanh số bán dễ dàng và nhanh chóng với TouPOS, quản lý tồn kho, phân tích hoạt động kinh doanh, mua hàng, duy trì, tương tác với khách hàng và gia tăng ngân sách mua hàng bình quân..</p>
                </div><!-- //. section title -->
            </div>
            <div class="col-lg-6">
                <div class="feature-area">
                    <ul class="feature-list">
                        <li class="single-feature-list wow zoomIn">
                            <div class="icon icon-bg-1">
                                <i class="flaticon-vector"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Quản lý dễ dàng</a></h4>
                                <p>Làm cho việc kinh doanh trở nên nhanh chóng và dễ dàng, quản lý chương trình khách hàng thân thiết và tồn kho.</p>
                            </div>
                        </li>
                        <li class="single-feature-list wow zoomIn">
                            <div class="icon icon-bg-2">
                                <i class="flaticon-responsive"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Tương tác</a></h4>
                                <p>Xây dựng dữ liệu khách hàng và luôn tương tác. Gửi tin nhắn và hóa đơn điện tử đến khách hàng và thu thập phản hồi có giá trị.</p>
                            </div>
                        </li>
                        <li class="single-feature-list wow zoomIn">
                            <div class="icon icon-bg-3">
                                <i class="flaticon-layers-2"></i>   
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Báo cáo</a></h4>
                                <p>Tạo quyết định kinh doanh mang tính chất thăm dò dựa vào báo cáo phân tích trực quan.</p>
                            </div>
                        </li>
                        <li class="single-feature-list wow zoomIn">
                            <div class="icon icon-bg-4">
                                <i class="flaticon-picture"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Chiến lược</a></h4>
                                <p>Phân tích hoạt động kinh doanh, xác định những sản phẩm bán tốt nhất, kiểm duyệt lịch sử giao dịch</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about us area end -->
<!-- video area start -->
<section class="video-area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-with-video">
                        <div class="img-wrap">
                            <img src="assets/img/video-image.jpg" alt="">
                            <div class="hover">
                                <a href="https://www.youtube.com/watch?v=tdBzJRdy33M" class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content-area">
                        <span class="subtitle">TouPOS</span>
                        <h3 class="title">Trực quan</h3>
                        <p>Ứng dụng giúp bạn quản lý, phân tích số liệu kinh doanh, kho dễ dàng, nhanh chóng cho cửa hàng của bạn ở bất cứ đâu </p>
                        <p>Xem Doanh thu, Kinh doanh và lợi nhuận. Theo dõi, so sánh công việc kinh doanh theo ngày, tuần, tháng hoặc năm. Theo dõi được những mặt hàng đang bán chạy, bình thường hoặc chậm. Theo dõi tồn kho và áp dụng các bộ lọc để cho bạn kết quả tồn kho hiện tại.. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video area end -->
    
    <!-- counterup area start -->
    <section class="counterup-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter-item"><!-- single counter item -->
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <div class="content">
                            <span class="count-num">14,567</span>
                            <h4 class="title">Positive Reviews</h4>
                        </div>
                    </div><!-- //. single counter item -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter-item"><!-- single counter item -->
                        <div class="icon">
                            <i class="flaticon-conversation-1"></i>
                        </div>
                        <div class="content">
                            <span class="count-num">567</span>
                            <h4 class="title">Good Comments</h4>
                        </div>
                    </div><!-- //. single counter item -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter-item"><!-- single counter item -->
                        <div class="icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="content">
                            <span class="count-num">36,778</span>
                            <h4 class="title">App Downloads</h4>
                        </div>
                    </div><!-- //. single counter item -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter-item"><!-- single counter item -->
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>
                        <div class="content">
                            <span class="count-num">30</span>
                            <h4 class="title">Best Awards</h4>
                        </div>
                    </div><!-- //. single counter item -->
                </div>
            </div>
        </div>
    </section>
    <!-- counterup area end -->
    
    <!-- why choose area start -->
    <section class="why-choose-area why-choose-us-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title white"><!-- section title -->
                        <span class="subtitle">Tại sao nên dùng TouPOS</span>
                        <h3 class="title extra">Công cụ để quản lý kinh doanh bán lẻ</h3>
                        <p>Quản lý cửa hàng của bạn và việc kinh doanh bằng điện thoại thông minh và máy tính bảng — tăng trưởng lợi nhuận doanh nghiệp nhỏ của bạn bằng cách tạo doanh số bán dễ dàng và nhanh chóng với Loyverse POS, quản lý tồn kho, phân tích hoạt động kinh doanh, mua hàng, duy trì, tương tác với khách hàng và gia tăng ngân sách mua hàng bình quân..</p>
                    </div><!-- //. section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="single-why-us-item margin-top-60 wow zoomIn"><!-- single why us item -->
                        <div class="icon gdbg-1">
                            <i class="flaticon-settings-1"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Quản lý tồn kho</h4>
                            <p>Thêm danh mục sản phẩm dễ dàng với mô tả và hình ảnh. Tổ chức kết nối nhanh hơn vào nhóm danh mục.</p>
                        </div>
                    </div><!-- //. single why us item -->
                    <div class="single-why-us-item wow zoomIn"><!-- single why us item -->
                        <div class="icon gdbg-2">
                            <i class="flaticon-checked"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Quản lý nhân viên</h4>
                            <p>Quy định vai trò và quyền hạn của mỗi nhân viên. Xác định ai là người bán hàng giỏi nhất.</p>
                        </div>
                    </div><!-- //. single why us item -->
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="center-image">
                        <img src="assets/img/mobile-img-2.png" alt="mobile image two">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="single-why-us-item margin-top-60 wow zoomIn"><!-- single why us item -->
                        <div class="icon gdbg-3">
                            <i class="flaticon-chat-1"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Phân tích kinh doanh</h4>
                            <p>Quên đi máy tính cồng kềnh. Báo cáo chi tiết ngày, tuần và tháng giúp định hình sự phát triển kinh doanh và ra quyết định chính xác.</p>
                        </div>
                    </div><!-- //. single why us item -->
                    <div class="single-why-us-item wow zoomIn"><!-- single why us item -->
                        <div class="icon gdbg-4">
                            <i class="flaticon-cloud"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Chương trình khách hàng thân thiết</h4>
                            <p>Chính bạn sẽ tự đánh giá để tặng thưởng cho khách hàng trung thành. Liên kết khách hàng với ứng dụng di động trên máy của khách hàng.</p>
                        </div>
                    </div><!-- //. single why us item -->
                </div>
            </div>
        </div>
    </section>
    <!-- why choose area end -->
    
    <!-- how it works area start -->
    <section class="how-it-work-area">
            <div class="shape-1"><img src="assets/img/shape/08.png" alt=""></div>
            <div class="shape-2"><img src="assets/img/shape/09.png" alt=""></div>
            <div class="shape-3"><img src="assets/img/shape/08.png" alt=""></div>
            <div class="shape-4"><img src="assets/img/shape/09.png" alt=""></div>
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title"><!-- section title -->
                            <span class="subtitle">Làm thế nào để tôi bắt đầu?</span>
                            <h3 class="title">Không yêu cầu thanh toán. Không quảng cáo. Không hợp đồng ràng buộc.</h3>
                            <p>Chúng tôi biết rằng sự phức tạp sẽ khiến bạn nản lòng khi đăng ký dùng thử. Nên chỉ với 3 bước đơn giản bạn đã sở hữu TouPOS.</p>
                        </div><!-- //. section title -->
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="how-it-work-tab-nav">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true"><i class="flaticon-checked"></i>Nhập thông tin doanh nghiệp <span class="number">1</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"><i class="flaticon-settings-1"></i> Nhập cách tính thuế <span class="number">2</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="flaticon-chat-1"></i> Nhập người dùng <span class="number">3</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content wow slideInUp">
                            <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                <div class="how-it-works-tab-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="left-content-area">
                                                <h4 class="title">Nhập thông tin doanh nghiệp</h4>
                                                <p>Nhập tên công ty, địa chỉ, email, và mã số thuế </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="right-content-area">
                                                <div class="img-wrapper">
                                                    <img src="assets/img/how-it-works-image.png" alt="how it works image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="how-it-works-tab-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="left-content-area">
                                                <h4 class="title">Nhập cách tính thuế</h4>
                                                <p>Đơn vị bạn tính thuế như thế nào? </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="right-content-area">
                                                <div class="img-wrapper">
                                                    <img src="assets/img/how-it-works-image.png" alt="how it works image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                                <div class="how-it-works-tab-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="left-content-area">
                                                <h4 class="title">Nhập người dùng </h4>
                                                <p>Nhập tài khoản quản lý doanh nghiệp </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="right-content-area">
                                                <div class="img-wrapper">
                                                    <img src="assets/img/how-it-works-image.png" alt="how it works image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- how it works area end -->
    
    <!-- screenshort area start -->
    <section class="screenshort-area">
            <div class="shape-1"><img src="assets/img/shape/08.png" alt=""></div>
            <div class="shape-2"><img src="assets/img/shape/09.png" alt=""></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title"><!-- section title -->
                        <span class="subtitle">Một số hình ảnh hoạt động</span>
                        <h3 class="title extra">Phần Mềm Quản Lý Bán Hàng TouPOS</h3>
                        <p>Điểm bán hàng cho các cửa hàng nhỏ, quán cà phê, salon làm đẹp và nhiều hơn thế nữa</p>
                    </div><!-- //. section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="screenshort-carousel"><!-- screenshort carousel -->
                        <div class="single-screenshort-item"><!-- single screenshort item -->
                            <img src="assets/img/screenshort/screen-1.jpg" alt="">
                        </div><!-- //.single screenshort item -->
                        <div class="single-screenshort-item"><!-- single screenshort item -->
                            <img src="assets/img/screenshort/screen-2.jpg" alt="">
                        </div><!-- //.single screenshort item -->
                        <div class="single-screenshort-item"><!-- single screenshort item -->
                            <img src="assets/img/screenshort/screen-3.jpg" alt="">
                        </div><!-- //.single screenshort item -->
                        <div class="single-screenshort-item"><!-- single screenshort item -->
                            <img src="assets/img/screenshort/screen-4.jpg" alt="">
                        </div><!-- //.single screenshort item -->
                    </div><!-- //. screenshort carousel -->
                </div>
            </div>
        </div>
    </section>
    <!-- screenshort area end -->
    
  
    
    <!-- price plan area start -->
	<section class="pricing-plan-area pricing-plan-bg" id="pricing">
	<div class="container">
		<div class="container">
		<div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title white"><!-- section title -->
                        <span class="subtitle">BẢNG GIÁ</span>
                        <h3 class="title extra">Tiết kiệm chi phí hơn với TouPOS</h3>
                        <p>Chỉ từ 1 tô phở 1 ngày bạn đã có ngay phần mềm bán hàng không giới hạn, không giới hạn người dùng, không giới hạn giao dịch. Dùng thử miễn phí đầy đủ chức năng ..</p>
                    </div><!-- //. section title -->
                </div>
            </div>
			<div class="row">
			    <div class="box" style="background: transparent; border: 0;">
			            @include('superadmin::subscription.partials.packages', ['action_type' => 'register'])
			    </div>
			</div>
			</div>
			    </div>
	</section>
    <!-- price plan area end -->

    <!-- team member area start -->
    <section class="team-member-area" id="team">
        <div class="bg-shape-1">
            <img src="assets/img/bg/team-shape.png" alt="">
        </div>
        <div class="bg-shape-2">
            <img src="assets/img/bg/contact-map-bg.jpg" alt="">
        </div>
        <div class="bg-shape-3">
            <img src="assets/img/bg/contact-mobile-bg.png" alt="">
        </div>
        <div class="container">
            
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-area-wrapper" id="contact"><!-- contact area wrapper -->
                        <span class="subtitle">Liên hệ</span>
                        <h3 class="title">Đừng ngần ngại</h3>
                        <p>Để lại thông tin chúng tôi sẽ chăm sóc bạn.</p>
                        <form action="index.html" id="contact_form_submit" class="contact-form sec-margin">
                            <div class="row">
                                <iframe width="600" height="600" src="https://crm.toucan.vn/forms/wtl/2b707548879b157dc8fbc75012404029" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </form>
                    </div><!-- //. contact area wrapper -->
                </div>
            </div>
        </div>
    </section>
    <!-- team member area end -->
    
<!-- footer area start -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                
                    <div class="footer-widget about_widget">
                        <a href="index.html" class="footer-logo"><img src="assets/img/logo-white.png" alt=""></a>
                        <p>Chỉ từ 1 tô phở 1 ngày bạn đã có ngay phần mềm bán hàng không giới hạn, không giới hạn người dùng, không giới hạn giao dịch. Dùng thử miễn phí đầy đủ chức năng ..</p>
                        
                    
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area"><!-- copyright area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-inner"><!-- copyright inner wrapper -->
                        <div class="left-content-area"><!-- left content area -->
                            &copy; Copyrights 2020 Toucan All rights reserved.
                        </div><!-- //. left content aera -->
                        <div class="right-content-area"><!-- right content area -->
                            Designed by <strong>TOUCAN</strong>
                        </div><!-- //. right content area -->
                    </div><!-- //.copyright inner wrapper -->
                </div>
            </div>
        </div>
    </div><!-- //. copyright area -->
</footer>
<!-- footer area end -->

<!-- preloader area start -->
  <!-- preloader area end -->

  <!-- back to top area start -->

  <!-- back to top area end -->

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- contact js-->
    <script src="assets/js/contact.js"></script>
    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>
    <!-- way points js-->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- counterup js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
</body>

            