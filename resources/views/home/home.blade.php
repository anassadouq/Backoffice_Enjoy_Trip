@extends('layouts.app')

@section('content')

    <!-- Banner -->
    <section class="banner-con position-relative">
        <div class="swiper-container banner-background-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('./assets/images/slide1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide2.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide3.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('./assets/images/slide4.jpg');"></div>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="banner_content text-center" data-aos="fade-up">
                        <div class="banner-box">
                            <form action="{{ route('home') }}" method="GET" onsubmit="scrollToTrips(event)">
                                <div class="form-group float-left mb-0">
                                    <div class="upper">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <label for="destination">Destination</label>
                                    </div>
                                    <input type="text" class="form_style" id="destination" placeholder="Switzerland" name="destination">
                                </div>
                                <div class="form-group float-left mb-0">
                                    <div class="upper">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <label for="date">Date</label>
                                    </div>
                                    <input type="date" class="form_style" id="date" name="date" value="{{ request()->input('date') }}">
                                </div>
                                <div class="form-group float-left mb-0 mr-0">
                                    <div class="upper">
                                        <i class="fa-solid fa-users"></i>
                                        <label for="people">People</label>
                                    </div>
                                    <input type="text" class="form_style" id="people" placeholder="4 People" name="people">
                                </div>
                                <button type="submit"><i class="search fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
<!-- Explore -->
<section class="explore-con" id="dropdown">
    <div class="container-fluid">
        <div class="row">
            <div class="explore_content" data-aos="fade-up">
                <h6>Where to Go</h6>
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
<!-- Service -->
<section class="service-con position-relative">
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
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="service-box">
                    <figure class="icon">
                        <img src="./assets/images/service-icon1.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Exciting Journeys</h4>
                    <p class="text-size-16">Embark on thrilling expeditions and immerse yourself in unforgettable experiences.</p>
                    <a href="/service" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="service-box">
                    <figure class="icon">
                        <img src="./assets/images/service-icon2.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Expert Guides</h4>
                    <p class="text-size-16">Our seasoned guides ensure a safe and enriching adventure, tailored to your needs.</p>
                    <a href="/service" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="service-box">
                    <figure class="icon">
                        <img src="./assets/images/service-icon3.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Personalized Packages</h4>
                    <p class="text-size-16">Choose from a variety of custom packages designed to suit every traveler's desire.</p>
                    <a href="/service" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="service-box">
                    <figure class="icon">
                        <img src="./assets/images/service-icon4.png" alt="image" class="img-fluid">
                    </figure> 
                    <h4>Scenic Trails</h4>
                    <p class="text-size-16">Explore breathtaking trails and discover the beauty of untouched nature.</p>
                    <a href="/service" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                </div> 
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="service-box">
                    <figure class="icon">
                        <img src="./assets/images/service-icon5.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Family Adventures</h4>
                    <p class="text-size-16">Create lasting memories with family admins that are fun and suitable for all ages.</p>
                    <a href="/service" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">            
                <div class="service-box">
                    <figure class="icon">
                        <img src="./assets/images/service-icon6.png" alt="image" class="img-fluid">
                    </figure>
                    <h4>Comprehensive Support</h4>
                    <p class="text-size-16">Receive a complete guide to make your adventure seamless and worry-free.</p>
                    <a href="/service" class="text-decoration-none learn_more">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Join -->
<section class="join-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="join_content text-center" data-aos="fade-up">
                    <h6 class="text-white">Come & Join Us</h6>
                    <h2 class="text-white">Making Adventure Tours and Activities Accessible and Affordable for Everyone.</h2>
                    <a href="./contact.html" class="text-decoration-none all_button">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Place -->
<section class="place-con position-relative" id="trips">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="place_content text-center" data-aos="fade-up">
                    <h6>Best Places</h6>
                    <h2>Popular Destinations</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="owl-carousel owl-theme">
                @foreach($admins as $admin)
                    <div class="item">
                        <div class="place-box">
                            <figure class="image mb-0">
                                <img src="{{ asset('assets/images/' . $admin->image) }}" alt="image" class="img-fluid">
                            </figure>
                            <div class="lower_content">
                                <div class="content">
                                    <div class="calendar">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="day">
                                            {{ \Carbon\Carbon::parse($admin->dateD)->diffInDays(\Carbon\Carbon::parse($admin->dateF)) }} Days
                                        </span>
                                    </div>
                                    <div class="people">
                                        <i class="fa-solid fa-user"></i>
                                        <span class="person">{{ $admin->nombrepersonne }} Person</span>
                                    </div>
                                </div>
                                <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-{{ $admin->id }}">
                                    <h4>{{ $admin->name }}</h4>
                                </a>
                                <div class="value">
                                    <span class="money"><span class="counter">{{ $admin->price }}</span>DH</span>
                                    <a href="{{ route('reservation.create', ['id_trip' => $admin->id]) }}" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="testimonial-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="testimonial_wrapper position-relative" data-aos="zoom-in">
                    <img src="./assets/images/customers.png" alt="image" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="testimonial_contentwrapper" data-aos="fade-up">
                    <div class="testimonial_content">
                        <h6>Testimonials</h6>
                        <h2>What Our Customers Have To Say</h2>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-box">
                                    <div class="content-box">
                                        <p class="text-size-16">Nemo enim ipsam voluptatem quia voluptas sit asperna aut odit aut 
                                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem 
                                            sequi nesciuntporro quisuam est, rui dolorem ipsum quia dolor sit amet, 
                                            consectetur adieisci velit sed ruia.
                                        </p>
                                        <div class="content">
                                            <figure class="testimonial-quote">
                                                <img src="./assets/images/testimonial-quote.png" alt="image" class="img-fluid">
                                            </figure>
                                            <div class="designation-outer">
                                                <span class="name">Kevin James</span>
                                                <span class="review">Happy Client</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-box">
                                    <div class="content-box">
                                        <p class="text-size-16">Nemo enim ipsam voluptatem quia voluptas sit asperna aut odit aut 
                                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem 
                                            sequi nesciuntporro quisuam est, rui dolorem ipsum quia dolor sit amet, 
                                            consectetur adieisci velit sed ruia.
                                        </p>
                                        <div class="content">
                                            <figure class="testimonial-quote">
                                                <img src="./assets/images/testimonial-quote.png" alt="image" class="img-fluid">
                                            </figure>
                                            <div class="designation-outer">
                                                <span class="name">Kevin James</span>
                                                <span class="review">Happy Client</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-outer">
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <i class="fa-solid fa-arrow-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <i class="fa-solid fa-arrow-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partner -->
<section class="partner-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner_content text-center" data-aos="fade-up">
                    <h6>Partners</h6>
                    <h2>Our Trusted Partners</h2>
                </div>
            </div>
            <ul class="list-unstyled mb-0" data-aos="fade-up">
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner1.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner2.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0 haus">
                        <img src="./assets/images/partner3.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner4.png" alt="image" class="img-fluid">
                    </figure>
                </li>
            </ul>
            <ul class="list-unstyled second mb-0" data-aos="fade-up">
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner5.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li>
                    <figure class="mb-0">
                        <img src="./assets/images/partner6.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li class="mb-0">
                    <figure class="mb-0">
                        <img src="./assets/images/partner7.png" alt="image" class="img-fluid">
                    </figure>
                </li>
                <li class="mb-0">
                    <figure class="mb-0">
                        <img src="./assets/images/partner8.png" alt="image" class="img-fluid">
                    </figure>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Project SECTION POPUP -->
@foreach($admins as $admin)
<div class="project_modal">
    <div id="blog-model-{{ $admin->id }}" class="modal fade blog-model-con" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="{{ asset('assets/images/' . $admin->image) }}" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="project_content">
                            <h4>{{ $admin->name }}</h4>
                            <span class="text">{{ $admin->description }}</span>
                            <div class="properties">
                                <ul class="list-unstyled mb-0">
                                    
                                </ul>
                            </div>

                            <a href="{{ route('reservation.create', ['id_trip' => $admin->id]) }}" class="text-decoration-none all_button">Book now<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
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
<script src="assets/js/counter.js"></script>

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

    window.onload = function() {
        if (window.location.hash === "#trips") {
            // Smooth scroll to the #trips section
            document.querySelector('#trips').scrollIntoView({ behavior: 'smooth' });
        }
    };
</script>

@endsection