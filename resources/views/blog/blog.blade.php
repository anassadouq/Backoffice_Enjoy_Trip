@extends('layouts.app')

@section('content')
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
                    <div class="tab-pane fade" id="advices" role="tabpanel" aria-labelledby="advices-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img3.jpg" alt="single-blog-tab-img3"
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
                                        <a href="/blog">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img4.jpg" alt="single-blog-tab-img4"
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
                                    <img src="assets/images/single-blog-tab-img5.jpg" alt="single-blog-tab-img5"
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
                                    <img src="assets/images/single-blog-tab-img6.jpg" alt="single-blog-tab-img6"
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
                    <div class="tab-pane fade" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img5.jpg" alt="single-blog-tab-img5"
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
                                    <img src="assets/images/single-blog-tab-img6.jpg" alt="single-blog-tab-img6"
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
                    <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img3.jpg" alt="single-blog-tab-img3"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="blog">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="generic-btn2">
                                        <a href="blog">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img4.jpg" alt="single-blog-tab-img4"
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
                    <div class="tab-pane fade" id="consultation" role="tabpanel" aria-labelledby="consultation-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img6.jpg" alt="single-blog-tab-img6"
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
                                    <img src="assets/images/single-blog-tab-img3.jpg" alt="single-blog-tab-img3"
                                        loading="lazy" class="img-fluid">
                                </figure>
                                <div class="single-blog-details">
                                    <ul class="list-unstyled">
                                        <li class="position-relative"><i class="fas fa-user"></i> Posted by Admin</li>
                                        <li class="position-relative"><i class="fas fa-calendar-alt"></i> October 30,
                                            2022</li>
                                    </ul>
                                    <h4><a href="blog">Our strength, Your Business</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem
                                        ipsum dolor sit amet, consectetur</p>
                                    <div class="generic-btn2">
                                        <a href="blog">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                        <div class="single-blog-outer-con">
                            <div class="single-blog-box">
                                <figure class="mb-0">
                                    <img src="assets/images/single-blog-tab-img4.jpg" alt="single-blog-tab-img4"
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
                                    <img src="assets/images/single-blog-tab-img6.jpg" alt="single-blog-tab-img6"
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