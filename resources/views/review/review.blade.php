@extends('layouts.app')

@section('content')
    <!-- Sub banner -->
    <section class="banner-con position-relative">
        <div class="swiper-container banner-background-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('./assets/images/slide4.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide2.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide3.jpg');"></div>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="banner_content text-center" data-aos="fade-up">
                        <div class="banner-box text-center">
                            <h2 class="text-black">Review</h2>
                            <h3 class="text-dark">Quis aute irure dolor in reprehenderit in voluptate velit esse cillum.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Testimonial -->
<section class="testimonial3-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial_content text-center" data-aos="fade-up">
                    <h6>Testimonials</h6>
                    <h2>Happy Clients are Saying</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-box">
                            <figure class="testimonial-personimage mb-0">
                                <img src="assets/images/client3.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="content">
                                <p class="text-size-16">“ Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremrue laudantium, totam rem aperiam,
                                    eaque ipsa ruae facere possimus ”
                                </p>
                                <ul class="list-unstyled">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span class="name">Merina Doe</span>
                                <span class="review">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-box">
                            <figure class="testimonial-personimage mb-0">
                                <img src="assets/images/client2.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="content">
                                <p class="text-size-16">“ Red ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremrue laudantium, totam rem aperiam,
                                    eaque ipsa ruae facere possimus ”
                                </p>
                                <ul class="list-unstyled">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span class="name">Kevin Parker</span>
                                <span class="review">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-box">
                            <figure class="testimonial-personimage mb-0">
                                <img src="assets/images/client1.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="content">
                                <p class="text-size-16">“ Red ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremrue laudantium, totam rem aperiam,
                                    eaque ipsa ruae facere possimus ”
                                </p>
                                <ul class="list-unstyled">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span class="name">Thailor Parker</span>
                                <span class="review">Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection