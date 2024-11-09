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
                            <h2 class="text-black">Destinations</h2>
                            <h3 class="text-dark">Nuis aute irure dolor in reprehenderit in voluptate velit esse cillum.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Place -->
<section class="place-con destinationpage-place position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="place_content text-center" data-aos="fade-up">
                    <h6>Best Places</h6>
                    <h2>Popular Destinations</h2>
                </div>
            </div>
        </div>
        <div class="tabs-box tabs-options">
            <ul class="nav nav-tabs" data-aos="fade-up">
                <li><a class="active" data-toggle="tab" href="#all">All</a></li>
                <li><a data-toggle="tab" href="#morocco">Morocco</a></li>
                <li><a data-toggle="tab" href="#asia">Asia</a></li>
                <li><a data-toggle="tab" href="#europe">Europe</a></li>
                <li><a data-toggle="tab" href="#africa">Africa</a></li>
            </ul>
            <div class="tab-content">
                <div id="all" class="tab-pane fade in active show">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche 01.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-1"><h4>Dakhla</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">5400</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche 02.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-2"><h4>Hoceima</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">2999</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche 03.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-3"><h4>Taghazout</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">3600</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche 04.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-4"><h4>Hoceima</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">5100</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche w 01.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-5"><h4>Istanbul</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">9900</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche w 02.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-6"><h4>Dubai</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">10500</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche w 03.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-7"><h4>Egypt</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">15900</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche w 04.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-8"><h4>Antalya Istanbul</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">19500</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="morocco" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        
                            
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche 01.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-1"><h4>Dakhla</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">5400</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche 02.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-2"><h4>Hoceima</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">2999</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche 03.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-3"><h4>Taghazout</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">3600</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche 04.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-4"><h4>Hoceima</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">5100</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="asia" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche w 02.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-6"><h4>Dubai</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">10500</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="europe" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche w 01.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">4 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">3 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-5"><h4>Istanbul</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">9900</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche w 04.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">5 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">4 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-8"><h4>Antalya Istanbul</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">19500</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="africa" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="place-box">
                                <figure class="image mb-0">
                                    <img src="./assets/images/Affiche w 03.jpg" alt="image" class="img-fluid">
                                </figure>
                                <div class="lower_content">
                                    <div class="content">
                                        <div class="calendar">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span class="day">7 Days</span>
                                        </div>
                                        <div class="people">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="person">2 Person</span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-7"><h4>Egypt</h4></a>
                                    <div class="value">
                                        <span class="money"><span class="counter">15900</span>DH</span>
                                        <a href="./contact.html" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
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
<div class="project_modal">
    <div id="blog-model-1" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="./assets/images/Affiche 01.jpg" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="project_content">
                            <h4>Dakhla</h4>
                            <span class="text">Eiusmod enim tempor incididunt aut labore et dolore magna aliua ruis nostrud exercitation ullamco laboris.</span>
                            <div class="properties">
                                <ul class="list-unstyled mb-0">
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Excepteur sint occaecat</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Rerum hic tenetur a sapiente</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Duis aute irure dolor</li>
                                </ul>
                            </div>
                            <span class="text">Amet consectetur adipiscing elit adipis eleifend dictum poten mattis viverra eget quam lacus enimcing inti porttitor bibenu relit duiteri nisl areo nuam lacus.</span>
                            <a href="./contact.html" class="text-decoration-none all_button">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project_modal">
    <div id="blog-model-2" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="./assets/images/Affiche 02.jpg" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="project_content">
                            <h4>Hoceima</h4>
                            <span class="text">Eiusmod enim tempor incididunt aut labore et dolore magna aliua ruis nostrud exercitation ullamco laboris.</span>
                            <div class="properties">
                                <ul class="list-unstyled mb-0">
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Excepteur sint occaecat</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Rerum hic tenetur a sapiente</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Duis aute irure dolor</li>
                                </ul>
                            </div>
                            <span class="text">Amet consectetur adipiscing elit adipis eleifend dictum poten mattis viverra eget quam lacus enimcing inti porttitor bibenu relit duiteri nisl areo nuam lacus.</span>
                            <a href="./contact.html" class="text-decoration-none all_button">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project_modal">
    <div id="blog-model-3" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="./assets/images/Affiche 03.jpg" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="project_content">
                            <h4>Taghazout</h4>
                            <span class="text">Eiusmod enim tempor incididunt aut labore et dolore magna aliua ruis nostrud exercitation ullamco laboris.</span>
                            <div class="properties">
                                <ul class="list-unstyled mb-0">
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Excepteur sint occaecat</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Rerum hic tenetur a sapiente</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Duis aute irure dolor</li>
                                </ul>
                            </div>
                            <span class="text">Amet consectetur adipiscing elit adipis eleifend dictum poten mattis viverra eget quam lacus enimcing inti porttitor bibenu relit duiteri nisl areo nuam lacus.</span>
                            <a href="./contact.html" class="text-decoration-none all_button">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project_modal">
    <div id="blog-model-4" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="./assets/images/Affiche 04.jpg" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="project_content">
                            <h4>Hoceima</h4>
                            <span class="text">Eiusmod enim tempor incididunt aut labore et dolore magna aliua ruis nostrud exercitation ullamco laboris.</span>
                            <div class="properties">
                                <ul class="list-unstyled mb-0">
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Excepteur sint occaecat</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Rerum hic tenetur a sapiente</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Duis aute irure dolor</li>
                                </ul>
                            </div>
                            <span class="text">Amet consectetur adipiscing elit adipis eleifend dictum poten mattis viverra eget quam lacus enimcing inti porttitor bibenu relit duiteri nisl areo nuam lacus.</span>
                            <a href="./contact.html" class="text-decoration-none all_button">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project_modal">
    <div id="blog-model-5" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="./assets/images/Affiche w 01.jpg" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="project_content">
                            <h4>Istanbul</h4>
                            <span class="text">Eiusmod enim tempor incididunt aut labore et dolore magna aliua ruis nostrud exercitation ullamco laboris.</span>
                            <div class="properties">
                                <ul class="list-unstyled mb-0">
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Excepteur sint occaecat</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Rerum hic tenetur a sapiente</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Duis aute irure dolor</li>
                                </ul>
                            </div>
                            <span class="text">Amet consectetur adipiscing elit adipis eleifend dictum poten mattis viverra eget quam lacus enimcing inti porttitor bibenu relit duiteri nisl areo nuam lacus.</span>
                            <a href="./contact.html" class="text-decoration-none all_button">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project_modal">
    <div id="blog-model-6" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="./assets/images/Affiche w 02.jpg" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="project_content">
                            <h4>Dubai</h4>
                            <span class="text">Eiusmod enim tempor incididunt aut labore et dolore magna aliua ruis nostrud exercitation ullamco laboris.</span>
                            <div class="properties">
                                <ul class="list-unstyled mb-0">
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Excepteur sint occaecat</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Rerum hic tenetur a sapiente</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Duis aute irure dolor</li>
                                </ul>
                            </div>
                            <span class="text">Amet consectetur adipiscing elit adipis eleifend dictum poten mattis viverra eget quam lacus enimcing inti porttitor bibenu relit duiteri nisl areo nuam lacus.</span>
                            <a href="./contact.html" class="text-decoration-none all_button">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project_modal">
    <div id="blog-model-7" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="./assets/images/Affiche w 03.jpg" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="project_content">
                            <h4>Egypt</h4>
                            <span class="text">Eiusmod enim tempor incididunt aut labore et dolore magna aliua ruis nostrud exercitation ullamco laboris.</span>
                            <div class="properties">
                                <ul class="list-unstyled mb-0">
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Excepteur sint occaecat</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Rerum hic tenetur a sapiente</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Duis aute irure dolor</li>
                                </ul>
                            </div>
                            <span class="text">Amet consectetur adipiscing elit adipis eleifend dictum poten mattis viverra eget quam lacus enimcing inti porttitor bibenu relit duiteri nisl areo nuam lacus.</span>
                            <a href="./contact.html" class="text-decoration-none all_button">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project_modal">
    <div id="blog-model-8" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="fa-solid fa-x"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="./assets/images/Affiche w 04.jpg" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="project_content">
                            <h4>Antalya Istanbul</h4>
                            <span class="text">Eiusmod enim tempor incididunt aut labore et dolore magna aliua ruis nostrud exercitation ullamco laboris.</span>
                            <div class="properties">
                                <ul class="list-unstyled mb-0">
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Excepteur sint occaecat</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Rerum hic tenetur a sapiente</li>
                                    <li class="text-size-16"><i class="circle fa fa-check" aria-hidden="true"></i>Duis aute irure dolor</li>
                                </ul>
                            </div>
                            <span class="text">Amet consectetur adipiscing elit adipis eleifend dictum poten mattis viverra eget quam lacus enimcing inti porttitor bibenu relit duiteri nisl areo nuam lacus.</span>
                            <a href="./contact.html" class="text-decoration-none all_button">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection