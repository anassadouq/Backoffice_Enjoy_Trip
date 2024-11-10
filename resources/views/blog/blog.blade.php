@extends('layouts.app')

@section('content')
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="./assets/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="./assets/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- Latest compiled and minified CSS -->
        <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./assets/js/bootstrap.min.js">
        <!-- Font Awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <!-- StyleSheet link CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
        <link href="assets/css/blog.css" rel="stylesheet" type="text/css">
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/aos.css" rel="stylesheet">
        <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </head>
  <body>
    <section class="banner-con position-relative">
        <div class="swiper-container banner-background-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('./assets/images/slide4.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide3.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide2.jpg');"></div>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="banner_content text-center" data-aos="fade-up">
                        <div class="banner-box text-center">
                            <h2 class="text-black">Blog</h2>
                            <h3 class="text-dark">Quis aute irure dolor in reprehenderit in voluptate velit esse cillum.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- BLOG MAIN SECTION START HERE -->
    <div class="blog-tabs-section padding-top padding-bottom background-gradient">
        <div class="container">
            <div class="blog-tabs-inner-section" data-aos="fade-up" data-aos-duration="700">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/blog-business.jpg" alt="single-blog-tab-img1"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="/blog">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="generic-btn2">
                                        <a href="blog">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/blog-business.jpg" alt="single-blog-tab-img2"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="blog">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="generic-btn2">
                                        <a href="blog">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/blog-business.jpg" alt="single-blog-tab-img3"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="/blog">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="generic-btn2">
                                        <a href="blog">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/blog-business.jpg" alt="single-blog-tab-img4"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="blog">How’s the Economy?</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="generic-btn2">
                                        <a href="blog">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                   
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- PRE LOADER -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Latest compiled JavaScript -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/back-to-top-button.js"></script>
    <script src="assets/js/preloader.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            speed: 1000,
        });
        </script>
    </body>
    </html>

@endsection