@extends('layouts.app')
@section('content')
    <!-- Sub banner -->
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
                        <div class="banner-box text-center">
                            <h2 class="text-black">Voyages</h2>
                            <h3 class="text-dark">Les voyages International</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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
            <div class="tabs-box tabs-options" id="contact">
                <div class="tab-content">
                    <div id="morocco" class="tab-pane fade in active show">
                        <div class="row" data-aos="fade-up">
                            <div class="owl-carousel owl-theme">
                                @foreach($admins as $admin)
                                    @if($admin->where == "Hors")
                                        <div class="item">
                                            <div class="place-box">
                                                <figure class="image mb-0">
                                                    <a href="{{ route('detail_trip.show', $admin->id) }}">
                                                        <img src="{{ asset('assets/images/' . $admin->image) }}" alt="image" class="img-fluid">
                                                    </a>
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
                                                    <a href="{{ route('detail_trip.show', $admin->id) }}" class="text-decoration-none">
                                                        <h4>{{ $admin->name }}</h4>
                                                    </a>
                                                    <div class="value">
                                                        <span class="money"><span class="counter">{{ $admin->price }}</span>DH</span>
                                                        <a href="{{ route('reservation.create', ['id_trip' => $admin->id]) }}" class="text-decoration-none book_now">Book now<i class="fa-solid fa-arrow-right"></i></a>
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
@endsection