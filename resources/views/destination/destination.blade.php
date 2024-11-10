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
                <li><a data-toggle="tab" href="#out">Out</a></li>
            </ul>
            <div class="tab-content">
                <div id="all" class="tab-pane fade in active show">
                    <div class="row" data-aos="fade-up">
                        <div class="owl-carousel owl-theme">
                            @foreach($trips as $trip)
                                <div class="item">
                                    <div class="place-box">
                                        <figure class="image mb-0">
                                            <img src="{{ asset('assets/images/' . $trip->image) }}" alt="image" class="img-fluid">
                                        </figure>
                                        <div class="lower_content">
                                            <div class="content">
                                                <div class="calendar">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <span class="day">
                                                        {{ \Carbon\Carbon::parse($trip->dateD)->diffInDays(\Carbon\Carbon::parse($trip->dateF)) }} Days
                                                    </span>

                                                </div>
                                                <div class="people">
                                                    <i class="fa-solid fa-user"></i>
                                                    <span class="person">{{ $trip->nombrepersonne }} Person</span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-{{ $trip->id }}">
                                                <h4>{{ $trip->name }}</h4>
                                            </a>
                                            <div class="value">
                                                <span class="money"><span class="counter">{{ $trip->price }}</span>DH</span>
                                                <a href="{{ route('reservation.create', ['id_trip' => $trip->id]) }}" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="morocco" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        <div class="owl-carousel owl-theme">
                            @foreach($trips as $trip)
                                @if($trip->where == "Maroc")
                                    <div class="item">
                                        <div class="place-box">
                                            <figure class="image mb-0">
                                                <img src="{{ asset('assets/images/' . $trip->image) }}" alt="image" class="img-fluid">
                                            </figure>
                                            <div class="lower_content">
                                                <div class="content">
                                                    <div class="calendar">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                        <span class="day">
                                                            {{ \Carbon\Carbon::parse($trip->dateD)->diffInDays(\Carbon\Carbon::parse($trip->dateF)) }} Days
                                                        </span>

                                                    </div>
                                                    <div class="people">
                                                        <i class="fa-solid fa-user"></i>
                                                        <span class="person">{{ $trip->nombrepersonne }} Person</span>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-{{ $trip->id }}">
                                                    <h4>{{ $trip->name }}</h4>
                                                </a>
                                                <div class="value">
                                                    <span class="money"><span class="counter">{{ $trip->price }}</span>DH</span>
                                                    <a href="{{ route('reservation.create', ['id_trip' => $trip->id]) }}" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="out" class="tab-pane fade">
                    <div class="row" data-aos="fade-up">
                        <div class="owl-carousel owl-theme">
                            @foreach($trips as $trip)
                                @if($trip->where == "Hors")
                                    <div class="item">
                                        <div class="place-box">
                                            <figure class="image mb-0">
                                                <img src="{{ asset('assets/images/' . $trip->image) }}" alt="image" class="img-fluid">
                                            </figure>
                                            <div class="lower_content">
                                                <div class="content">
                                                    <div class="calendar">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                        <span class="day">
                                                            {{ \Carbon\Carbon::parse($trip->dateD)->diffInDays(\Carbon\Carbon::parse($trip->dateF)) }} Days
                                                        </span>

                                                    </div>
                                                    <div class="people">
                                                        <i class="fa-solid fa-user"></i>
                                                        <span class="person">{{ $trip->nombrepersonne }} Person</span>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#blog-model-{{ $trip->id }}">
                                                    <h4>{{ $trip->name }}</h4>
                                                </a>
                                                <div class="value">
                                                    <span class="money"><span class="counter">{{ $trip->price }}</span>DH</span>
                                                    <a href="{{ route('reservation.create', ['id_trip' => $trip->id]) }}" class="text-decoration-none book_now">Book Now<i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
@foreach($trips as $trip)
    <div class="project_modal">
        <div id="blog-model-{{ $trip->id }}" class="modal fade blog-model-con" tabindex="-1" aria-hidden="true">
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
                                    <img src="{{ asset('assets/images/' . $trip->image) }}" alt="blog-img" class="img-fluid">
                                </figure>
                            </div>
                            <div class="project_content">
                                <h4>{{ $trip->name }}</h4>
                                <span class="text">{{ $trip->description }}</span>
                                <div class="properties">
                                    <ul class="list-unstyled mb-0">
                                        
                                    </ul>
                                </div>

                                <a href="{{ route('reservation.create', ['id_trip' => $trip->id]) }}" class="text-decoration-none all_button">Book now<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection