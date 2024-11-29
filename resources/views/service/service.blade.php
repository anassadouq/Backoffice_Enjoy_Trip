@extends('layouts.app')

@section('content')

    <!-- Sub banner -->
    <section class="banner-con position-relative">
        <div class="swiper-container banner-background-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('./assets/images/slide3.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide4.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide2.jpg');"></div>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="banner_content text-center" data-aos="fade-up">
                        <div class="banner-box text-center">
                            <h2 class="text-black">Services</h2>
                            <h3 class="text-dark">Quis aute irure dolor in reprehenderit in voluptate velit esse cillum.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Service Detail -->
<section class="service_detail position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-box">
                    <figure class="image" data-aos="fade-up">
                        <img src="./assets/images/adventure.jpg" alt="image" class="img-fluid">
                    </figure>
                    <h3 data-aos="fade-up">Family Adventures</h3>
                    <p class="text1 text-size-16" data-aos="fade-up">Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sed do eiusmod tem por incididunt ut labore. Eiusmod tempor incididunt ut labore et 
                        dolore magna aliqua. Quis ipsum suspendisse. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="text2 text-size-16" data-aos="fade-up">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                    </p>
                    <ul class="list-unstyled list" data-aos="fade-up">
                        <li class="text-size-16"><i class="fa-solid fa-check"></i>Quis ipsum suspendisse ultrices gravida</li>
                        <li class="text-size-16"><i class="fa-solid fa-check"></i>Excepteur sint occaecat cupidatat.</li>
                        <li class="text-size-16"><i class="fa-solid fa-check"></i>Duis aute irure dolor in voluta facis.</li>
                        <li class="text-size-16"><i class="fa-solid fa-check"></i>Rerum hic tenetur a delectus au occae.</li>
                    </ul>
                    <p class="text1 text-size-16" data-aos="fade-up">Mabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Eiusmod tempor incididunt ut labore et 
                        dolore magna aliqua. Quis ipsum suspendisse. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="text-size-16 mb-0" data-aos="fade-up">Sunt in culpa qui officia deserunt mollit. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service -->
<section class="service-con service3-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="service_content text-center" data-aos="fade-up">
                    <h6>What We Offer</h6>
                    <h2>Best Services We Offer</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mx-auto">
                <div class="service-box">
                    <figure class="icon">
                        <img src="./assets/images/service-icon1.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Exciting Journeys</h4>
                    <p class="text-size-16">Embark on thrilling expeditions and immerse yourself in unforgettable experiences.</p>
                    <a href="/service-detail" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mx-auto">
                <div class="service-box">
                    <figure class="icon">
                        <img src="./assets/images/service-icon2.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Expert Guides</h4>
                    <p class="text-size-16">Our seasoned guides ensure a safe and enriching adventure, tailored to your needs.</p>
                    <a href="/service-detail" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mx-auto">
                <div class="service-box">
                    <figure class="icon">
                        <img src="./assets/images/service-icon3.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Personalized Packages</h4>
                    <p class="text-size-16">Choose from a variety of custom packages designed to suit every traveler's desire.</p>
                    <a href="/service-detail" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection