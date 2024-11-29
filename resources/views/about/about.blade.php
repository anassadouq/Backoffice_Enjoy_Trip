@extends('layouts.app')

@section('content')

 <!-- Sub banner -->
 <section class="banner-con position-relative">
        <div class="swiper-container banner-background-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('./assets/images/slide2.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide3.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide4.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide1.jpg');"></div>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="banner_content text-center" data-aos="fade-up">
                        <div class="banner-box text-center">
                            <h2 class="text-black">About Us</h2>
                            <h3 class="text-dark">Quis aute irure dolor in reprehenderit in voluptate velit esse cillum.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- About -->
<section class="about-con position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                <div class="about_wrapper position-relative" data-aos="zoom-in">
                    <figure class="about-image mb-0">
                        <img src="./assets/images/travel.png" alt="image" class="img-fluid">
                    </figure>
                    <div class="box" data-aos="fade-up">
                        <div class="images">
                            <figure class="about-personimage1 mb-0 ml-0">
                                <img src="./assets/images/client3.jpg" alt="image" class="img-fluid">
                            </figure>
                            <figure class="about-personimage2 mb-0">
                                <img src="./assets/images/client2.jpg" alt="image" class="img-fluid">
                            </figure>
                            <figure class="about-personimage3 mb-0">
                                <img src="./assets/images/client1.jpg" alt="image" class="img-fluid">
                            </figure>
                        </div>
                        <div class="text">
                            <span class="value"><span class="numb counter">156</span>+</span>
                            <span class="review">Satisfied Clients</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-up">
                    <h6>About Us</h6>
                    <h2>Unveil Prime Destinations With Us</h2>
                    <p class="text-size-16 text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur ccaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit.
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <span class="value"><span class="counter">15</span>k</span>
                            <p class="text-size-14 mb-0">Success Journey</p>
                        </li>
                        <li>
                            <span class="value"><span class="counter">26</span>+</span>
                            <p class="text-size-14 mb-0">Awards Win</p>
                        </li>
                        <li>
                            <span class="value"><span class="counter">30</span>+</span>
                            <p class="text-size-14 mb-0">Years of Experience</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Activity -->
<section class="activity-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2">
               
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2">
                <div class="activity_content" data-aos="fade-up">
                    <h6 class="text-white">What We Do</h6>
                    <h2 class="text-white">Activities That Makes You Thrilled</h2>
                    <p class="text-white text-size-16 text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur ccaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit.
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <span class="value"><span class="counter">15</span>k</span>
                            <p class="text-size-14 mb-0">Success Journey</p>
                        </li>
                        <li>
                            <span class="value"><span class="counter">26</span>+</span>
                            <p class="text-size-14 mb-0">Awards Win</p>
                        </li>
                        <li>
                            <span class="value"><span class="counter">30</span>+</span>
                            <p class="text-size-14 mb-0">Years of Experience</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                <div class="activity_wrapper position-relative" data-aos="zoom-in">
                    <figure class="activity-rightbackground mb-0">
                        <img src="assets/images/activity-rightbackground.jpg" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <figure class="activity-bottomimage mb-0">
        <img src="assets/images/activity-bottomimage.png" alt="image" class="img-fluid">
    </figure>
</section>
<!-- Explore -->
<section class="explore-con" id="dropdown">
    <div class="container-fluid">
        <div class="row">
            <div class="explore_content" data-aos="fade-up">
                <h6 id="contact">Where to Go</h6>
                <h2>Explore The World With Us</h2>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="owl-carousel">
                @foreach ($admins as $admin)
                    <div class="item">
                        <div class="explore-box">
                            <figure class="image mb-0">
                                <img src="/images/{{$admin['image']}}" alt="image" class="img-fluid">
                            </figure>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <span class="rate text-white">{{ $admin->rating }}</span>
                            </div>
                            <div class="content">
                                <div class="text">
                                    <div class="place">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span class="text-white">{{ $admin->places }} Places</span>
                                    </div>
                                    <h4 class="text-white mb-0">{{ $admin->name }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection